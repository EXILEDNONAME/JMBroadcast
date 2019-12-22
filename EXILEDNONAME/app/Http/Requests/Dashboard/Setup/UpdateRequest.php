<?php

namespace App\Http\Requests\Dashboard\Setup;

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
      'page_title' => 'required',
      'header_left' => 'required',
      'header_right' => 'required',
      'content_right' => 'required',
      'footer' => 'required',
      'footer_lines' => 'required',
    ];
  }

}
