<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;

use Filament\Forms;
use Filament\Forms\Form;
use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;

class ModulesSection extends BaseBlock
{
    public static function schema(Form $form)
    {
        return [
            Forms\Components\TextInput::make('per_page')->numeric()->default(9),
        ];
    }
}
