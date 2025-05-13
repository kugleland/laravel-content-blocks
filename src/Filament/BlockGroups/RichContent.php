<?php

namespace Kugleland\LaravelContentBlocks\Filament\BlockGroups;

class RichContent extends BaseGroup
{
    static function getLoaderConfiguration()
    {
        return [
            'dir' => dirname(__DIR__) . '/Blocks/RichContentBlocks',
            'fqn' => '\\Kugleland\LaravelContentBlocks\\Filament\\Blocks\\RichContentBlocks\\',
        ];
    }
}
