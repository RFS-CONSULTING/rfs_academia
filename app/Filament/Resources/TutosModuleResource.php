<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\TutosModule;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\TutosModuleResource\Pages;
use App\Filament\Resources\TutosModuleResource\RelationManagers;
use App\Filament\Resources\TutosModuleResource\Pages\EditTutosModule;
use App\Filament\Resources\TutosModuleResource\Pages\ListTutosModules;
use App\Filament\Resources\TutosModuleResource\Pages\CreateTutosModule;
use App\Models\Module;

class TutosModuleResource extends Resource
{
    protected static ?string $model = TutosModule::class;

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
                Forms\Components\TextInput::make('pdf_path')
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
                Tables\Columns\TextColumn::make('pdf_path'),
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
            'index' => Pages\ListTutosModules::route('/'),
            'create' => Pages\CreateTutosModule::route('/create'),
            'edit' => Pages\EditTutosModule::route('/{record}/edit'),
        ];
    }
}
