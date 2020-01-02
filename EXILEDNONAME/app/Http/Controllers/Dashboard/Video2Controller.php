<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Video;
use DB;
use File;

class Video2Controller extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(){
    $data = Video::where('status', 2)->get();
    return view('pages.dashboard.setup.video-2.index', compact('data'));
  }

  public function upload(){
    return view('pages.dashboard.setup.video-2.upload');
  }

  public function process(Request $request){
    $this->validate($request, [
      'name' => 'required|unique:videos',
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
      'status' => 2,
      'created_at' => $request->created_at,
    ]);

    return redirect('/dashboard/setups/video-2')->with('success', 'Success Upload File.');
  }

  public function destroy($id) {
    $delete = Video::where('id', $id)->get();
    foreach ( $delete as $item ) {
      unlink(base_path('files/'. $item->file));
      Video::destroy($id);
    }

    return redirect('dashboard/setups/video-2')->with('success', 'Success, video has been removed.');
  }

  public function edit() { return redirect('/'); }
  public function store() { return redirect('/'); }
  public function update() { return redirect('/'); }
  public function show() { return redirect('/'); }

  public function active($id) {
    DB::table('videos')->where('id', $id)->update([ 'active' => 1 ]);
    return redirect('dashboard/setups/video-2')->with('success', 'Success, switching video to active.');
  }

  public function nonactive($id) {
    DB::table('videos')->where('id', $id)->update([ 'active' => 2 ]);
    return redirect('/dashboard/setups/video-2')->with('success', 'Success, switching video to non-active.');
  }

}
