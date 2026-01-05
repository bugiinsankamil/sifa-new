<?php

namespace App\Filament\Resources\RefSchools\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RefSchoolInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('refBranch.name')
                    ->label('Ref branch'),
                TextEntry::make('fixEducationLevel.name')
                    ->label('Fix education level'),
                TextEntry::make('fixSchoolType.name')
                    ->label('Fix school type'),
                TextEntry::make('name'),
                TextEntry::make('numeric_code'),
                TextEntry::make('npsn')
                    ->placeholder('-'),
                TextEntry::make('accreditation')
                    ->placeholder('-'),
                IconEntry::make('is_bos_receiver')
                    ->boolean(),
                TextEntry::make('street_address')
                    ->placeholder('-'),
                TextEntry::make('locDistrict.name')
                    ->label('Loc district'),
                TextEntry::make('locVillage.name')
                    ->label('Loc village'),
                TextEntry::make('phone')
                    ->placeholder('-'),
                TextEntry::make('email')
                    ->label('Email address')
                    ->placeholder('-'),
                IconEntry::make('is_active')
                    ->boolean(),
            ]);
    }
}
