<?php

namespace App\Filament\Resources\LocCountries;

use App\Filament\Resources\LocCountries\Pages\CreateLocCountry;
use App\Filament\Resources\LocCountries\Pages\EditLocCountry;
use App\Filament\Resources\LocCountries\Pages\ListLocCountries;
use App\Filament\Resources\LocCountries\Schemas\LocCountryForm;
use App\Filament\Resources\LocCountries\Tables\LocCountriesTable;
use App\Models\LocCountry;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LocCountryResource extends Resource
{
    protected static ?string $model = LocCountry::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'country_name_indonesia';

    public static function form(Schema $schema): Schema
    {
        return LocCountryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LocCountriesTable::configure($table);
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
            'index' => ListLocCountries::route('/'),
            'create' => CreateLocCountry::route('/create'),
            'edit' => EditLocCountry::route('/{record}/edit'),
        ];
    }
}
