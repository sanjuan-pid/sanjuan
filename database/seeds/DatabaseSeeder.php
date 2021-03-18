<?php

use Illuminate\Database\Seeder;
use App\admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        admin::create([
            'name'    => 'Admin',
            'email'    => 'admin@gmail.com',
            'filename'    => ' ',
            'password'   =>  Hash::make('admin123'),
            'job_title'    => 'superadmin',
            'remember_token' =>  str_random(10),
        ]);
    }
}
