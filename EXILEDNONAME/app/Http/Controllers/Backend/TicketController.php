<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response;
use Auth;

use App\Models\Backend\Setting\Management\Access;
use App\Http\Requests\SiteRequest;

class TicketController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    if (Auth::user()->id_access == 1 ) {
      $data = Absent::all();
      return view('pages.backend.ticket.index', compact('data'));
    }
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('pages.backend.setting.management.access.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(SiteRequest $request)
  {
    $requestData = $request->all();
    Access::create($requestData);
    return redirect()->route('accesses.index');

  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $data = Access::findOrFail($id);
    return view('pages.backend.setting.management.access.show', compact('data'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
{
    $user = Access::where('id',$id)->delete();

    return Response::json($user);
}

  public function enable($id)
  {
    $member = Access::findOrFail($id);
    $member->active = 1;
    $member->save();
  }

  public function disable($id)
  {
    $member = Access::findOrFail($id);
    $member->active = 2;
    $member->save();
  }
}
