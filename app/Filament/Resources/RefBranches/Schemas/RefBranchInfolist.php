<?php

namespace App\Filament\Resources\RefBranches\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RefBranchInfolist
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
                TextEntry::make('location'),
                TextEntry::make('name'),
                TextEntry::make('alphabet_code'),
                TextEntry::make('numeric_code'),
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
                TextEntry::make('website')
                    ->placeholder('-'),
                IconEntry::make('is_active')
                    ->boolean(),
            ]);
    }
}
