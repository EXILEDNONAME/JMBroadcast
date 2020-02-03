<?php

namespace App\Http\Requests\Backend\Broadcast\Slide2;

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
      'file' => 'required|unique:broadcast_slide1s|mimes:jpg,jpeg,JPG,JPEG,png,bmp,gif|max:2048',
    ];
  }
}
