<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $primaryKey = 'id';

    protected $fillable = ['file', 'description', 'active', 'sort', 'status'];

}
