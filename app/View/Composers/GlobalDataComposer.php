<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Fluent;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

class GlobalDataComposer
{
    public function compose($view)
    {
        foreach (File::files(resource_path('contents/globals')) as $file) {
            if (in_array($file->getExtension(), ['yaml', 'yml'])) {
                $view->with(
                    Str::camel($file->getFilenameWithoutExtension()),
                    collect(Yaml::parse($file->getContents()))
                        ->mapInto(Fluent::class)
                );
            }
        }
    }
}
