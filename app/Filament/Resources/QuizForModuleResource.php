<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Module;
use Filament\Resources\Form;
use App\Models\QuizForModule;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\QuizForModuleResource\Pages;
use App\Filament\Resources\QuizForModuleResource\RelationManagers;

class QuizForModuleResource extends Resource
{
    protected static ?string $model = QuizForModule::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('estimed_time')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('module_id')
                ->label('module')
                ->options(Module::all()->pluck('name', 'id'))
                ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('estimed_time'),
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
            'index' => Pages\ListQuizForModules::route('/'),
            'create' => Pages\CreateQuizForModule::route('/create'),
            'edit' => Pages\EditQuizForModule::route('/{record}/edit'),
        ];
    }
}
