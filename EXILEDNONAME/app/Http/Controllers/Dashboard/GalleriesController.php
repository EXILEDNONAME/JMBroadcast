<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Gallery;
use App\Model\Dashboard\Image;
use App\Model\Dashboard\Video;
use DB;
use File;

class GalleriesController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(){
    $data1 = Image::all();
    $data2 = Video::all();
    return view('pages.dashboard.gallery.index', compact('data1', 'data2'));
  }

  public function destroy($id) {
    $delete = Image::where('id', $id)->get();
    foreach ( $delete as $item ) {
      unlink(base_path('files/'. $item->file));
      Image::destroy($id);
    }

    return redirect('dashboard/galleries')->with('success', 'Success, content has been removed.');
  }


  // ACTIVE && NON-ACTIVE IMAGES
  public function active_image($id) {
    if ( DB::table('images')->where('id', $id) != false && DB::table('images')->where('type', 1)  ) {
      DB::table('images')->where('id', $id)->update([ 'active' => 1 ]);
      return redirect('dashboard/galleries')->with('success', 'Success, switching image to active.');
    }
    else { return redirect('dashboard/galleries'); }
  }

  public function nonactive_image($id) {
    if ( DB::table('images')->where('id', $id) != false && DB::table('images')->where('type', 1)  ) {
      DB::table('images')->where('id', $id)->update([ 'active' => 0 ]);
      return redirect('dashboard/galleries')->with('success', 'Success, switching image to active.');
    }
    else { return redirect('dashboard/galleries'); }
  }

  // ACTIVE && NON-ACTIVE VIDEOS
  public function active_video($id) {
    if ( DB::table('videos')->where('id', $id) != false && DB::table('videos')->where('type', 2)  ) {
      DB::table('videos')->where('id', $id)->update([ 'active' => 1 ]);
      return redirect('dashboard/galleries')->with('success', 'Success, switching video to active.');
    }
    else { return redirect('dashboard/galleries'); }
  }

  public function nonactive_video($id) {
    if ( DB::table('videos')->where('id', $id) != false && DB::table('videos')->where('type', 1)  ) {
      DB::table('videos')->where('id', $id)->update([ 'active' => 0 ]);
      return redirect('dashboard/galleries')->with('success', 'Success, switching video to active.');
    }
    else { return redirect('dashboard/galleries'); }
  }

}
