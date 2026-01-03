<?php

namespace App\Filament\Resources\LocDistricts\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LocDistrictForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('district_name')
                    ->required(),
                Select::make('loc_regency_id')
                    ->relationship('locRegency', 'id')
                    ->required(),
                Select::make('loc_province_id')
                    ->relationship('locProvince', 'id')
                    ->required(),
                TextInput::make('district_complete_name'),
            ]);
    }
}
