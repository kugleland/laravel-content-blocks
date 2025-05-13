<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;
use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Form;

class MarkdownEditor extends BaseBlock
{
    static function schema(Form $form)
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
