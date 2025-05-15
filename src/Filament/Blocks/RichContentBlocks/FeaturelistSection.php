<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;

use Filament\Forms;
use Filament\Forms\Form;
use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;

class FeaturelistSection extends BaseBlock
{
    public static function schema(Form $form)
    {
        return [
            Forms\Components\TextInput::make('title'),
            Forms\Components\TextInput::make('subtitle'),
            Forms\Components\RichEditor::make('content'),
            Forms\Components\Repeater::make('features')->schema([
                Forms\Components\TextInput::make('title'),
                Forms\Components\RichEditor::make('description'),
            ])
                ->collapsed()
                ->collapsible()
                ->cloneable(),
        ];
    }
}
