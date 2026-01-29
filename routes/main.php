<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::prefix('unify')->name('unify.')->group(function () {

    $basePath = resource_path('views/templates');

    $files = File::allFiles($basePath);

    foreach ($files as $file) {

        // contoh: portfolio/page-portfolio-case-study-1.blade.php
        $relativePath = str_replace(
            [$basePath . DIRECTORY_SEPARATOR, '.blade.php'],
            '',
            $file->getPathname()
        );

        // view: templates.main.pages.portfolio.page-portfolio-case-study-1
        $view = 'templates.' . str_replace(DIRECTORY_SEPARATOR, '.', $relativePath);

        // segments: ['portfolio', 'page-portfolio-case-study-1']
        $segments = explode(DIRECTORY_SEPARATOR, $relativePath);

        $fileName = array_pop($segments);

        // URL: portfolio/page-portfolio-case-study-1
        $uri = implode('/', array_merge($segments, [$fileName]));

        // name: templates.portfolio.pageportfoliocasestudy1
        $routeName = 'templates.'
            . implode('.', $segments)
            . '.'
            . Str::of($fileName)->replace('-', '')->lower();

        Route::get($uri, fn() => view($view))
            ->name($routeName);
    }
});
