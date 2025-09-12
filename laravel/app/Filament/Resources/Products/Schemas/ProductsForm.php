<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image_src')
                    ->image()
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Toggle::make('visibility')
                    ->required(),
            ]);
    }
}
