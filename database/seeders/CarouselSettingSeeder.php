<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarouselSetting;

class CarouselSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'carousel_duration', 'value' => '5000'],
            ['key' => 'auto_play', 'value' => 'true'],
            ['key' => 'show_indicators', 'value' => 'true'],
            ['key' => 'show_controls', 'value' => 'true'],
        ];

        foreach ($settings as $setting) {
            CarouselSetting::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
}