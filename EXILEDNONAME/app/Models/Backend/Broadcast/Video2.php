<?php

namespace App\Models\Backend\Broadcast;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Video2 extends Model {
  protected $table = "broadcast_video2s";
  protected $primaryKey = "id";
  protected $fillable = [
    'name',
    'description',
    'file',
    'status',
    'active',
    'sort',
    'created_by',
    'updated_by'
  ];
}
