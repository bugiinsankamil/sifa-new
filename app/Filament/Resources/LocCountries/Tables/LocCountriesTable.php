<?php

namespace App\Filament\Resources\LocCountries\Tables;

use App\Filament\Imports\LocCountryImporter;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ImportAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LocCountriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('id'),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('name_english')
                    ->searchable(),
                TextColumn::make('capital_city')
                    ->searchable(),
                TextColumn::make('continent')
                    ->searchable(),
                TextColumn::make('region_name')
                    ->searchable(),
                TextColumn::make('subregion_name')
                    ->searchable(),
                TextColumn::make('fifa_code')
                    ->searchable(),
                TextColumn::make('iso3166_1_alpha_2')
                    ->searchable(),
                TextColumn::make('iso3166_1_alpha_3')
                    ->searchable(),
                TextColumn::make('iso3166_1_numeric')
                    ->searchable(),
                TextColumn::make('dial_code')
                    ->searchable(),
                TextColumn::make('iso4217_currency_name')
                    ->searchable(),
                TextColumn::make('iso4217_currency_alpha_code')
                    ->searchable(),
                TextColumn::make('iso4217_currency_numeric_code')
                    ->searchable(),
                TextColumn::make('tld')
                    ->searchable(),
                TextColumn::make('geoname_id')
                    ->searchable(),
                TextColumn::make('wiki_page')
                    ->searchable(),
                TextColumn::make('other_info')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                ImportAction::make()
                    ->importer(LocCountryImporter::class),
            ]);
    }
}
