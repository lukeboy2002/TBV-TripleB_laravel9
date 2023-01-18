<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ModeratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'moderator',
            'email' => 'moderator@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('moderator'),
            'remember_token' => Str::random(10),
        ]);

        //generate image
//        $username = get_initials($user->username);
//        $id = $user->id.'.png';
//        $path = '/images/avatars/';
//        $imagePath = create_avatar($username, $id, $path);
//
//        //save image
//        $user->avatar = $imagePath;
//        $user->save();

        $role = Role::select('id')->where('name', 'moderator')->first();

        $user->roles()->attach($role);
    }
}