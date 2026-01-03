<?php

namespace App\Filament\Imports;

use App\Models\LocDistrict;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class LocDistrictImporter extends Importer
{
    protected static ?string $model = LocDistrict::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('id'),
            ImportColumn::make('district_name')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('locRegency')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
            ImportColumn::make('locProvince')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
            ImportColumn::make('district_complete_name'),
        ];
    }

    public function resolveRecord(): LocDistrict
    {
        return new LocDistrict();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your loc district import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
