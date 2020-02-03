<?php

namespace App\Http\Controllers\Backend\Broadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response;

// MODEL & REQUEST
use App\Models\Backend\Broadcast\Content;
use App\Http\Requests\Backend\Broadcast\Content\StoreRequest;
use App\Http\Requests\Backend\Broadcast\Content\UpdateRequest;

class ContentController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  // FIX
  public function index() {
    $data = Content::all();
    return view('pages.backend.broadcast.content.index', compact('data'));
  }

  // FIX
  public function show($id) {
    $data = Content::findOrFail($id);
    return view('pages.backend.broadcast.content.show', compact('data'));
  }

  // FIX
  public function create() {
    return view('pages.backend.broadcast.content.create');
  }

  // FIX
  public function store(StoreRequest $request){
    $requestData = $request->all();
    Content::create($requestData);
    return redirect()->route('contents.index')->with('success', 'Content has been created');
  }

  // FIX
  public function edit($id)
  {
    $data = Content::findOrFail($id);
    return view('pages.backend.broadcast.content.edit', compact('data'));
  }

  // FIX
  public function update(UpdateRequest $request, $id)
  {
    $requestData = $request->all();
    $data = Content::findOrFail($id);
    $data->update($requestData);

    return redirect()->route('content.index')->with('success', 'Video has been updated');
  }

  public function destroy($id)
  {
      Content::destroy($id);
      return redirect()->route('content.index')->with('success', 'Video has been removed');
  }

  public function enable($id) {
    $member = Content::findOrFail($id);
    $member->active = 1;
    $member->save();
    return redirect()->route('content.index')->with('success', 'Video has been activated');
  }

  public function disable($id)
  {
    $member = Content::findOrFail($id);
    $member->active = 2;
    $member->save();
    return redirect()->route('content.index')->with('success', 'Video has been non-activated');
  }

}
