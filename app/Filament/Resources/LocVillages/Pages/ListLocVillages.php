<?php

namespace App\Filament\Resources\LocVillages\Pages;

use App\Filament\Resources\LocVillages\LocVillageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLocVillages extends ListRecords
{
    protected static string $resource = LocVillageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
