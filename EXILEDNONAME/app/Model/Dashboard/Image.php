<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $primaryKey = 'id';

    protected $fillable = ['file', 'name', 'description', 'setup', 'type', 'active', 'sort', 'status'];

}
