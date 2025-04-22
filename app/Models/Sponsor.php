<?php

namespace App\Models;

use AloiaCms\Models\Model;

class Sponsor extends Model
{
    use Concerns\CollectionCompatibility;

    protected $required_field = [
        'level',
        'name',
        'img',
    ];
}
