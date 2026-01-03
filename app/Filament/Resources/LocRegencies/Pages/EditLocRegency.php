<?php

namespace App\Filament\Resources\LocRegencies\Pages;

use App\Filament\Resources\LocRegencies\LocRegencyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLocRegency extends EditRecord
{
    protected static string $resource = LocRegencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
