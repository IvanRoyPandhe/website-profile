<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutSectionResource\Pages;
use App\Filament\Resources\AboutSectionResource\RelationManagers;
use App\Models\AboutSection;
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

class AboutSectionResource extends Resource
{
    protected static ?string $model = AboutSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Konten Website';
    protected static ?string $navigationLabel = 'Tentang Program Studi';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul Utama')
                    ->helperText('Contoh: Program Studi')
                    ->required()
                    ->maxLength(255),
                TextInput::make('subtitle')
                    ->label('Sub Judul')
                    ->helperText('Contoh: Ilmu Gizi')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->helperText('Deskripsi lengkap tentang program studi')
                    ->required()
                    ->rows(4),
                TextInput::make('accreditation_title')
                    ->label('Judul Akreditasi')
                    ->helperText('Contoh: TERAKREDITASI B')
                    ->maxLength(255),
                TextInput::make('accreditation_sk')
                    ->label('SK Nomor')
                    ->helperText('Contoh: SK Nomor: 0350/LAM-PTKes/Akr/Sar/XI/2020')
                    ->maxLength(255),
                TextInput::make('accreditation_institution')
                    ->label('Lembaga Akreditasi')
                    ->helperText('Contoh: Lembaga Akreditasi Mandiri Pendidikan Tinggi Kesehatan')
                    ->maxLength(255),
                Toggle::make('is_active')
                    ->label('Tampilkan di Website')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),
                TextColumn::make('subtitle')
                    ->label('Sub Judul')
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50),
                BooleanColumn::make('is_active')
                    ->label('Aktif'),
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
            'index' => Pages\ListAboutSections::route('/'),
            'create' => Pages\CreateAboutSection::route('/create'),
            'edit' => Pages\EditAboutSection::route('/{record}/edit'),
        ];
    }
}
