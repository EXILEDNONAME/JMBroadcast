<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $primaryKey = 'id';

    protected $fillable = ['file', 'name', 'description', 'setup', 'type', 'active', 'sort', 'status'];

}
