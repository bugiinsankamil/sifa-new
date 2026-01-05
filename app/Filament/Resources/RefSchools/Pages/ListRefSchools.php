<?php

namespace App\Filament\Resources\RefSchools\Pages;

use App\Filament\Resources\RefSchools\RefSchoolResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRefSchools extends ListRecords
{
    protected static string $resource = RefSchoolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
