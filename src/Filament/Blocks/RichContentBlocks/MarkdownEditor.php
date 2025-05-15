<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;

use Filament\Forms;
use Filament\Forms\Form;
use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;

class MarkdownEditor extends BaseBlock
{
    public static function schema(Form $form)
    {
        return [
            Forms\Components\MarkdownEditor::make('content')->toolbarButtons([
                'attachFiles',
                'blockquote',
                'bold',
                'bulletList',
                'codeBlock',
                'h1',
                'h2',
                'h3',
                'italic',
                'link',
                'orderedList',
                'redo',
                'strike',
                'underline',
                'undo',
            ]),
        ];
    }
}
