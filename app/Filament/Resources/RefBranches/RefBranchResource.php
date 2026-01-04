<?php

namespace App\Filament\Resources\RefBranches;

use App\Filament\Resources\RefBranches\Pages\CreateRefBranch;
use App\Filament\Resources\RefBranches\Pages\EditRefBranch;
use App\Filament\Resources\RefBranches\Pages\ListRefBranches;
use App\Filament\Resources\RefBranches\Pages\ViewRefBranch;
use App\Filament\Resources\RefBranches\Schemas\RefBranchForm;
use App\Filament\Resources\RefBranches\Schemas\RefBranchInfolist;
use App\Filament\Resources\RefBranches\Tables\RefBranchesTable;
use App\Models\RefBranch;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RefBranchResource extends Resource
{
    protected static ?string $model = RefBranch::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'location';

    public static function form(Schema $schema): Schema
    {
        return RefBranchForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RefBranchInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RefBranchesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRefBranches::route('/'),
            'create' => CreateRefBranch::route('/create'),
            'view' => ViewRefBranch::route('/{record}'),
            'edit' => EditRefBranch::route('/{record}/edit'),
        ];
    }
}
