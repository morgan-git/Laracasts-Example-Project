<?php

namespace Database\Seeders;

use App\Models\JobListing;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobListing::factory(200)->create();
    }
}
