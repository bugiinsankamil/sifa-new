<?php

namespace App\Filament\Resources\LocVillages\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LocVillageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('type')
                    ->required(),
                Select::make('loc_district_id')
                    ->relationship('locDistrict', 'name')
                    ->required(),
            ]);
    }
}
