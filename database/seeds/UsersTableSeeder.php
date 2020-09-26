<?php
// step 1:
//  php artisan make:seeder UsersTableSeeder
//Seeder created successfully.

// step 2:
// php artisan db:seed
//Seeding: UsersTableSeeder
//Seeded:  UsersTableSeeder (0.21 seconds)
//Database seeding completed successfully.
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 100)->create();
    }
}
