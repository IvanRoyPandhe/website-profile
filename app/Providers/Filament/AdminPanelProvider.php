<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Navigation\NavigationGroup;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Support\Facades\FilamentView;
use Illuminate\Contracts\View\View;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => [
                    50 => '239, 246, 255',
                    100 => '219, 234, 254', 
                    200 => '191, 219, 254',
                    300 => '147, 197, 253',
                    400 => '96, 165, 250',
                    500 => '59, 130, 246',
                    600 => '30, 64, 175',
                    700 => '29, 78, 216',
                    800 => '30, 58, 138',
                    900 => '23, 37, 84',
                    950 => '15, 23, 42',
                ],
                'warning' => [
                    50 => '255, 251, 235',
                    100 => '254, 243, 199',
                    200 => '253, 230, 138', 
                    300 => '252, 211, 77',
                    400 => '251, 191, 36',
                    500 => '245, 158, 11',
                    600 => '217, 119, 6',
                    700 => '180, 83, 9',
                    800 => '146, 64, 14',
                    900 => '120, 53, 15',
                    950 => '69, 26, 3',
                ],
            ])
            ->brandName('Admin Panel - Program Studi Gizi')
            ->brandLogo(asset('umg-logo.png'))
            ->brandLogoHeight('2rem')
            ->favicon(asset('favicon.ico'))
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Profile')
                    ->icon('heroicon-o-user-group'),
                NavigationGroup::make()
                    ->label('Akademik')
                    ->icon('heroicon-o-academic-cap'),
                NavigationGroup::make()
                    ->label('Kemahasiswaan')
                    ->icon('heroicon-o-users'),
                NavigationGroup::make()
                    ->label('Dokumen')
                    ->icon('heroicon-o-document-text'),
                NavigationGroup::make()
                    ->label('Publikasi')
                    ->icon('heroicon-o-book-open'),
                NavigationGroup::make()
                    ->label('Informasi')
                    ->icon('heroicon-o-information-circle'),
                NavigationGroup::make()
                    ->label('Penjaminan')
                    ->icon('heroicon-o-shield-check'),
                NavigationGroup::make()
                    ->label('Pengaturan')
                    ->icon('heroicon-o-cog-6-tooth'),
            ])
            ->sidebarCollapsibleOnDesktop()
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                \App\Filament\Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->renderHook(
                'panels::body.end',
                fn (): View => view('filament.admin.custom-styles')
            );
    }
}
