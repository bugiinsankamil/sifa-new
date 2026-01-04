<?php

namespace App\Filament\Resources\RefBranches\Tables;

use App\Filament\Imports\RefBranchImporter;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ImportAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RefBranchesTable
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
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('alphabet_code')
                    ->searchable(),
                TextColumn::make('numeric_code')
                    ->searchable(),
                TextColumn::make('street_address')
                    ->searchable(),
                TextColumn::make('locDistrict.name')
                    ->searchable(),
                TextColumn::make('locVillage.name')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('website')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                ImportAction::make()
                    ->importer(RefBranchImporter::class),
            ]);
    }
}
