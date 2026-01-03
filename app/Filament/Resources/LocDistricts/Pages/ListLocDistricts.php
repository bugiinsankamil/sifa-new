<?php

namespace App\Filament\Resources\LocDistricts\Pages;

use App\Filament\Resources\LocDistricts\LocDistrictResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLocDistricts extends ListRecords
{
    protected static string $resource = LocDistrictResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
