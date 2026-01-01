<?php

namespace App\Filament\Resources\LocCountries\Pages;

use App\Filament\Resources\LocCountries\LocCountryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLocCountry extends ViewRecord
{
    protected static string $resource = LocCountryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
