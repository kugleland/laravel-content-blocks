<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;
use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class Image extends BaseBlock
{
    static function schema(Form $form)
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
