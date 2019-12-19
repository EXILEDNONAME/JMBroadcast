<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Content;
use DB;

class ContentsController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(){
    $data = Content::all();
    return view('pages.dashboard.content.index', compact('data'));
  }

  public function upload(){
		return view('pages.dashboard.content.upload');
	}

  public function process(Request $request){
		$this->validate($request, [
      'file' => 'required|mimes:mp4,jpg,jpeg,JPG,JPEG,png,bmp,gif|max:1000000',
		]);

		$file = $request->file('file');
		$file_name = time()."_".$file->getClientOriginalName();
		$target_upload = 'files';
		$file->move($target_upload, $file_name);

		Content::create([
			'file' => $file_name,
			'name' => $request->name,
			'description' => $request->description,
			'type' => $request->type,
      'active' => $request->active,
      'sort' => $request->sort,
      'status' => 0,
      'created_at' => $request->created_at,
		]);

		return redirect('/dashboard/contents')->with('success', 'Success Upload File.');
	}

  public function destroy($id) {
    Content::destroy($id);
    return redirect('dashboard/contents')->with('success', 'Success, content has been removed.');
  }

  public function create() { return redirect('/'); }
  public function edit() { return redirect('/'); }
  public function store() { return redirect('/'); }
  public function update() { return redirect('/'); }
  public function show() { return redirect('/'); }

  public function active($id) {
    DB::table('contents')->where('id', $id)->update([ 'active' => 1 ]);
    return redirect('dashboard/contents')->with('success', 'Success, switching content to active.');
  }

  public function nonactive($id) {
    DB::table('contents')->where('id', $id)->update([ 'active' => 0 ]);
    return redirect('/dashboard/contents')->with('success', 'Success, switching content to non-active.');
  }

  public function setdefault($id) {
    $data = DB::table('contents')->where('status', 0)->where('id', $id)->get();
    foreach ( $data as $item ) {
      DB::table('contents')->update([ 'status' => 0 ]);
    }

    DB::table('contents')->where('id', $id)->update([ 'status' => 1 ]);
    return redirect('dashboard/contents')->with('success', 'Success, setting content to defaults.');
  }

}
