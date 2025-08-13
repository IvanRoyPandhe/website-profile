<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KebijakanResource\Pages;
use App\Filament\Resources\KebijakanResource\RelationManagers;
use App\Models\Kebijakan;
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

class KebijakanResource extends Resource
{
    protected static ?string $model = Kebijakan::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Dokumentasi';
    protected static ?string $navigationLabel = 'Kebijakan';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('cluster')
                    ->options([
                        'VISI, MISI, TUJUAN, DAN STRATEGI (VMTS)' => 'VISI, MISI, TUJUAN, DAN STRATEGI (VMTS)',
                        'TATA PAMONG, TATA KELOLA, DAN KERJA SAMA' => 'TATA PAMONG, TATA KELOLA, DAN KERJA SAMA',
                        'MAHASISWA' => 'MAHASISWA',
                        'SUMBER DAYA MANUSIA' => 'SUMBER DAYA MANUSIA',
                        'KEUANGAN, SARANA DAN PRASARANA' => 'KEUANGAN, SARANA DAN PRASARANA',
                        'PENDIDIKAN' => 'PENDIDIKAN',
                        'PENELITIAN' => 'PENELITIAN',
                        'PENGABDIAN KEPADA MASYARAKAT' => 'PENGABDIAN KEPADA MASYARAKAT',
                        'KELUARAN DAN CAPAIAN TRIDHARMA' => 'KELUARAN DAN CAPAIAN TRIDHARMA',
                    ])
                    ->required(),
                TextInput::make('sub_cluster')
                    ->maxLength(255),
                TextInput::make('nomor')
                    ->numeric()
                    ->required(),
                Textarea::make('nama_dokumen')
                    ->required()
                    ->rows(3),
                TextInput::make('link_download')
                    ->url()
                    ->required()
                    ->placeholder('https://drive.google.com/...'),
                Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cluster')
                    ->badge()
                    ->searchable(),
                TextColumn::make('sub_cluster')
                    ->searchable(),
                TextColumn::make('nomor')
                    ->sortable(),
                TextColumn::make('nama_dokumen')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('link_download')
                    ->limit(30)
                    ->url(fn ($record) => $record->link_download, true),
                BooleanColumn::make('is_active'),
            ])
            ->defaultSort('cluster')
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
            'index' => Pages\ListKebijakans::route('/'),
            'create' => Pages\CreateKebijakan::route('/create'),
            'edit' => Pages\EditKebijakan::route('/{record}/edit'),
        ];
    }
}
