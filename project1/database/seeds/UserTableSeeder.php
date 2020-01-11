<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // first truncate everything 
        // if there any data
        User::truncate();

        // create the faker
        $faker = \Faker\Factory::create();
        
        // this is the adminstrator account
        // we dont use any faker here
        // make 10 user
        // remember the User is a by default
        // table created when the first migration happen
        // create a hashed password for the use
        // you cant generate password with faker
        // password will be 'password'
        $password = Hash::make('password');


        User::create([
            'name'=>'Administrator',
            'email'=>'admin@test.com',
            'password'=>$password
        ]);



        
        for($i=1;$i<=10;$i++){
            // add to the user column
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
            
        }
    }
}
