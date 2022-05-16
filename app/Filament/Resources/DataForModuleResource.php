<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Module;
use Filament\Resources\Form;
use App\Models\DataForModule;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\DataForModuleResource\Pages;
use App\Filament\Resources\DataForModuleResource\RelationManagers;
use App\Filament\Resources\DataForModuleResource\Pages\EditDataForModule;
use App\Filament\Resources\DataForModuleResource\Pages\ListDataForModules;
use App\Filament\Resources\DataForModuleResource\Pages\CreateDataForModule;

class DataForModuleResource extends Resource
{
    protected static ?string $model = DataForModule::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('data_path'),
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
                  Tables\Columns\TextColumn::make('name'),
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
            'index' => Pages\ListDataForModules::route('/'),
            'create' => Pages\CreateDataForModule::route('/create'),
            'edit' => Pages\EditDataForModule::route('/{record}/edit'),
        ];
    }
}
