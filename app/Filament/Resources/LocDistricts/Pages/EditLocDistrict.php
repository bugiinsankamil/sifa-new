<?php

namespace App\Filament\Resources\LocDistricts\Pages;

use App\Filament\Resources\LocDistricts\LocDistrictResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLocDistrict extends EditRecord
{
    protected static string $resource = LocDistrictResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
