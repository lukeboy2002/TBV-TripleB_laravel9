<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'developer',
            'email' => 'developer@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('developer'),
            'remember_token' => Str::random(10),
        ]);

        //generate image
        //generate image
        $username = get_initials($user->username);
        $id = $user->id.'.png';
        $path = '/images/avatars/';
        $imagePath = create_avatar($username, $id, $path);

        //save image
        $user->profile_photo_path = $imagePath;
        $user->save();

        $role = Role::select('id')->where('name', 'developer')->first();

        $user->roles()->attach($role);
    }
}
