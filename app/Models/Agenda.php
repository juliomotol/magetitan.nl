<?php

namespace App\Models;

use AloiaCms\Models\Model;
use Carbon\Carbon;

class Agenda extends Model
{
    protected $required_field = [
        'date',
        'time',
        'title',
        'desctription',
        'speaker',
    ];

    public function getDate(): Carbon
    {
        return Carbon::parse($this->date);
    }
}
