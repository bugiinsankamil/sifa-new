<?php

namespace App\Filament\Resources\LocProvinces\Pages;

use App\Filament\Resources\LocProvinces\LocProvinceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLocProvince extends EditRecord
{
    protected static string $resource = LocProvinceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
