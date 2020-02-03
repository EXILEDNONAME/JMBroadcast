<?php

namespace App\Http\Requests\Backend\Broadcast\Video4;

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
