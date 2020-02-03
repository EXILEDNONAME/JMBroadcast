<?php

namespace App\Http\Controllers\Backend\Broadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response;

// MODEL & REQUEST
use App\Models\Backend\Broadcast\Video3;
use App\Http\Requests\Backend\Broadcast\Video3\StoreRequest;
use App\Http\Requests\Backend\Broadcast\Video3\UpdateRequest;

class Video3Controller extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  // FIX
  public function index() {
    $data = Video3::all();
    return view('pages.backend.broadcast.video-3.index', compact('data'));
  }

  // FIX
  public function show($id) {
    $data = Video3::findOrFail($id);
    return view('pages.backend.broadcast.video-3.show', compact('data'));
  }

  // FIX
  public function create() {
    return view('pages.backend.broadcast.video-3.create');
  }

  // FIX
  public function store(StoreRequest $request){
    $file = $request->file('file');
    $file_name = time()."_".$file->getClientOriginalName();
    $target_upload = base_path('files');
    $file->move($target_upload, $file_name);

    Video3::create([
      'name' => $request->name,
      'description' => $request->description,
      'file' => $file_name,
      'sort' => $request->sort,
      'created_by' => $request->created_by,
      'updated_by' => $request->updated_by,
    ]);

    return redirect()->route('video-3.index')->with('success', 'Video has been created');
  }

  // FIX
  public function edit($id)
  {
    $data = Video3::findOrFail($id);
    return view('pages.backend.broadcast.video-3.edit', compact('data'));
  }

  // FIX
  public function update(UpdateRequest $request, $id)
  {
    $requestData = $request->all();
    $data = Video3::findOrFail($id);
    $data->update($requestData);

    return redirect()->route('video-3.index')->with('success', 'Video has been updated');
  }

  public function destroy($id)
  {
      Video3::destroy($id);
      return redirect()->route('video-3.index')->with('success', 'Video has been removed');
  }

  public function enable($id) {
    $member = Video3::findOrFail($id);
    $member->active = 1;
    $member->save();
    return redirect()->route('video-3.index')->with('success', 'Video has been activated');
  }

  public function disable($id)
  {
    $member = Video3::findOrFail($id);
    $member->active = 2;
    $member->save();
    return redirect()->route('video-3.index')->with('success', 'Video has been non-activated');
  }

}
