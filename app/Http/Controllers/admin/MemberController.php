<?php

namespace App\Http\Controllers\admin;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class MemberController extends Controller
{
    use PasswordValidationRules;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.members.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'username' => [
                'required',
                'string',
                'alpha_dash',
                'max:255',
                Rule::unique(User::class),
            ],
            'nickname' => [
                'string',
                'alpha_dash',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'profile_picture_path' => 'image|mimes:jpg,jpeg,png|max:2048', // 1MB Max
        ]);

        $user = User::create([
            'username' => $request['username'],
            'nickname' => $request['nickname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        if ($request->hasFile('profile_picture_path')) {
            $file = $request->file('profile_picture_path');
            $extension = $file->extension();
            $user->update([
                'profile_picture_path' => $file->storeAs('images/profiles', $user->id.'.'.$extension),
            ]);
        }

        //generate image
        $username = get_initials($user->username);
        $id = $user->id.'.png';
        $path = '/images/avatars/';
        $imagePath = create_avatar($username, $id, $path);

        //save image
        $user->profile_photo_path = $imagePath;
        $user->save();

        $role = Role::select('id')->where('name', 'member')->first();

        $user->roles()->attach($role);

        $request->session()->flash('success', 'Member succesfully added');

        return redirect()->route('admin.members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function trashed()
    {
        //
    }

    public function trashedRestore(Request $request, $id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();

        $request->session()->flash('success', 'User has been restored');

        return back();
    }

    public function trashedDelete(Request $request, $id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->forceDelete();
        $request->session()->flash('success', 'User has been completed deleted');

        return back();
    }
}
