<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Content;
use DB;

class ContentsController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(){
    $data = Content::all();
    return view('pages.dashboard.content.index', compact('data'));
  }

  public function show($id) {
    $data = Content::where('id', $id)->first();
    return view('pages.dashboard.content.show', compact('data'));
  }

  public function create() {
    return view('pages.dashboard.content.create',);
  }

  public function store(Request $request) {
    $requestData = $request->all();
    Content::create($requestData);
    return redirect('dashboard/contents')->with('success', 'Success, content has been added.');
  }

  public function edit($id) {
    $data = Content::where('id', $id)->first();
    return view('pages.dashboard.content.edit', compact('data'));
  }

  public function update(Request $request, $id) {
    $requestData = $request->all();
    $data = Content::findOrFail($id);
    $data->update($requestData);
    return redirect('/dashboard/contents')->with('success', 'Success, content has been updated.');
  }

  public function destroy($id) {
    Content::destroy($id);
    return redirect('/dashboard/contents')->with('success', 'Success, content has been removed.');
  }

  public function active($id) {
    DB::table('contents')->where('id', $id)->update([ 'active' => 1 ]);
    return redirect('dashboard/contents')->with('success', 'Success, switching content to active.');
  }

  public function nonactive($id) {
    DB::table('contents')->where('id', $id)->update([ 'active' => 0 ]);
    return redirect('/dashboard/contents')->with('success', 'Success, switching content to non-active.');
  }

}
