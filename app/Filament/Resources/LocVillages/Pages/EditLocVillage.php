<?php

namespace App\Filament\Resources\LocVillages\Pages;

use App\Filament\Resources\LocVillages\LocVillageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLocVillage extends EditRecord
{
    protected static string $resource = LocVillageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
