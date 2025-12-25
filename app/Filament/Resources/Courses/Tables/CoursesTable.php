<?php

namespace App\Filament\Resources\Courses\Tables;

use App\Filament\Resources\Departments\DepartmentResource;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Shreejan\FilamentActionableColumns\Tables\Columns\ActionableColumn;

class CoursesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('course_title')
                    ->searchable(),
                TextColumn::make('credit_hours')
                    ->numeric()
                    ->badge()
                    ->sortable(),
                TextColumn::make('department.name')
                    ->badge()
                    ->color('secondary')
                    ->sortable(),

                // ActionableColumn::make('department.name')
                //     ->label('Department')
                //     ->badge()
                //     ->color('secondary')
                //     ->tapAction(Action::make('viewDepartment')
                //         ->label('View Department')
                //         ->icon('heroicon-o-eye')
                //         ->action(function ( $record, array $data, $livewire): void {
                //             // Redirect to the department resource page
                //             redirect(DepartmentResource::getUrl('view', ['record' => $record]));
                //         })
                //     )
                //     ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ]);
    }
}
