<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanHimaResource\Pages;
use App\Filament\Resources\KegiatanHimaResource\RelationManagers;
use App\Models\KegiatanHima;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KegiatanHimaResource extends Resource
{
    protected static ?string $model = KegiatanHima::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Kemahasiswaan';
    protected static ?string $navigationLabel = 'Kegiatan HIMAGIZ';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('periode')
                    ->options([
                        '2020-2021' => '2020-2021',
                        '2021-2022' => '2021-2022',
                        '2022-2023' => '2022-2023',
                        '2023-2024' => '2023-2024',
                        '2024-2025' => '2024-2025',
                        '2025-2026' => '2025-2026',
                        '2026-2027' => '2026-2027',
                        '2027-2028' => '2027-2028',
                        '2028-2029' => '2028-2029',
                        '2029-2030' => '2029-2030',
                    ])
                    ->searchable()
                    ->required(),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->rows(3),
                FileUpload::make('image')
                    ->image()
                    ->directory('kegiatan-himagiz')
                    ->imageResizeMode('contain')
                    ->imageResizeTargetWidth('1200')
                    ->imageResizeTargetHeight('800'),
                TextInput::make('nama_kegiatan')
                    ->required()
                    ->maxLength(255),
                TextInput::make('link_laporan')
                    ->url()
                    ->placeholder('https://drive.google.com/...'),
                TextInput::make('link_dokumentasi')
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
                TextColumn::make('periode')
                    ->badge()
                    ->sortable(),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image')
                    ->size(60),
                TextColumn::make('nama_kegiatan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('link_laporan')
                    ->limit(30)
                    ->url(fn ($record) => $record->link_laporan, true)
                    ->placeholder('Tidak ada'),
                TextColumn::make('link_dokumentasi')
                    ->limit(30)
                    ->url(fn ($record) => $record->link_dokumentasi, true)
                    ->placeholder('Tidak ada'),
                BooleanColumn::make('is_active'),
            ])
            ->defaultSort('periode', 'desc')
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
            'index' => Pages\ListKegiatanHimas::route('/'),
            'create' => Pages\CreateKegiatanHima::route('/create'),
            'edit' => Pages\EditKegiatanHima::route('/{record}/edit'),
        ];
    }
}
