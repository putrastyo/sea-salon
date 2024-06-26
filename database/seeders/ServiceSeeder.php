<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Haircuts and Styling',
            'duration' => 45
        ]);
        Service::create([
            'name' => 'Manicure and Pedicure',
            'duration' => 60
        ]);
        Service::create([
            'name' => 'Facial Treatments',
            'duration' => 90
        ]);
    }
}
