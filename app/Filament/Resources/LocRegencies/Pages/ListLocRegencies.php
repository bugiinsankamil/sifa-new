<?php

namespace App\Filament\Resources\LocRegencies\Pages;

use App\Filament\Resources\LocRegencies\LocRegencyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLocRegencies extends ListRecords
{
    protected static string $resource = LocRegencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
