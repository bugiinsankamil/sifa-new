<?php

namespace App\Filament\Resources\LocCountries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LocCountryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('country_name_indonesia'),
                TextInput::make('country_name_english'),
                TextInput::make('capital_city'),
                TextInput::make('continent'),
                TextInput::make('region_name'),
                TextInput::make('subregion_name'),
                TextInput::make('fifa_code'),
                TextInput::make('iso3166_1_alpha_2'),
                TextInput::make('iso3166_1_alpha_3'),
                TextInput::make('iso3166_1_numeric'),
                TextInput::make('dial_code'),
                TextInput::make('iso4217_currency_name'),
                TextInput::make('iso4217_currency_alpha_code'),
                TextInput::make('iso4217_currency_numeric_code'),
                TextInput::make('tld'),
                TextInput::make('geoname_id'),
                TextInput::make('wiki_page'),
                TextInput::make('other_info'),
            ]);
    }
}
