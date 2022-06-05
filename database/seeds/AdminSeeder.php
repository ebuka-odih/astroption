<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'admin@astroption.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'first_name' => 'Astro',
                'last_name' => 'Admin',
                'status' => 2,
                'username' =>'admin',
                'user_role' => 'admin',
                'email' => 'admin@astroption.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('4RvhN8qBRM2S*y7E'),

            ]);
        }
    }


}
