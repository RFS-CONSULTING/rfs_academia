<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Formation;
use Filament\Resources\Form;
use App\Models\UserFormation;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\UserFormationResource\Pages;
use App\Filament\Resources\UserFormationResource\RelationManagers;
use App\Filament\Resources\UserFormationResource\Pages\ListUserFormations;

class UserFormationResource extends Resource
{
    protected static ?string $model = UserFormation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('formation_id')
                                        ->label('formation')
                                        ->options(Formation::all()->pluck('title','id')),
                // Forms\Components\Toggle::make('confirmed')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('formation_id'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListUserFormations::route('/'),
            'create' => Pages\CreateUserFormation::route('/create'),
            'edit' => Pages\EditUserFormation::route('/{record}/edit'),
        ];
    }
}
