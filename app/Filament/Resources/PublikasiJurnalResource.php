<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublikasiJurnalResource\Pages;
use App\Filament\Resources\PublikasiJurnalResource\RelationManagers;
use App\Models\PublikasiJurnal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublikasiJurnalResource extends Resource
{
    protected static ?string $model = PublikasiJurnal::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationGroup = 'Publikasi';
    protected static ?string $navigationLabel = 'Publikasi Jurnal';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_jurnal')
                    ->required()
                    ->maxLength(255),
                Textarea::make('deskripsi')
                    ->required()
                    ->rows(10),
                FileUpload::make('cover_image')
                    ->image()
                    ->directory('jurnal-covers')
                    ->imageResizeMode('contain')
                    ->imageResizeTargetWidth('400')
                    ->imageResizeTargetHeight('600')
                    ->required(),
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
                TextColumn::make('nama_jurnal')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('cover_image')
                    ->size(80),
                TextColumn::make('deskripsi')
                    ->limit(100),
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
            'index' => Pages\ListPublikasiJurnals::route('/'),
            'create' => Pages\CreatePublikasiJurnal::route('/create'),
            'edit' => Pages\EditPublikasiJurnal::route('/{record}/edit'),
        ];
    }
}
