<?php

namespace App\Models;

use AloiaCms\Models\Model;

class Sponsor extends Model
{
    protected $required_field = [
        'level',
        'name',
        'img',
    ];
}
