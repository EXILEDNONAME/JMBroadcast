<?php

namespace App\Http\Controllers\Backend\Broadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response;

// MODEL & REQUEST
use App\Models\Backend\Broadcast\Setup;
use App\Http\Requests\Backend\Broadcast\Setup\UpdateRequest;

class SetupController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  // FIX
  public function index() {
    $data = Setup::all();
    return view('pages.backend.broadcast.setup.index', compact('data'));
  }

  // FIX
  public function process(UpdateRequest $request) {
    $requestData = $request->all();
    $data = Setup::findOrFail(1);
    $data->update($requestData);
    return redirect('/dashboard/broadcast/setups')->with('success', 'Data has been updated');
  }

}
