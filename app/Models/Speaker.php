<?php

namespace App\Models;

use AloiaCms\Models\Model;

class Speaker extends Model
{
    protected $required_field = [
        'title',
        'name',
        'img',
        'linkedin',
        'website',
    ];
}
