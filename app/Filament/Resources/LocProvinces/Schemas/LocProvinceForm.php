<?php

namespace App\Filament\Resources\LocProvinces\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LocProvinceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('province_name')
                    ->required(),
                Select::make('loc_country_id')
                    ->relationship('locCountry', 'id')
                    ->required(),
            ]);
    }
}
