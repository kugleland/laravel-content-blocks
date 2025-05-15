<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;

class Image extends BaseBlock
{
    public static function schema(Form $form)
    {
        return [
            FileUpload::make('url')
                ->image()
                ->required(),
            TextInput::make('alt')
                ->required(),
        ];
    }
}
