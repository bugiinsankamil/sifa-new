<?php

namespace App\Filament\Resources\RefBranches\Pages;

use App\Filament\Resources\RefBranches\RefBranchResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRefBranches extends ListRecords
{
    protected static string $resource = RefBranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
