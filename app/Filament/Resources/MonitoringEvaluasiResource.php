<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MonitoringEvaluasiResource\Pages;
use App\Filament\Resources\MonitoringEvaluasiResource\RelationManagers;
use App\Models\MonitoringEvaluasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MonitoringEvaluasiResource extends Resource
{
    protected static ?string $model = MonitoringEvaluasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationGroup = 'Penjaminan';
    protected static ?string $navigationLabel = 'Monitoring & Evaluasi';
    protected static ?int $navigationSort = 1;

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
                        'PENGABDIAN KEPADA MASYARAKAT (PKM)' => 'PENGABDIAN KEPADA MASYARAKAT (PKM)',
                        'KELUARAN DAN CAPAIAN TRIDHARMA' => 'KELUARAN DAN CAPAIAN TRIDHARMA',
                    ])
                    ->required(),
                TextInput::make('sub_cluster')
                    ->required()
                    ->maxLength(255),
                TextInput::make('periode')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Tahun 2021 atau Tahun Akademik 2021-2022'),
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
                TextColumn::make('periode')
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
            'index' => Pages\ListMonitoringEvaluasis::route('/'),
            'create' => Pages\CreateMonitoringEvaluasi::route('/create'),
            'edit' => Pages\EditMonitoringEvaluasi::route('/{record}/edit'),
        ];
    }
}
