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
    $data1 = Image::where('type', 1)->where('active', 1)->get();
    $data2 = Video::where('type', 2)->where('active', 1)->get();
    $data3 = Setup::first();
    $data4 = Content::all();
    return view('pages.frontend.default', compact('data1', 'data2', 'data3', 'data4'));
  }

  public function main(){
    $data1 = Image::where('type', 1)->where('active', 1)->get();
    $data2 = Video::where('type', 2)->where('active', 1)->get();
    $data3 = Setup::first();
    $data4 = Content::all();
    return view('pages.frontend.main', compact('data1', 'data2', 'data3', 'data4'));
  }
}
