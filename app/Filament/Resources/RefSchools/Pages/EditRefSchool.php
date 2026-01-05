<?php

namespace App\Filament\Resources\RefSchools\Pages;

use App\Filament\Resources\RefSchools\RefSchoolResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditRefSchool extends EditRecord
{
    protected static string $resource = RefSchoolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
