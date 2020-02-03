<?php

namespace App\Models\Backend\Broadcast;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Setup extends Model {
  protected $table = "broadcast_setups";
  protected $primaryKey = "id";
  protected $fillable = [
    'title',
    'time_slide_1',
    'time_slide_2',
    'logo',
    'header',
    'header_r',
    'header_l',
    'content',
    'content_r',
    'content_l',
    'footer',
    'footer_r',
    'footer_l',
    'running_text',
    'status',
    'active',
    'sort',
    'created_by',
    'updated_by'
  ];
}
