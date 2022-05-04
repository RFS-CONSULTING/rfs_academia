<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Module;
use App\Models\VideosModule;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use App\Filament\Resources\VideosModuleResource\Pages;
use App\Filament\Resources\VideosModuleResource\RelationManagers;
use App\Filament\Resources\VideosModuleResource\Pages\EditVideosModule;
use App\Filament\Resources\VideosModuleResource\Pages\ListVideosModules;
use App\Filament\Resources\VideosModuleResource\Pages\CreateVideosModule;

class VideosModuleResource extends Resource
{
    protected static ?string $model = VideosModule::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('content')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('video_path')
                    ->maxLength(255),
                Forms\Components\Select::make('module_id')
                ->label('module')
                ->options(Module::all()->pluck('name', 'id'))
                ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('video_path'),
                Tables\Columns\TextColumn::make('module_id'),
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
            'index' => Pages\ListVideosModules::route('/'),
            'create' => Pages\CreateVideosModule::route('/create'),
            'edit' => Pages\EditVideosModule::route('/{record}/edit'),
        ];
    }
}
