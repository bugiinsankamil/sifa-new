<?php

namespace App\Filament\Resources\LocRegencies;

use App\Filament\Resources\LocRegencies\Pages\CreateLocRegency;
use App\Filament\Resources\LocRegencies\Pages\EditLocRegency;
use App\Filament\Resources\LocRegencies\Pages\ListLocRegencies;
use App\Filament\Resources\LocRegencies\Schemas\LocRegencyForm;
use App\Filament\Resources\LocRegencies\Tables\LocRegenciesTable;
use App\Models\LocRegency;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LocRegencyResource extends Resource
{
    protected static ?string $model = LocRegency::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'regency_name';

    public static function form(Schema $schema): Schema
    {
        return LocRegencyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LocRegenciesTable::configure($table);
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
            'index' => ListLocRegencies::route('/'),
            'create' => CreateLocRegency::route('/create'),
            'edit' => EditLocRegency::route('/{record}/edit'),
        ];
    }
}
