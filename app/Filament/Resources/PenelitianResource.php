<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenelitianResource\Pages;
use App\Filament\Resources\PenelitianResource\RelationManagers;
use App\Models\Penelitian;
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

class PenelitianResource extends Resource
{
    protected static ?string $model = Penelitian::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';
    protected static ?string $navigationGroup = 'Publikasi';
    protected static ?string $navigationLabel = 'Penelitian';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tahun')
                    ->required()
                    ->placeholder('2021-2022'),
                TextInput::make('nomor')
                    ->numeric()
                    ->required(),
                Textarea::make('judul_penelitian')
                    ->required()
                    ->rows(3),
                TextInput::make('nama_ketua_tim')
                    ->required()
                    ->maxLength(255),
                TextInput::make('kepakaran_ketua_tim')
                    ->required()
                    ->maxLength(255),
                Textarea::make('nama_anggota_dosen')
                    ->rows(3),
                Textarea::make('nama_mahasiswa')
                    ->rows(2),
                TextInput::make('link_unduh')
                    ->url()
                    ->placeholder('https://drive.google.com/...'),
                Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tahun')
                    ->badge()
                    ->sortable(),
                TextColumn::make('nomor')
                    ->sortable(),
                TextColumn::make('judul_penelitian')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('nama_ketua_tim')
                    ->searchable(),
                TextColumn::make('link_unduh')
                    ->limit(30)
                    ->url(fn ($record) => $record->link_unduh, true)
                    ->placeholder('Tidak ada'),
                BooleanColumn::make('is_active'),
            ])
            ->defaultSort('tahun', 'desc')
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
            'index' => Pages\ListPenelitians::route('/'),
            'create' => Pages\CreatePenelitian::route('/create'),
            'edit' => Pages\EditPenelitian::route('/{record}/edit'),
        ];
    }
}
