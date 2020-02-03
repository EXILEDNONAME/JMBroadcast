<?php

namespace App\Http\Requests\Backend\Broadcast\Setup;

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
      'title' => 'required',
    ];
  }
}
