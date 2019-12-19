<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Content;
use DB;

class ContentsController extends Controller {
  public function index(){
    $data = Content::where('type', 2)->get();
    return view('pages.frontend.index', compact('data'));
  }
}
