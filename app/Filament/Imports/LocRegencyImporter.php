<?php

namespace App\Filament\Imports;

use App\Models\LocRegency;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class LocRegencyImporter extends Importer
{
    protected static ?string $model = LocRegency::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('id'),
            ImportColumn::make('regency_name')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('locProvince')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
        ];
    }

    public function resolveRecord(): LocRegency
    {
        return new LocRegency();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your loc regency import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
