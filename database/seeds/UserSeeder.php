<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'user@astroption.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'first_name' => 'Astro',
                'last_name' => 'Option',
                'status' => 2,
                'username' =>'user',
                'user_role' => 'client',
                'email' => 'user@astroption.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('@CQuzKA5HKhkroO8'),

            ]);
        }
    }


}
