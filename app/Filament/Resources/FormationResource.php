<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormationResource\Pages;
use App\Filament\Resources\FormationResource\RelationManagers;
use App\Models\Formation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class FormationResource extends Resource
{
    protected static ?string $model = Formation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('description')
                    ->required(),
                Forms\Components\TextInput::make('modalite')
                    ->required(),
                Forms\Components\TextInput::make('logiciels')
                    ->required(),
                Forms\Components\TextInput::make('validation')
                    ->required(),
                Forms\Components\TextInput::make('prerequis')
                    ->required(),
                Forms\Components\TextInput::make('public_cible')
                    ->required(),
                Forms\Components\TextInput::make('niveau')
                    ->required(),
                Forms\Components\TextInput::make('moyen_materiel')
                    ->required(),
                Forms\Components\TextInput::make('pedagogie')
                    ->required(),
                Forms\Components\TextInput::make('objectif')
                    ->required(),
                Forms\Components\TextInput::make('nb_hours')
                    ->required(),
                Forms\Components\TextInput::make('nb_articles')
                    ->required(),
                Forms\Components\Toggle::make('downloadable_ressources')
                    ->required(),
                Forms\Components\Toggle::make('is_certified')
                    ->required(),
                Forms\Components\TextInput::make('actual_price')
                    ->required(),
                Forms\Components\TextInput::make('original_price')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('keywords')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_path'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                // Tables\Columns\TextColumn::make('instructor_id'),
                Tables\Columns\TextColumn::make('nb_hours'),
                Tables\Columns\TextColumn::make('nb_articles'),
                Tables\Columns\BooleanColumn::make('downloadable_ressources'),
                Tables\Columns\BooleanColumn::make('is_certified'),
                Tables\Columns\TextColumn::make('actual_price'),
                Tables\Columns\TextColumn::make('original_price'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('keywords'),
                Tables\Columns\TextColumn::make('image_path'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListFormations::route('/'),
            'create' => Pages\CreateFormation::route('/create'),
            'edit' => Pages\EditFormation::route('/{record}/edit'),
        ];
    }
}
