<?php

namespace App\Filament\Imports;

use App\Models\RefBranch;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class RefBranchImporter extends Importer
{
    protected static ?string $model = RefBranch::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('id'),
            ImportColumn::make('location')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('name')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('alphabet_code')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('numeric_code')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('street_address'),
            ImportColumn::make('locDistrict')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
            ImportColumn::make('locVillage')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
            ImportColumn::make('phone'),
            ImportColumn::make('email')
                ->rules(['email']),
            ImportColumn::make('website'),
            ImportColumn::make('is_active')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
        ];
    }

    public function resolveRecord(): RefBranch
    {
        return RefBranch::firstOrNew([
            'location' => $this->data['location'],
        ]);
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your ref branch import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
