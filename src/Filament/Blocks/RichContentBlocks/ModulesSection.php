<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;
use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Form;

class ModulesSection extends BaseBlock
{
    static function schema(Form $form)
    {
        return [
            Forms\Components\TextInput::make('per_page')->numeric()->default(9),
        ];
    }
}
