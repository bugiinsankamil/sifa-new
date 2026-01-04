<?php

namespace App\Filament\Resources\RefBranches\Pages;

use App\Filament\Resources\RefBranches\RefBranchResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewRefBranch extends ViewRecord
{
    protected static string $resource = RefBranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
