<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SurveyPenggunaResource\Pages;
use App\Filament\Resources\SurveyPenggunaResource\RelationManagers;
use App\Models\SurveyPengguna;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SurveyPenggunaResource extends Resource
{
    protected static ?string $model = SurveyPengguna::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = 'Kemahasiswaan';
    protected static ?string $navigationLabel = 'Survey Pengguna';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->rows(3),
                TextInput::make('survey_link')
                    ->url()
                    ->required()
                    ->placeholder('https://forms.google.com/...'),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('survey_link')
                    ->limit(50)
                    ->url(fn ($record) => $record->survey_link, true),
                TextColumn::make('sort_order')
                    ->sortable(),
                BooleanColumn::make('is_active'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
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
            'index' => Pages\ListSurveyPenggunas::route('/'),
            'create' => Pages\CreateSurveyPengguna::route('/create'),
            'edit' => Pages\EditSurveyPengguna::route('/{record}/edit'),
        ];
    }
}
