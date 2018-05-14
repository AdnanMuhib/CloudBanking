<?php

use Illuminate\Database\Seeder;
use App\user;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = new user();
        $superAdmin -> name = 'admin';
        $superAdmin -> password = bcrypt('admin');
        $superAdmin -> role = 'admin';
        $superAdmin -> email = 'email@email.com';
        $superAdmin -> save();

        $superAdmin1 = new user();
        $superAdmin1-> name = 'admin1';
        $superAdmin1 -> password = bcrypt('admin1');
        $superAdmin1 -> role = 'admin';
        $superAdmin1 -> email = 'email1@email.com';
        $superAdmin1 -> save();
    }
}
