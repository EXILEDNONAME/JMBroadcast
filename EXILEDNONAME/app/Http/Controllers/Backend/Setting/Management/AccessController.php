<?php

namespace App\Http\Controllers\Backend\Setting\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response;

// MODEL & REQUEST
use App\Models\Backend\Setting\Management\Access;
use App\Http\Requests\SiteRequest;

class AccessController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  // FIX
  public function index() {
    $data = Access::all();
    return view('pages.backend.setting.management.access.index', compact('data'));
  }

  // FIX
  public function show($id) {
    $data = Access::findOrFail($id);
    return view('pages.backend.setting.management.access.show', compact('data'));
  }

  public function create() {
    return view('pages.backend.setting.management.access.create');
  }

  public function store(SiteRequest $request)
  {
    $requestData = $request->all();
    Access::create($requestData);
    return redirect()->route('accesses.index');
  }

  public function edit($id)
  {
    $data = Access::findOrFail($id);
    return view('pages.backend.setting.management.access.edit', compact('data'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'name' => 'required|min:10'
    ]);
    $requestData = $request->all();

    $post = Access::findOrFail($id);
    $post->update($requestData);

    return route('accesses.index')->with('flash_message', 'Post updated!');
  }

  public function destroy($id) {
    $user = Access::where('id',$id)->delete();
    return Response::json($user);
  }

  public function enable($id) {
    $member = Access::findOrFail($id);
    $member->active = 1;
    $member->save();
    return Response::json($member);
  }

  public function disable($id)
  {
    $member = Access::findOrFail($id);
    $member->active = 2;
    $member->save();
  }
  
}
