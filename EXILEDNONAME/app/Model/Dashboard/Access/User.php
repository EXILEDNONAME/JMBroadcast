<?php

namespace App\Model\Dashboard\Access;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = ['id', 'name', 'emai', 'created_at', 'updated_at'];

}
