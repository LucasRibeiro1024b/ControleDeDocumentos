<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Filament\Resources\DocumentResource\RelationManagers;
use App\Models\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;
    protected static ?string $modelLabel = "Documentos";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('identificacao')
                    ->required()
                    ->maxLength(255)
                    ->label('Identificação'),
                Forms\Components\TextInput::make('responsavel')
                    ->label('Responsável'),
                Forms\Components\TextInput::make('setores')
                    ->label('Setores'),
                Forms\Components\TextInput::make('versao')
                    ->label('Versão'),
                Forms\Components\TextInput::make('npaginas')
                    ->label('N° de Páginas'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identificacao')
                    ->label('Identificação'),
                Tables\Columns\TextColumn::make('responsavel')
                    ->label('Responsável'),
                Tables\Columns\TextColumn::make('setores')
                    ->label('Setores'),
                Tables\Columns\TextColumn::make('versao')
                    ->label('Versão'),
                Tables\Columns\TextColumn::make('npaginas')
                    ->label('N° de Páginas'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
