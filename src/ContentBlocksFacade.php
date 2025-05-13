<?php

namespace Kugleland\LaravelContentBlocks;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kugleland\LaravelContentBlocks\ContentBlocks
 */
class ContentBlocksFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-content-blocks';
    }
}