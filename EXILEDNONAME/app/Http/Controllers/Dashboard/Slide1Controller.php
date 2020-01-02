<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Image;
use DB;
use File;

class Slide1Controller extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(){
    $data = Image::where('status', 1)->get();
    return view('pages.dashboard.setup.slide-1.index', compact('data'));
  }

  public function upload(){
    return view('pages.dashboard.setup.slide-1.upload');
  }

  public function process(Request $request){
    $this->validate($request, [
      'name' => 'required|unique:images',
      'file' => 'required|mimes:jpg,jpeg,JPG,JPEG,png,bmp,gif|max:1000000',
    ]);

    $file = $request->file('file');
    $file_name = time()."_".$file->getClientOriginalName();
    $target_upload = base_path('files');
    $file->move($target_upload, $file_name);

    Image::create([
      'file' => $file_name,
      'name' => $request->name,
      'description' => $request->description,
      'type' => 1,
      'active' => $request->active,
      'setup' => 0,
      'sort' => $request->sort,
      'status' => 1,
      'created_at' => $request->created_at,
    ]);

    return redirect('/dashboard/setups/slide-1')->with('success', 'Success Upload File.');
  }

  public function destroy($id) {
    $delete = Image::where('id', $id)->get();
    foreach ( $delete as $item ) {
      unlink(base_path('files/'. $item->file));
      Image::destroy($id);
    }

    return redirect('dashboard/setups/slide-1')->with('success', 'Success, image has been removed.');
  }

  public function edit() { return redirect('/'); }
  public function store() { return redirect('/'); }
  public function update() { return redirect('/'); }
  public function show() { return redirect('/'); }

  public function active($id) {
    DB::table('images')->where('id', $id)->update([ 'active' => 1 ]);
    return redirect('dashboard/setups/slide-1')->with('success', 'Success, switching image to active.');
  }

  public function nonactive($id) {
    DB::table('images')->where('id', $id)->update([ 'active' => 2 ]);
    return redirect('/dashboard/setups/slide-1')->with('success', 'Success, switching image to non-active.');
  }

}
