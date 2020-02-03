<?php

namespace App\Http\Requests\Backend\Broadcast\Slide1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }
  public function rules()
  {
    return [
      'name' => 'required',
    ];
  }
}
