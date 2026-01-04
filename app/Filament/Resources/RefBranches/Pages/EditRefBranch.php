<?php

namespace App\Filament\Resources\RefBranches\Pages;

use App\Filament\Resources\RefBranches\RefBranchResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditRefBranch extends EditRecord
{
    protected static string $resource = RefBranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
