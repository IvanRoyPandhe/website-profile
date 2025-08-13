<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarouselSettingResource\Pages;
use App\Models\CarouselSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CarouselSettingResource extends Resource
{
    protected static ?string $model = CarouselSetting::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Pengaturan Carousel';
    protected static ?string $modelLabel = 'Pengaturan Carousel';
    protected static ?string $pluralModelLabel = 'Pengaturan Carousel';
    protected static ?string $navigationGroup = 'Website';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('key')
                    ->label('Pengaturan')
                    ->options([
                        'carousel_duration' => 'Durasi Carousel (ms)',
                        'auto_play' => 'Auto Play',
                        'show_indicators' => 'Tampilkan Indikator',
                        'show_controls' => 'Tampilkan Kontrol',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('value')
                    ->label('Nilai')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->label('Pengaturan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('value')
                    ->label('Nilai')
                    ->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCarouselSettings::route('/'),
            'create' => Pages\CreateCarouselSetting::route('/create'),
            'edit' => Pages\EditCarouselSetting::route('/{record}/edit'),
        ];
    }
}