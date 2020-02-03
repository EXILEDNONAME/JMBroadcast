<?php

namespace App\Http\Requests\Backend\Broadcast\Content;

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
      'title' => 'required',
      'content' => 'required|min:10',
    ];
  }
}
