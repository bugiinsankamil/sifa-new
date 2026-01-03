<?php

namespace App\Filament\Resources\LocCountries\Pages;

use App\Filament\Resources\LocCountries\LocCountryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLocCountry extends EditRecord
{
    protected static string $resource = LocCountryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
