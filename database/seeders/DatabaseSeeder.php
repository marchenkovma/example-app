<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Employer::factory(20)->create();

        Job::factory()->count(10)->create();

        /*Contact::factory()
            ->count(5)
            ->has(Company::factory())
            ->create();*/

        //Contact::factory()->count(5)->create();

        //$this->call(PostSeeder::class);

        // User::factory(10)->create();

        /*User::factory()->create([
            'first_name' => 'Jonh',
            'last_name' => ' Doe',
            'email' => 'test@example.com',
        ]);*/
    }
}
