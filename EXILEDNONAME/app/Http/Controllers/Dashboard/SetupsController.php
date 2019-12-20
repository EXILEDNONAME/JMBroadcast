<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Setup;
use DB;
use File;

class SetupsController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(){
    $data = Setup::all();
    return view('pages.dashboard.setup.index', compact('data'));
  }

  public function process(Request $request) {
    DB::table('setups')->where('id', 1)->update([
          'title' => $request->title,
          'page_title' => $request->page_title,
          'header_left' => $request->header_left,
          'header_right' => $request->header_right,
          // 'content_left' => $request->content_left,
          'content_right' => $request->content_right,
          'footer' => $request->footer,
          'active' => $request->active,
          'status' => $request->status,
    ]);
    return redirect('dashboard/setups')->with('success', 'Success, setting setup.');
  }

  // public function process(Request $request){
  //   $this->validate($request, [
  //     'title' => 'required',
  //   ]);
  //   Setup::update([
  //     'title' => $request->title,
  //     'page_title' => $request->page_title,
  //     'header_left' => $request->header_left,
  //     'header_right' => $request->header_right,
  //     'active' => $request->active,
  //     'status' => $request->status,
  //   ]);
  //
  //   return redirect('/dashboard/galleries')->with('success', 'Success Upload File.');
  // }

}
