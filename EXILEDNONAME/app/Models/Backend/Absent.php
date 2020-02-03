<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Absent extends Model {
  protected $table = "absents";
  protected $primaryKey = "id";
  protected $fillable = ['id_user'];

  public function users() {
        return $this->belongsTo(User::class, 'id_user');
    }
}
