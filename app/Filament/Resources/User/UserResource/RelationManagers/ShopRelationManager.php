<?php

namespace App\Filament\Resources\User\UserResource\RelationManagers;

use App\Filament\Resources\ShopResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Illuminate\Support\Str;

class ShopRelationManager extends RelationManager
{
    protected static string $relationship = 'shop';




    public function form(Form $form): Form
    {
        return ShopResource::form($form);
    }



    // public function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             Forms\Components\TextInput::make('name')
    //                 ->required()
    //                 ->live(onBlur: true)
    //                 ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

    //             Forms\Components\TextInput::make('slug')
    //                 ->disabled()
    //                 ->dehydrated()
    //                 ->required()
    //                 ->unique(Shop::class, 'slug', ignoreRecord: true),
    //             Forms\Components\TextInput::make('phone')
    //                 ->required()
    //                 ->maxLength(20),
    //             Forms\Components\Grid::make()
    //                 ->schema([
    //                     Forms\Components\Textarea::make('address')
    //                         ->maxLength(225),
    //                     Forms\Components\Textarea::make('description')
    //                         ->maxLength(225),
    //                 ]),

    //             Forms\Components\Section::make('Cover')
    //                 ->schema([
    //                     SpatieMediaLibraryFileUpload::make('shop-cover-img')
    //                         ->collection('shop-cover-imgs'),
    //                 ])
    //                 ->collapsible(),

    //             Forms\Components\Toggle::make('is_active')
    //                 ->label('Status')
    //                 ->default(true)
    //         ]);
    // }

    public function table(Table $table): Table
    {

        return ShopResource::table($table)
            ->headerActions([
                Tables\Actions\CreateAction::make()->createAnother(false),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->groupedBulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);



        // return $table
        //     ->recordTitleAttribute('name')
        //     ->columns([
        //         Tables\Columns\TextColumn::make('name'),
        //     ])
        //     ->filters([
        //         //
        //     ])
        //     ->headerActions([
        //         Tables\Actions\CreateAction::make()->createAnother(false),
        //     ])
        //     ->actions([
        //         Tables\Actions\EditAction::make(),
        //         Tables\Actions\DeleteAction::make(),
        //     ])
        //     ->bulkActions([
        //         Tables\Actions\BulkActionGroup::make([
        //             Tables\Actions\DeleteBulkAction::make(),
        //         ]),
        //     ]);
    }
}
