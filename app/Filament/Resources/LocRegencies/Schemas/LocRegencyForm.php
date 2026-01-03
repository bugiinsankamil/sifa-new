<?php

namespace App\Filament\Resources\LocRegencies\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LocRegencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('loc_province_id')
                    ->relationship('locProvince', 'name')
                    ->required(),
            ]);
    }
}
