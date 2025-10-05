<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProducts extends ViewRecord
{
    protected static string $resource = ProductsResource::class;

    protected function getHeaderActions(): array
    {
        $actions = [];

        if (auth()->hasUser()) {
            $actions = [
                EditAction::make(),
            ];
        }

        return $actions;
    }
}
