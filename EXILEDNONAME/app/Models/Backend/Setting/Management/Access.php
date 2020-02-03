<?php

namespace App\Models\Backend\Setting\Management;

use Illuminate\Database\Eloquent\Model;

class Access extends Model {
  protected $table = "accesses";
  protected $primaryKey = "id";
  protected $fillable = ['name', 'description', 'status', 'active', 'sort'];
}
