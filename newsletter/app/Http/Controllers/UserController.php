<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users = User::with('roles')->paginate(8);
        $roles = Role::all();

        return view('users', compact('users', 'roles'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'role' => 'required'
        ]);
        $role = Role::find($request->role);
        $user = User::find($id);

        $user->syncRoles($role->name);

        return redirect('users')->with('success', 'Role Updated successfully');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user_id = User::find($id);
        $user_id->delete();

        return redirect('users');
    }
}
