<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeContentResource\Pages;
use App\Filament\Resources\HomeContentResource\RelationManagers;
use App\Models\HomeContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeContentResource extends Resource
{
    protected static ?string $model = HomeContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Konten Website';
    protected static ?string $navigationLabel = 'Konten Beranda';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('section')
                    ->label('Bagian Halaman')
                    ->options([
                        'hero_stats' => '🏠 Bagian Atas (Hero) - 4 kotak statistik',
                        'about_stats' => '📊 Tentang Program Studi - 4 kotak warna-warni', 
                        'about_features' => '⭐ Tentang Program Studi - 3 kotak fitur',
                        'why_choose' => '🎯 Keunggulan Program Studi - 3 kotak keunggulan',
                        'cta_trust' => '🤝 Bergabung Dengan Kami - 4 kotak kepercayaan',
                    ])
                    ->helperText('Pilih bagian mana dari halaman beranda yang ingin diubah')
                    ->required(),
                TextInput::make('title')
                    ->label('Judul Utama')
                    ->helperText('Teks yang muncul di dalam kotak/lingkaran (contoh: B, 2030, S1)')
                    ->required()
                    ->maxLength(255),
                TextInput::make('subtitle')
                    ->label('Judul Besar')
                    ->helperText('Teks besar yang muncul sebagai nama (contoh: Akreditasi, Target Visi)')
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->helperText('Teks kecil penjelasan di bawah judul (contoh: Terakreditasi B, Visi 2030)')
                    ->rows(3),
                TextInput::make('sort_order')
                    ->label('Urutan Tampil')
                    ->helperText('Angka untuk mengatur urutan (1=pertama, 2=kedua, dst)')
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->label('Tampilkan di Website')
                    ->helperText('Matikan jika tidak ingin ditampilkan')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('section')
                    ->label('Bagian Halaman')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'hero_stats' => '🏠 Hero Section',
                        'about_stats' => '📊 About Stats',
                        'about_features' => '⭐ About Features', 
                        'why_choose' => '🎯 Keunggulan',
                        'cta_trust' => '🤝 CTA Trust',
                        default => $state,
                    })
                    ->badge()
                    ->searchable(),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('subtitle')
                    ->limit(30),
                TextColumn::make('sort_order')
                    ->sortable(),
                BooleanColumn::make('is_active'),
            ])
            ->defaultSort('section')
            ->groups([
                'section' => 'Section',
            ])
            ->filters([
                SelectFilter::make('section')
                    ->options([
                        'hero_stats' => 'Hero Section',
                        'about_stats' => 'Tentang Program Studi - Stats',
                        'about_features' => 'Tentang Program Studi - Features', 
                        'why_choose' => 'Keunggulan Program Studi',
                        'cta_trust' => 'Bergabung Dengan Kami',
                    ])
                    ->label('Filter Section'),
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
            'index' => Pages\ListHomeContents::route('/'),
            'create' => Pages\CreateHomeContent::route('/create'),
            'edit' => Pages\EditHomeContent::route('/{record}/edit'),
        ];
    }
}
