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
    $data1 = Image::where('type', 1)->where('active', 1)->where('status', 1)->get();
    $data2 = Video::where('type', 2)->where('active', 1)->get();
    $data3 = Setup::first();
    $data4 = Content::all();
    return view('pages.frontend.index', compact('data1', 'data2', 'data3', 'data4'));
  }

  public function main(){
    $data1 = Image::where('type', 1)->where('active', 1)->where('status', 0)->get();
    $data2 = Video::where('type', 2)->where('active', 1)->get();
    $data3 = Setup::first();
    $data4 = Content::all();
    return view('pages.frontend.main', compact('data1', 'data2', 'data3', 'data4'));
  }

  public function new_1(){
    $data1 = Image::where('type', 1)->where('active', 1)->where('status', 0)->get();
    $data2 = Video::where('type', 2)->where('active', 1)->get();
    $data3 = Setup::first();
    $data4 = Content::all();
    return view('pages.frontend.new-1', compact('data1', 'data2', 'data3', 'data4'));
  }

  public function new_2(){
    $data1 = Image::where('type', 1)->where('active', 1)->where('status', 1)->get();
    $data2 = Video::where('type', 2)->where('active', 1)->get();
    $data3 = Setup::first();
    $data4 = Content::all();
    return view('pages.frontend.new-2', compact('data1', 'data2', 'data3', 'data4'));
  }

  public function video_1(){
    $data1 = Image::where('type', 1)->where('active', 1)->get();
    $data2 = Video::where('type', 2)->where('active', 1)->where('status', 1)->get();
    $data3 = Setup::first();
    $data4 = Content::all();
    return view('pages.frontend.video-1', compact('data1', 'data2', 'data3', 'data4'));
  }

  public function video_2(){
    $data1 = Image::where('type', 1)->where('active', 1)->get();
    $data2 = Video::where('type', 2)->where('active', 1)->where('status', 2)->get();
    $data3 = Setup::first();
    $data4 = Content::all();
    return view('pages.frontend.video-2', compact('data1', 'data2', 'data3', 'data4'));
  }

  public function video_3(){
    $data1 = Image::where('type', 1)->where('active', 1)->get();
    $data2 = Video::where('type', 2)->where('active', 1)->where('status', 3)->get();
    $data3 = Setup::first();
    $data4 = Content::all();
    return view('pages.frontend.video-3', compact('data1', 'data2', 'data3', 'data4'));
  }
}
