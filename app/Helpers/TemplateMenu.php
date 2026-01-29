<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

if (! function_exists('templatePages')) {

    function templatePages(string $path)
    {
        $basePath = resource_path("views/templates/{$path}");
        $configKey = str_replace('/', '.', $path);

        $menuMap = config("template_menu.{$configKey}", []);

        if (!File::exists($basePath)) {
            return collect();
        }

        return collect(File::files($basePath))
            ->sortBy(fn($f) => array_search(
                str_replace('.blade.php', '', $f->getFilename()),
                array_keys($menuMap)
            ) ?? 999)
            ->map(function ($file) use ($path, $menuMap) {

                $fileName = str_replace('.blade.php', '', $file->getFilename());

                return [
                    'key'   => $fileName,
                    'title' => $menuMap[$fileName]
                        ?? Str::of($fileName)->replace('-', ' ')->title(),

                    'route' => 'unify.templates.'
                        . str_replace('/', '.', $path)
                        . '.'
                        . Str::of($fileName)->replace('-', '')->lower(),
                ];
            });
    }
}
