<?php

namespace Kugleland\LaravelContentBlocks\Filament\Blocks\RichContentBlocks;

use Kugleland\LaravelContentBlocks\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class PhotoGallerySection extends BaseBlock
{
    static function schema(Form $form)
    {
        return [
           
            // SpatieMediaLibraryFileUpload::make('gallery_images')->collection('gallery')->multiple(),
            //FileUpload::make('gallery_images')->multiple(),
            Repeater::make('gallery_images')->schema([
                FileUpload::make('image'),
                TextInput::make('caption'),
                TextInput::make('alt'),
            ])->defaultItems(1)->columns(3),
                  
        ];
    }
}
