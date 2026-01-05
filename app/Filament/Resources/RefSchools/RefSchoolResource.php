<?php

namespace App\Filament\Resources\RefSchools;

use App\Filament\Resources\RefSchools\Pages\CreateRefSchool;
use App\Filament\Resources\RefSchools\Pages\EditRefSchool;
use App\Filament\Resources\RefSchools\Pages\ListRefSchools;
use App\Filament\Resources\RefSchools\Pages\ViewRefSchool;
use App\Filament\Resources\RefSchools\Schemas\RefSchoolForm;
use App\Filament\Resources\RefSchools\Schemas\RefSchoolInfolist;
use App\Filament\Resources\RefSchools\Tables\RefSchoolsTable;
use App\Models\RefSchool;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RefSchoolResource extends Resource
{
    protected static ?string $model = RefSchool::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return RefSchoolForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RefSchoolInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RefSchoolsTable::configure($table);
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
            'index' => ListRefSchools::route('/'),
            'create' => CreateRefSchool::route('/create'),
            'view' => ViewRefSchool::route('/{record}'),
            'edit' => EditRefSchool::route('/{record}/edit'),
        ];
    }
}
