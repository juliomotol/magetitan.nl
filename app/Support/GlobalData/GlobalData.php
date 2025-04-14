<?php

namespace App\Support\GlobalData;

use Illuminate\Support\Collection;
use Illuminate\Support\Fluent;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

class GlobalData
{
    const YAML_EXTENSIONS = ['yml', 'yaml'];

    public function __construct(protected string $basePath)
    {
        $this->basePath = Str::finish($basePath, '/');
    }

    public function get($key): Collection
    {
        $path = $this->findYaml($key);
        $data = $path ? Yaml::parseFile($path) : [];

        return collect($data)
            ->mapInto(Fluent::class);
    }

    public function findYaml(string $name): ?string
    {
        return collect(self::YAML_EXTENSIONS)
            ->map(fn ($extension) => "{$this->basePath}{$name}.{$extension}")
            ->first(fn ($path) => file_exists($path));
    }
}
