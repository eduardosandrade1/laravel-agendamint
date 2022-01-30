<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\MethodPix;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        MethodPix::factory()->create();
        Company::factory()->create();
    }
}
