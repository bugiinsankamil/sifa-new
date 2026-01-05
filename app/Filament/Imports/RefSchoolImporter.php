<?php

namespace App\Filament\Imports;

use App\Models\RefSchool;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class RefSchoolImporter extends Importer
{
    protected static ?string $model = RefSchool::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('id'),
            ImportColumn::make('refBranch')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
            ImportColumn::make('fixEducationLevel')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
            ImportColumn::make('fixSchoolType')
                ->requiredMapping()
                ->relationship()
                ->rules(['required']),
            ImportColumn::make('name')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('numeric_code')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('npsn'),
            ImportColumn::make('accreditation'),
            ImportColumn::make('is_bos_receiver')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
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
            ImportColumn::make('email'),
            ImportColumn::make('is_active')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
        ];
    }

    public function resolveRecord(): RefSchool
    {
        return RefSchool::firstOrNew([
            'numeric_code' => $this->data['numeric_code'],
        ]);
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your ref school import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
