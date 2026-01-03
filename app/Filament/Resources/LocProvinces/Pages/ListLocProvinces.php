<?php

namespace App\Filament\Resources\LocProvinces\Pages;

use App\Filament\Resources\LocProvinces\LocProvinceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLocProvinces extends ListRecords
{
    protected static string $resource = LocProvinceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
