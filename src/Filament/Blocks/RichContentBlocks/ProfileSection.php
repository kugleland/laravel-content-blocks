<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;

use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;

class ProfileSection extends BaseBlock
{
    public static function schema(Form $form)
    {
        return [
            Forms\Components\Select::make('profile_background')->options([
                'black' => 'Black',
                'primary' => 'Primary',
                'secondary' => 'Secondary',
                'white' => 'White',
            ]),
            // SpatieMediaLibraryFileUpload::make('profile_image')->collection('profile'),
            Forms\Components\FileUpload::make('profile_image')->image(),
            Forms\Components\TextInput::make('profile_heading'),
            Forms\Components\TextInput::make('profile_subheading'),
            Forms\Components\MarkdownEditor::make('profile_content'),
            Forms\Components\Repeater::make('profile_buttons')->schema([
                Forms\Components\TextInput::make('label'),
                Forms\Components\TextInput::make('url'),
                Forms\Components\TextInput::make('variant'),
            ]),
        ];
    }
}
