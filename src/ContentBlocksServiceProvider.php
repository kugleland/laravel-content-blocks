<?php

namespace Kugleland\LaravelContentBlocks;

use Illuminate\Support\Facades\Route;
use Kugleland\LaravelContentBlocks\Commands\ExampleCommand;
use Kugleland\LaravelContentBlocks\View\Components\ContentBlock;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ContentBlocksServiceProvider extends PackageServiceProvider
{
    public static string $name = 'laravel-content-blocks';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasCommand(ExampleCommand::class)
            ->hasViewComponents('kugleland', ContentBlock::class)
            ->hasAssets();
    }

    public function packageRegistered()
    {

        // dd('content blocks');

        Route::macro('contentBlocks', function (string $baseUrl = 'content-blocks') {
            Route::prefix($baseUrl)->group(function () {
                Route::get('/', [MyController::class, 'index']);
            });
        });
    }
}
