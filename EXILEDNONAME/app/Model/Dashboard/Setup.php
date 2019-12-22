<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    protected $table = 'setups';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'page_title', 'header_left', 'header_right', 'content_left', 'content_right', 'footer', 'footer_lines', 'timer_slider_image', 'header_social'];

}
