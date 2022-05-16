<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\TutoPdf;
use App\Models\Formation;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\TutoPdfResource\Pages;
use App\Filament\Resources\TutoPdfResource\RelationManagers;

class TutoPdfResource extends Resource
{
    protected static ?string $model = TutoPdf::class;

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
            Forms\Components\FileUpload::make('pdf_path')
            ->acceptedFileTypes(['application/pdf'])->maxSize(10000000),
            Forms\Components\RichEditor::make('content'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content'),
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
            'index' => Pages\ListTutoPdfs::route('/'),
            'create' => Pages\CreateTutoPdf::route('/create'),
            'edit' => Pages\EditTutoPdf::route('/{record}/edit'),
        ];
    }
}
