<?php

namespace App\Models\Concerns;

trait CollectionCompatibility
{
    public function __isset($key)
    {
        return $this->has($key);
    }
}
