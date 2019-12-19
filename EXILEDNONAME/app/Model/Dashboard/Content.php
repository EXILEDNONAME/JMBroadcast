<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    protected $primaryKey = 'id';

    protected $fillable = ['file', 'name', 'description', 'type', 'active', 'sort', 'status'];

}
