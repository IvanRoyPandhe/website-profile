<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestasiMahasiswaResource\Pages;
use App\Filament\Resources\PrestasiMahasiswaResource\RelationManagers;
use App\Models\PrestasiMahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrestasiMahasiswaResource extends Resource
{
    protected static ?string $model = PrestasiMahasiswa::class;
    protected static ?string $modelLabel = 'Prestasi Mahasiswa';
    protected static ?string $pluralModelLabel = 'Prestasi Mahasiswa';

    protected static ?string $navigationIcon = 'heroicon-o-trophy';
    protected static ?string $navigationGroup = 'Kemahasiswaan';
    protected static ?string $navigationLabel = 'Prestasi Mahasiswa';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_mahasiswa')
                    ->required()
                    ->maxLength(255),
                Textarea::make('prestasi')
                    ->required()
                    ->rows(3),
                TextInput::make('waktu_pencapaian')
                    ->required()
                    ->maxLength(255),
                Select::make('tingkat')
                    ->options([
                        'Internasional' => 'Internasional',
                        'Nasional' => 'Nasional',
                        'Lokal' => 'Lokal',
                    ])
                    ->required(),
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
                TextColumn::make('nama_mahasiswa')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('prestasi')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('waktu_pencapaian')
                    ->sortable(),
                TextColumn::make('tingkat')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Internasional' => 'success',
                        'Nasional' => 'warning',
                        'Lokal' => 'info',
                    }),
                BooleanColumn::make('is_active'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListPrestasiMahasiswas::route('/'),
            'create' => Pages\CreatePrestasiMahasiswa::route('/create'),
            'edit' => Pages\EditPrestasiMahasiswa::route('/{record}/edit'),
        ];
    }
}
