<?php

namespace App\Filament\Resources\RefSchools\Pages;

use App\Filament\Resources\RefSchools\RefSchoolResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewRefSchool extends ViewRecord
{
    protected static string $resource = RefSchoolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
