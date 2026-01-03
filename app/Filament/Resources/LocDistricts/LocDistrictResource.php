<?php

namespace App\Filament\Resources\LocDistricts;

use App\Filament\Resources\LocDistricts\Pages\CreateLocDistrict;
use App\Filament\Resources\LocDistricts\Pages\EditLocDistrict;
use App\Filament\Resources\LocDistricts\Pages\ListLocDistricts;
use App\Filament\Resources\LocDistricts\Schemas\LocDistrictForm;
use App\Filament\Resources\LocDistricts\Tables\LocDistrictsTable;
use App\Models\LocDistrict;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LocDistrictResource extends Resource
{
    protected static ?string $model = LocDistrict::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return LocDistrictForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LocDistrictsTable::configure($table);
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
            'index' => ListLocDistricts::route('/'),
            'create' => CreateLocDistrict::route('/create'),
            'edit' => EditLocDistrict::route('/{record}/edit'),
        ];
    }
}
