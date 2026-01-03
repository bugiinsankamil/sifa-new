<?php

namespace App\Filament\Resources\LocProvinces;

use App\Filament\Resources\LocProvinces\Pages\CreateLocProvince;
use App\Filament\Resources\LocProvinces\Pages\EditLocProvince;
use App\Filament\Resources\LocProvinces\Pages\ListLocProvinces;
use App\Filament\Resources\LocProvinces\Schemas\LocProvinceForm;
use App\Filament\Resources\LocProvinces\Tables\LocProvincesTable;
use App\Models\LocProvince;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LocProvinceResource extends Resource
{
    protected static ?string $model = LocProvince::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return LocProvinceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LocProvincesTable::configure($table);
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
            'index' => ListLocProvinces::route('/'),
            'create' => CreateLocProvince::route('/create'),
            'edit' => EditLocProvince::route('/{record}/edit'),
        ];
    }
}
