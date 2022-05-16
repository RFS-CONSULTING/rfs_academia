<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Formation;
use App\Models\TutoVideo;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\TutoVideoResource\Pages;
use App\Filament\Resources\TutoVideoResource\RelationManagers;
use App\Filament\Resources\TutoVideoResource\Pages\EditTutoVideo;
use App\Filament\Resources\TutoVideoResource\Pages\ListTutoVideos;
use App\Filament\Resources\TutoVideoResource\Pages\CreateTutoVideo;

class TutoVideoResource extends Resource
{
    protected static ?string $model = TutoVideo::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
            Forms\Components\Select::make('formation_id')
                ->label('formation')
                ->options(Formation::all()->pluck('title', 'id'))
                ->searchable(),
            Forms\Components\TextInput::make('video_path')
                ->required()
                ->maxLength(255),
            Forms\Components\RichEditor::make('content'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('video_path'),
                Tables\Columns\TextColumn::make('formation_id'),
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
            'index' => Pages\ListTutoVideos::route('/'),
            'create' => Pages\CreateTutoVideo::route('/create'),
            'edit' => Pages\EditTutoVideo::route('/{record}/edit'),
        ];
    }
}
