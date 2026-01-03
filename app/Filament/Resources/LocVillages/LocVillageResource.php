<?php

namespace App\Filament\Resources\LocVillages;

use App\Filament\Resources\LocVillages\Pages\CreateLocVillage;
use App\Filament\Resources\LocVillages\Pages\EditLocVillage;
use App\Filament\Resources\LocVillages\Pages\ListLocVillages;
use App\Filament\Resources\LocVillages\Schemas\LocVillageForm;
use App\Filament\Resources\LocVillages\Tables\LocVillagesTable;
use App\Models\LocVillage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LocVillageResource extends Resource
{
    protected static ?string $model = LocVillage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return LocVillageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LocVillagesTable::configure($table);
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
            'index' => ListLocVillages::route('/'),
            'create' => CreateLocVillage::route('/create'),
            'edit' => EditLocVillage::route('/{record}/edit'),
        ];
    }
}
