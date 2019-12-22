<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Validation\Rule;
use DB;

use App\Http\Requests\Dashboard\Setup\UpdateRequest;
use App\Model\Dashboard\Image;
use App\Model\Dashboard\Video;
use App\Model\Dashboard\Setup;
use App\Model\Dashboard\Content;
use App\User;

class DefaultsController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(){
    $data1 = Image::all();
    $data2 = Video::all();
    $data3 = Setup::all();
    $data4 = Content::all();
    $data5 = User::all();
    return view('pages.dashboard.index', compact('data1', 'data2', 'data3', 'data4', 'data5'));
  }

  public function signout () {
    auth()->logout();
    return redirect('/');
  }
}
