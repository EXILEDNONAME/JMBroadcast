<?php

namespace App\Models\Backend\Broadcast;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Slide1 extends Model {
  protected $table = "broadcast_slide1s";
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
