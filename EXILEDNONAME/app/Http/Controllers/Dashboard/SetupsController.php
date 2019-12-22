<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Validation\Rule;
use DB;

use App\Http\Requests\Dashboard\Setup\UpdateRequest;
use App\Model\Dashboard\Setup;

class SetupsController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(){
    $data = Setup::all();
    return view('pages.dashboard.setup.index', compact('data'));
  }

  public function process(UpdateRequest $request) {
    DB::table('setups')->where('id', 1)->update([
      'title' => $request->title,
      'page_title' => $request->page_title,
      'header_left' => $request->header_left,
      'header_right' => $request->header_right,
      'content_right' => $request->content_right,
      'footer' => $request->footer,
      'footer_lines' => $request->footer_lines,
      'timer_slider_image' => $request->timer_slider_image,
      'header_social' => $request->header_social,
    ]);
    return redirect('dashboard/setups')->with('success', 'Success, setting setup.');
  }
}
