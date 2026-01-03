<?php

namespace App\Filament\Resources\LocVillages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LocVillageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('village_name')
                    ->required(),
                TextInput::make('type')
                    ->required(),
                TextInput::make('loc_district_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
