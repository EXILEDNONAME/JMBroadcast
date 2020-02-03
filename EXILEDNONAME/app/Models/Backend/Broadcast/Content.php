<?php

namespace App\Models\Backend\Broadcast;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Content extends Model {
  protected $table = "broadcast_contents";
  protected $primaryKey = "id";
  protected $fillable = [
    'title',
    'content',
    'status',
    'active',
    'sort',
    'created_by',
    'updated_by'
  ];
}
