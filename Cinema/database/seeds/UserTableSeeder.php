<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed
        DB::table('users')->insert([
        	'name' => 'Angelo Tijerina',
        	'email' => 'pepsikick10@gmail.com',
        	'password' => bcrypt('Mayela1997'),
        ]);
    }
}
