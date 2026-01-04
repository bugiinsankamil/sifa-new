<?php

namespace App\Filament\Resources\RefBranches\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RefBranchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('location')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('alphabet_code')
                    ->required(),
                TextInput::make('numeric_code')
                    ->required(),
                TextInput::make('street_address'),
                Select::make('loc_district_id')
                    ->relationship('locDistrict', 'name')
                    ->required(),
                Select::make('loc_village_id')
                    ->relationship('locVillage', 'name')
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('website')
                    ->url(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
