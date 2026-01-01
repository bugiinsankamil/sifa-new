<?php

namespace App\Filament\Resources\LocCountries\Pages;

use App\Filament\Resources\LocCountries\LocCountryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLocCountries extends ListRecords
{
    protected static string $resource = LocCountryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
