<?php

namespace Database\Seeders;

use App\Models\banner;
use App\Models\bill;
use App\Models\category;
use App\Models\promotion;
use App\Models\room;
use App\Models\User;
// use Database\Factories\BannerFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $jsonFilePath = "./database/seeders/data.json";
        $jsonContent = file_get_contents($jsonFilePath);
        $dataArray = json_decode($jsonContent, true);

        User::factory()->count(10)->create();
        banner::factory()->count(10)->create();
        promotion::factory()->count(10)->create();

        foreach ($dataArray['category'] as $data) {
            category::create($data);
        }

        room::factory()->count(10)->create();
        bill::factory()->count(10)->create();
    }
}
