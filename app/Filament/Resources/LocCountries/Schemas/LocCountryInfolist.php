<?php

namespace App\Filament\Resources\LocCountries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LocCountryInfolist
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
                TextEntry::make('country_name_indonesia')
                    ->placeholder('-'),
                TextEntry::make('country_name_english')
                    ->placeholder('-'),
                TextEntry::make('capital_city')
                    ->placeholder('-'),
                TextEntry::make('continent')
                    ->placeholder('-'),
                TextEntry::make('region_name')
                    ->placeholder('-'),
                TextEntry::make('subregion_name')
                    ->placeholder('-'),
                TextEntry::make('fifa_code')
                    ->placeholder('-'),
                TextEntry::make('iso3166_1_alpha_2')
                    ->placeholder('-'),
                TextEntry::make('iso3166_1_alpha_3')
                    ->placeholder('-'),
                TextEntry::make('iso3166_1_numeric')
                    ->placeholder('-'),
                TextEntry::make('dial_code')
                    ->placeholder('-'),
                TextEntry::make('iso4217_currency_name')
                    ->placeholder('-'),
                TextEntry::make('iso4217_currency_alpha_code')
                    ->placeholder('-'),
                TextEntry::make('iso4217_currency_numeric_code')
                    ->placeholder('-'),
                TextEntry::make('tld')
                    ->placeholder('-'),
                TextEntry::make('geoname_id')
                    ->placeholder('-'),
                TextEntry::make('wiki_page')
                    ->placeholder('-'),
                TextEntry::make('other_info')
                    ->placeholder('-'),
            ]);
    }
}
