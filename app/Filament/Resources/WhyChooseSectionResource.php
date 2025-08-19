<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhyChooseSectionResource\Pages;
use App\Filament\Resources\WhyChooseSectionResource\RelationManagers;
use App\Models\WhyChooseSection;
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

class WhyChooseSectionResource extends Resource
{
    protected static ?string $model = WhyChooseSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationGroup = 'Konten Website';
    protected static ?string $navigationLabel = 'Keunggulan Program Studi';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('badge_text')
                    ->label('Teks Badge')
                    ->helperText('Contoh: KEUNGGULAN PROGRAM STUDI')
                    ->required()
                    ->maxLength(255),
                TextInput::make('title')
                    ->label('Judul Utama')
                    ->helperText('Contoh: Mengapa Memilih')
                    ->required()
                    ->maxLength(255),
                TextInput::make('subtitle')
                    ->label('Sub Judul')
                    ->helperText('Contoh: Program Gizi UMG?')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->helperText('Deskripsi tentang keunggulan program studi')
                    ->required()
                    ->rows(3),
                Toggle::make('is_active')
                    ->label('Tampilkan di Website')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('badge_text')
                    ->label('Badge')
                    ->searchable(),
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),
                TextColumn::make('subtitle')
                    ->label('Sub Judul')
                    ->searchable(),
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
            'index' => Pages\ListWhyChooseSections::route('/'),
            'create' => Pages\CreateWhyChooseSection::route('/create'),
            'edit' => Pages\EditWhyChooseSection::route('/{record}/edit'),
        ];
    }
}
