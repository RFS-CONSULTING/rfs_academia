<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\QuizQuestion;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use App\Filament\Resources\QuizQuestionResource\Pages;
use App\Filament\Resources\QuizQuestionResource\RelationManagers;
use App\Filament\Resources\QuizQuestionResource\Pages\EditQuizQuestion;
use App\Filament\Resources\QuizQuestionResource\Pages\ListQuizQuestions;
use App\Filament\Resources\QuizQuestionResource\Pages\CreateQuizQuestion;
use App\Models\QuizForModule;

class QuizQuestionResource extends Resource
{
    protected static ?string $model = QuizQuestion::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('question')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('choix1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('choix2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('choix3')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('choix4')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('reponse')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('quizformodule_id')
                ->label('quiz')
                ->options(QuizForModule::all()->pluck('name', 'id'))
                ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question'),
                Tables\Columns\TextColumn::make('choix1'),
                Tables\Columns\TextColumn::make('choix2'),
                Tables\Columns\TextColumn::make('choix3'),
                Tables\Columns\TextColumn::make('choix4'),
                Tables\Columns\TextColumn::make('reponse'),
                Tables\Columns\TextColumn::make('quizformodule_id'),
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
            'index' => Pages\ListQuizQuestions::route('/'),
            'create' => Pages\CreateQuizQuestion::route('/create'),
            'edit' => Pages\EditQuizQuestion::route('/{record}/edit'),
        ];
    }
}
