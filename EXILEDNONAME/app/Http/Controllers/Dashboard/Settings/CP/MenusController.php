<?php

namespace App\Http\Controllers\Dashboard\Settings\CP;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenusController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(Request $request) {
    return view('pages.dashboard.settings.cp.menus.index');
  }

  public function logout () {
    auth()->logout();
    return redirect('/');
}
}
