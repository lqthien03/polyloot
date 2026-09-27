<?php

namespace App\Filament\Resources\Package;

use App\Filament\Resources\Package\ExtensionPackageResource\Pages;
use App\Filament\Resources\Package\ExtensionPackageResource\RelationManagers;
use App\Models\Package\ExtensionPackage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExtensionPackageResource extends Resource
{
    protected static ?string $model = ExtensionPackage::class;
    protected static ?string $navigationGroup = 'Package';
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('package_type')
                    ->required(),
                Forms\Components\TextInput::make('from_quantity')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('to_quantity')
                    ->numeric(),
                Forms\Components\TextInput::make('price_per_listing')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('package_type')
                    ->boolean(),
                Tables\Columns\TextColumn::make('from_quantity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('to_quantity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price_per_listing')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExtensionPackages::route('/'),
            'create' => Pages\CreateExtensionPackage::route('/create'),
            'edit' => Pages\EditExtensionPackage::route('/{record}/edit'),
        ];
    }
}
