<?php

namespace App\Http\Controllers\Backend\Broadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response;

// MODEL & REQUEST
use App\Models\Backend\Broadcast\Video2;
use App\Http\Requests\Backend\Broadcast\Video2\StoreRequest;
use App\Http\Requests\Backend\Broadcast\Video2\UpdateRequest;

class Video2Controller extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  // FIX
  public function index() {
    $data = Video2::all();
    return view('pages.backend.broadcast.video-2.index', compact('data'));
  }

  // FIX
  public function show($id) {
    $data = Video2::findOrFail($id);
    return view('pages.backend.broadcast.video-2.show', compact('data'));
  }

  // FIX
  public function create() {
    return view('pages.backend.broadcast.video-2.create');
  }

  // FIX
  public function store(StoreRequest $request){
    $file = $request->file('file');
    $file_name = time()."_".$file->getClientOriginalName();
    $target_upload = base_path('files');
    $file->move($target_upload, $file_name);

    Video2::create([
      'name' => $request->name,
      'description' => $request->description,
      'file' => $file_name,
      'sort' => $request->sort,
      'created_by' => $request->created_by,
      'updated_by' => $request->updated_by,
    ]);

    return redirect()->route('video-2.index')->with('success', 'Video has been created');
  }

  // FIX
  public function edit($id)
  {
    $data = Video2::findOrFail($id);
    return view('pages.backend.broadcast.video-2.edit', compact('data'));
  }

  // FIX
  public function update(UpdateRequest $request, $id)
  {
    $requestData = $request->all();
    $data = Video2::findOrFail($id);
    $data->update($requestData);

    return redirect()->route('video-2.index')->with('success', 'Video has been updated');
  }

  public function destroy($id) {
    $delete = Video2::where('id', $id)->get();
    foreach ( $delete as $item ) {
      unlink(base_path('files/'. $item->file));
      Video2::destroy($id);
    }

    return redirect()->route('video-2.index')->with('success', 'Video has been removed');
  }

  public function enable($id) {
    $member = Video2::findOrFail($id);
    $member->active = 1;
    $member->save();
    return redirect()->route('video-2.index')->with('success', 'Video has been activated');
  }

  public function disable($id)
  {
    $member = Video2::findOrFail($id);
    $member->active = 2;
    $member->save();
    return redirect()->route('video-2.index')->with('success', 'Video has been non-activated');
  }

}
