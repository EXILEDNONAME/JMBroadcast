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
    if ( Image::where('id', $id)->first() != false ) {
      $delete = Image::where('id', $id)->get();
      foreach ( $delete as $item ) {
        unlink(base_path('files/'. $item->file));
        Image::destroy($id);
      }
      return redirect('dashboard/galleries')->with('success', 'Success, Image has been removed.');
    }
    if ( Video::where('id', $id)->first() != false ) {
      $delete = Video::where('id', $id)->get();
      foreach ( $delete as $item ) {
        unlink(base_path('files/'. $item->file));
        Video::destroy($id);
      }
      return redirect('dashboard/galleries')->with('success', 'Success, Video has been removed.');
    }
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
      return redirect('dashboard/galleries')->with('success', 'Success, switching image to non-active.');
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
      return redirect('dashboard/galleries')->with('success', 'Success, switching video to non-active.');
    }
    else { return redirect('dashboard/galleries'); }
  }

  // SET DEFAULT IMAGE 1
  public function set_image_1($id) {
    DB::table('images')->where('id', $id)->update([ 'status' => 1 ]);
    return redirect('dashboard/galleries')->with('success', 'Success, set default Slider 1.');
  }

  // SET DEFAULT IMAGE 2
  public function set_image_2($id) {
    DB::table('images')->where('id', $id)->update([ 'status' => 0 ]);
    return redirect('dashboard/galleries')->with('success', 'Success, set default Slider 2.');
  }

  // SET DEFAULT VIDEO 1
  public function set_video_1($id) {
    if ( DB::table('videos')->where('status', 1)->first() != false ) {
      DB::table('videos')->where('status', 1)->update([ 'status' => 0 ]);
      DB::table('videos')->where('id', $id)->update([ 'status' => 1 ]);
      return redirect('dashboard/galleries')->with('success', 'Success, set default video 1.');
    }
    else {
      DB::table('videos')->where('id', $id)->update([ 'status' => 1 ]);
      return redirect('dashboard/galleries')->with('success', 'Success, set default video 1.'); }
    }

    // SET DEFAULT VIDEO 2
    public function set_video_2($id) {
      if ( DB::table('videos')->where('status', 2)->first() != false ) {
        DB::table('videos')->where('status', 2)->update([ 'status' => 0 ]);
        DB::table('videos')->where('id', $id)->update([ 'status' => 2 ]);
        return redirect('dashboard/galleries')->with('success', 'Success, set default video 2.');
      }
      else {
        DB::table('videos')->where('id', $id)->update([ 'status' => 2 ]);
        return redirect('dashboard/galleries')->with('success', 'Success, set default video 2.');
      }
    }

    // SET DEFAULT VIDEO 3
    public function set_video_3($id) {
      if ( DB::table('videos')->where('status', 3)->first() != false ) {
        DB::table('videos')->where('status', 3)->update([ 'status' => 0 ]);
        DB::table('videos')->where('id', $id)->update([ 'status' => 3 ]);
        return redirect('dashboard/galleries')->with('success', 'Success, set default video 3.');
      }
      else {
        DB::table('videos')->where('id', $id)->update([ 'status' => 3 ]);
        return redirect('dashboard/galleries')->with('success', 'Success, set default video 3.');
      }
    }

    // SET DEFAULT DISABLE
    public function set_video_disable($id) {
      DB::table('videos')->where('id', $id)->update([ 'status' => 0 ]);
      return redirect('dashboard/galleries')->with('success', 'Success, set default video 3.');
    }

  }
