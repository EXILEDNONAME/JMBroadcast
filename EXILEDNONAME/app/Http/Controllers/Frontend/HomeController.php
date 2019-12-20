<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Image;
use App\Model\Dashboard\Video;
use App\Model\Dashboard\Setup;
use App\Model\Dashboard\Content;
use DB;

class HomeController extends Controller {
  public function index(){
    $data1 = Image::where('type', 1)->get();
    $data2 = Setup::first();
    $data3 = Content::all();
    return view('pages.frontend.default', compact('data1', 'data2', 'data3'));
  }
}
