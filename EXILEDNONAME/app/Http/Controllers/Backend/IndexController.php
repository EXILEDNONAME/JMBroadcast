<?php

namespace App\Http\Controllers\Backend;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Setting\Management\Access;

class IndexController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
    return view('pages.backend.index');
  }

  public function logout(Request $request) {
    Auth::logout();
    return redirect('/');
  }

}
