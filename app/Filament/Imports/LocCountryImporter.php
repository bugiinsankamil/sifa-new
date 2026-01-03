<?php

namespace App\Filament\Imports;

use App\Models\LocCountry;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class LocCountryImporter extends Importer
{
    protected static ?string $model = LocCountry::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('name'),
            ImportColumn::make('name_english'),
            ImportColumn::make('capital_city'),
            ImportColumn::make('continent'),
            ImportColumn::make('region_name'),
            ImportColumn::make('subregion_name'),
            ImportColumn::make('fifa_code'),
            ImportColumn::make('iso3166_1_alpha_2'),
            ImportColumn::make('iso3166_1_alpha_3'),
            ImportColumn::make('iso3166_1_numeric'),
            ImportColumn::make('dial_code'),
            ImportColumn::make('iso4217_currency_name'),
            ImportColumn::make('iso4217_currency_alpha_code'),
            ImportColumn::make('iso4217_currency_numeric_code'),
            ImportColumn::make('tld'),
            ImportColumn::make('geoname_id'),
            ImportColumn::make('wiki_page'),
            ImportColumn::make('other_info'),
        ];
    }

    public function resolveRecord(): LocCountry
    {
        return LocCountry::firstOrNew([
            'id' => $this->data['id'],
        ]);
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your loc country import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
