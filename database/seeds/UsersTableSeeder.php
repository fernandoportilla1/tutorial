<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\User::class)->create([
    		'email' => 'luis@gmail.com',
    		'password' => Hash::make('testroot')
    	]);
        factory(App\User::class)->times(40)->create();
    }
}
