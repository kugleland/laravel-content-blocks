<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;

use Filament\Forms;
use Filament\Forms\Form;
use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;

class TitleSection extends BaseBlock
{
    public static function schema(Form $form)
    {
        return [
            Forms\Components\TextInput::make('title'),
            Forms\Components\TextInput::make('subtitle'),
            Forms\Components\Select::make('variant')->options([
                'default' => 'Default',
                'plain' => 'Plain',
            ])->default('default'),
            Forms\Components\RichEditor::make('description'),
            Forms\Components\Repeater::make('buttons')->schema([
                Forms\Components\TextInput::make('label'),
                Forms\Components\TextInput::make('url'),
                Forms\Components\Select::make('variant')->options([
                    'red' => 'Red',
                    'transparent' => 'Transparent',
                ]),
            ])
                ->collapsed()
                ->collapsible()
                ->cloneable(),
        ];
    }
}
