<?php

namespace App\Support\GlobalData\Facade;

use Illuminate\Support\Facades\Facade;

class GlobalData extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'global-data';
    }
}
