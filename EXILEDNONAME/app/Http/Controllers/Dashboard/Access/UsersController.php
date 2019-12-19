<?php

namespace App\Http\Controllers\Dashboard\Access;

use Auth;
use Carbon;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Dashboard\Access\User;

class UsersController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
    $data = User::all();
    return view('pages.dashboard.access.users.index', compact('data'));
  }

}
