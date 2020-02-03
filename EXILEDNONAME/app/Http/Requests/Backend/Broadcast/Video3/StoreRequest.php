<?php

namespace App\Http\Requests\Backend\Broadcast\Video3;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }
  public function rules()
  {
    return [
      'name' => 'required',
      'file' => 'required|mimes:mp4,mpeg,m4v,mov,avi,flv|max:500000',
    ];
  }
}
