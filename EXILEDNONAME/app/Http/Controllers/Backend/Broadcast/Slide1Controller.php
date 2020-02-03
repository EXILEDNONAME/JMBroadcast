<?php

namespace App\Http\Controllers\Backend\Broadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response;

// MODEL & REQUEST
use App\Models\Backend\Broadcast\Slide1;
use App\Http\Requests\Backend\Broadcast\Slide1\StoreRequest;
use App\Http\Requests\Backend\Broadcast\Slide1\UpdateRequest;

class Slide1Controller extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  // FIX
  public function index() {
    $data = Slide1::all();
    return view('pages.backend.broadcast.slide-1.index', compact('data'));
  }

  // FIX
  public function show($id) {
    $data = Slide1::findOrFail($id);
    return view('pages.backend.broadcast.slide-1.show', compact('data'));
  }

  // FIX
  public function create() {
    return view('pages.backend.broadcast.slide-1.create');
  }

  // FIX
  public function store(StoreRequest $request){
    $file = $request->file('file');
    $file_name = time()."_".$file->getClientOriginalName();
    $target_upload = base_path('files');
    $file->move($target_upload, $file_name);

    Slide1::create([
      'name' => $request->name,
      'description' => $request->description,
      'file' => $file_name,
      'sort' => $request->sort,
      'created_by' => $request->created_by,
      'updated_by' => $request->updated_by,
    ]);

    return redirect()->route('slide-1.index')->with('success', 'Slide has been created');
  }

  // FIX
  public function edit($id)
  {
    $data = Slide1::findOrFail($id);
    return view('pages.backend.broadcast.slide-1.edit', compact('data'));
  }

  // FIX
  public function update(UpdateRequest $request, $id)
  {
    $requestData = $request->all();
    $data = Slide1::findOrFail($id);
    $data->update($requestData);

    return redirect()->route('slide-1.index')->with('success', 'Slide has been updated');
  }

  public function destroy($id) {
    $delete = Slide1::where('id', $id)->get();
    foreach ( $delete as $item ) {
      unlink(base_path('files/'. $item->file));
      Slide1::destroy($id);
    }

    return redirect()->route('slide-1.index')->with('success', 'Slide has been removed');
  }

  public function enable($id) {
    $member = Slide1::findOrFail($id);
    $member->active = 1;
    $member->save();
    return redirect()->route('slide-1.index')->with('success', 'Slide has been activated');
  }

  public function disable($id)
  {
    $member = Slide1::findOrFail($id);
    $member->active = 2;
    $member->save();
    return redirect()->route('slide-1.index')->with('success', 'Slide has been non-activated');
  }

}
