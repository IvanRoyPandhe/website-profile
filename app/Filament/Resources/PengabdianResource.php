<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengabdianResource\Pages;
use App\Filament\Resources\PengabdianResource\RelationManagers;
use App\Models\Pengabdian;
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

class PengabdianResource extends Resource
{
    protected static ?string $model = Pengabdian::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Publikasi';
    protected static ?string $navigationLabel = 'Pengabdian';
    protected static ?int $navigationSort = 2;

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
                Textarea::make('judul_pkm')
                    ->label('Judul PkM')
                    ->required()
                    ->rows(3),
                TextInput::make('nama_ketua_tim')
                    ->required()
                    ->maxLength(255),
                TextInput::make('kepakaran_ketua_tim')
                    ->required()
                    ->maxLength(255),
                Textarea::make('nama_anggota_dosen')
                    ->label('Nama Anggota Dosen')
                    ->rows(3),
                Textarea::make('nama_mahasiswa')
                    ->label('Nama Mahasiswa')
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
                TextColumn::make('judul_pkm')
                    ->label('Judul PkM')
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
            'index' => Pages\ListPengabdians::route('/'),
            'create' => Pages\CreatePengabdian::route('/create'),
            'edit' => Pages\EditPengabdian::route('/{record}/edit'),
        ];
    }
}
