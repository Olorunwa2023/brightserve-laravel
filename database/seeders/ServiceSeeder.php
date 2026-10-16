<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::updateOrCreate(
            ['name' => 'Web Development'],
            [
                'description' => 'Building modern, responsive websites for individuals and businesses.',
                'active' => true,
            ]
        );

        Service::updateOrCreate(
            ['name' => 'Data Analysis'],
            [
                'description' => 'Turning data into useful insights that support better decisions.',
                'active' => true,
            ]
        );

        Service::updateOrCreate(
            ['name' => 'Digital Services'],
            [
                'description' => 'Using technology to improve everyday tasks and business operations.',
                'active' => true,
            ]
        );
    }
}