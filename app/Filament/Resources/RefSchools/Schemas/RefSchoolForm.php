<?php

namespace App\Filament\Resources\RefSchools\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RefSchoolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('ref_branch_id')
                    ->relationship('refBranch', 'name')
                    ->required(),
                Select::make('fix_education_level_id')
                    ->relationship('fixEducationLevel', 'name')
                    ->required(),
                Select::make('fix_school_type_id')
                    ->relationship('fixSchoolType', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('numeric_code')
                    ->required(),
                TextInput::make('npsn'),
                TextInput::make('accreditation'),
                Toggle::make('is_bos_receiver')
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
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
