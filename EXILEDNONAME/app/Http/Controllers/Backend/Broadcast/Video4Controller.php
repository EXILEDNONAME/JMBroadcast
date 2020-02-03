<?php

namespace App\Http\Controllers\Backend\Broadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response;

// MODEL & REQUEST
use App\Models\Backend\Broadcast\Video4;
use App\Http\Requests\Backend\Broadcast\Video4\StoreRequest;
use App\Http\Requests\Backend\Broadcast\Video4\UpdateRequest;

class Video4Controller extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  // FIX
  public function index() {
    $data = Video4::all();
    return view('pages.backend.broadcast.video-4.index', compact('data'));
  }

  // FIX
  public function show($id) {
    $data = Video4::findOrFail($id);
    return view('pages.backend.broadcast.video-4.show', compact('data'));
  }

  // FIX
  public function create() {
    return view('pages.backend.broadcast.video-4.create');
  }

  // FIX
  public function store(StoreRequest $request){
    $file = $request->file('file');
    $file_name = time()."_".$file->getClientOriginalName();
    $target_upload = base_path('files');
    $file->move($target_upload, $file_name);

    Video4::create([
      'name' => $request->name,
      'description' => $request->description,
      'file' => $file_name,
      'sort' => $request->sort,
      'created_by' => $request->created_by,
      'updated_by' => $request->updated_by,
    ]);

    return redirect()->route('video-4.index')->with('success', 'Video has been created');
  }

  // FIX
  public function edit($id)
  {
    $data = Video4::findOrFail($id);
    return view('pages.backend.broadcast.video-4.edit', compact('data'));
  }

  // FIX
  public function update(UpdateRequest $request, $id)
  {
    $requestData = $request->all();
    $data = Video4::findOrFail($id);
    $data->update($requestData);

    return redirect()->route('video-4.index')->with('success', 'Video has been updated');
  }

  public function destroy($id)
  {
      Video4::destroy($id);
      return redirect()->route('video-4.index')->with('success', 'Video has been removed');
  }

  public function enable($id) {
    $member = Video4::findOrFail($id);
    $member->active = 1;
    $member->save();
    return redirect()->route('video-4.index')->with('success', 'Video has been activated');
  }

  public function disable($id)
  {
    $member = Video4::findOrFail($id);
    $member->active = 2;
    $member->save();
    return redirect()->route('video-4.index')->with('success', 'Video has been non-activated');
  }

}
