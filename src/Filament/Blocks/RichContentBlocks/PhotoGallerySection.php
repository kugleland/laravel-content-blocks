<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;

class PhotoGallerySection extends BaseBlock
{
    public static function schema(Form $form)
    {
        return [

            // SpatieMediaLibraryFileUpload::make('gallery_images')->collection('gallery')->multiple(),
            // FileUpload::make('gallery_images')->multiple(),
            Repeater::make('gallery_images')->schema([
                FileUpload::make('image'),
                TextInput::make('caption'),
                TextInput::make('alt'),
            ])->defaultItems(1)->columns(3),

        ];
    }
}
