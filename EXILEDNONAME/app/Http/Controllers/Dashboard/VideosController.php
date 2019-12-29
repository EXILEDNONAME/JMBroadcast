<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Video;
use DB;
use File;

class VideosController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(){
    $data = Video::all();
    return view('pages.dashboard.video.index', compact('data'));
  }

  public function upload(){
    return view('pages.dashboard.video.upload');
  }

  public function process(Request $request){
    $this->validate($request, [
      'file' => 'required|mimes:mp4,mpeg,m4v,mov,avi,flv|max:1000000',
    ]);

    $file = $request->file('file');
    $file_name = time()."_".$file->getClientOriginalName();
    $target_upload = base_path('files');
    $file->move($target_upload, $file_name);

    Video::create([
      'file' => $file_name,
      'name' => $request->name,
      'description' => $request->description,
      'type' => 2,
      'active' => $request->active,
      'setup' => 0,
      'sort' => $request->sort,
      'status' => 0,
      'created_at' => $request->created_at,
    ]);

    return redirect('/dashboard/galleries')->with('success', 'Success Upload File.');
  }

  public function destroy($id) {
    $delete = Video::where('id', $id)->get();
    foreach ( $delete as $item ) {
      unlink(base_path('files/'. $item->file));
      Video::destroy($id);
    }

    return redirect('dashboard/galleries')->with('success', 'Success, content has been removed.');
  }

  public function edit() { return redirect('/'); }
  public function store() { return redirect('/'); }
  public function update() { return redirect('/'); }
  public function show() { return redirect('/'); }

  public function active($id) {
    DB::table('videos')->where('id', $id)->update([ 'active' => 1 ]);
    return redirect('dashboard/galleries')->with('success', 'Success, switching content to active.');
  }

  public function nonactive($id) {
    DB::table('videos')->where('id', $id)->update([ 'active' => 2 ]);
    return redirect('/dashboard/galleries')->with('success', 'Success, switching content to non-active.');
  }

  public function setdefault($id) {
    $data = DB::table('videos')->where('status', 0)->where('id', $id)->get();
    foreach ( $data as $item ) {
      DB::table('videos')->update([ 'status' => 0 ]);
    }

    DB::table('videos')->where('id', $id)->update([ 'status' => 1 ]);
    return redirect('dashboard/galleries')->with('success', 'Success, setting content to defaults.');
  }

  public function setup_headline($id) {
    $data = DB::table('videos')->where('setup', 1)->where('id', $id)->get();
    foreach ( $data as $item ) {
      DB::table('videos')->update([ 'setup' => 0 ]);
    }

    DB::table('videos')->where('id', $id)->update([ 'setup' => 1 ]);
    return redirect('dashboard/contents')->with('success', 'Success, setting as default content to headline.');
  }

  public function setup_content($id) {
    DB::table('videos')->where('id', $id)->update([ 'setup' => 2 ]);
    return redirect('dashboard/contents')->with('success', 'Success, setting as default content to content.');
  }

  public function setup_bgslider($id) {
    DB::table('videos')->where('id', $id)->update([ 'setup' => 0 ]);
    return redirect('dashboard/contents')->with('success', 'Success, setting as default content to slider.');
  }

}
