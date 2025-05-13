<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;

use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Form;

class ServicesSection extends BaseBlock
{
    static function schema(Form $form)
    {
        return [
            Forms\Components\TextInput::make('title'),
            Forms\Components\TextInput::make('subtitle'),
            Forms\Components\RichEditor::make('content'),
        ];
    }
}
