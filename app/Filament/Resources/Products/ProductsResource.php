<?php

namespace App\Filament\Resources\Products;

use App\Filament\Resources\Products\Pages\CreateProducts;
use App\Filament\Resources\Products\Pages\EditProducts;
use App\Filament\Resources\Products\Pages\ListProducts;
use App\Filament\Resources\Products\Pages\ViewProducts;
use App\Filament\Resources\Products\Schemas\ProductsForm;
use App\Filament\Resources\Products\Schemas\ProductsInfolist;
use App\Filament\Resources\Products\Tables\ProductsTable;
use App\Models\Products;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::BuildingStorefront;

    protected static ?string $recordTitleAttribute = 'products';

    public static function form(Schema $schema): Schema
    {
        return ProductsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProductsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProducts::route('/'),
//            'create' => CreateProducts::route('/create'),
            'view' => ViewProducts::route('/{record}'),
//            'edit' => EditProducts::route('/{record}/edit'),
        ];
    }
}
