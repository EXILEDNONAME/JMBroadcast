<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response;

// MODELS
use App\Models\Backend\Broadcast\Slide1;
use App\Models\Backend\Broadcast\Slide2;
use App\Models\Backend\Broadcast\Video1;
use App\Models\Backend\Broadcast\Video2;
use App\Models\Backend\Broadcast\Video3;
use App\Models\Backend\Broadcast\Video4;
use App\Models\Backend\Broadcast\Setup;
use App\Models\Backend\Broadcast\Content;


class HomeController extends Controller {
  public function index(){
    $slide1 = Slide1::where('active', 1)->orderBy('sort', 'ASC')->get();
    $content = Content::where('active', 1)->orderBy('sort', 'ASC')->get();
    $setup = Setup::first();
    return view('pages.frontend.index', compact('slide1', 'content', 'setup'));
  }

  public function main(){
    $slide2 = Slide2::where('active', 1)->orderBy('sort', 'ASC')->get();
    $setup = Setup::first();
    return view('pages.frontend.main', compact('slide2', 'setup'));
  }

  public function video1(){
    $video1 = Video1::where('active', 1)->orderBy('sort', 'ASC')->get();
    $setup = Setup::first();
    return view('pages.frontend.video-1', compact('video1', 'setup'));
  }

  public function video2(){
    $video2 = Video2::where('active', 1)->orderBy('sort', 'ASC')->get();
    $setup = Setup::first();
    return view('pages.frontend.video-2', compact('video2', 'setup'));
  }

  public function video3(){
    $video3 = Video3::where('active', 1)->orderBy('sort', 'ASC')->get();
    $setup = Setup::first();
    return view('pages.frontend.video-3', compact('video3', 'setup'));
  }

  public function video4(){
    $video4 = Video4::where('active', 1)->orderBy('sort', 'ASC')->get();
    $setup = Setup::first();
    return view('pages.frontend.video-4', compact('video4', 'setup'));
  }

}
