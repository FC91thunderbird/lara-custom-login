<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAdd;
use App\Http\Requests\UserUpdate;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->orderBy('id','desc')->paginate(10);
        return view('pages.users.users', compact('users'));
    }
    
    
    public function create()
    {
        $roles = Role::orderBy('name','asc')->get();
        return view('pages.users.addOrUpdate', compact('roles'));
    }

    public function store(UserAdd $request)
    {
        try {
            $user = User::create($request->validated());

            // auth()->login($user);
            if(!$user){
                return redirect()->route('users.create')->withSuccess('User Not Saved');
            }

            return redirect()->route('users.index')->withSuccess("User Saved successfully.");
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('User Not created');
        }
    }
   
 
    public function edit(User $user)
    {
        $roles = Role::orderBy('name','asc')->get();
        return view('pages.users.addOrUpdate', compact('user','roles'));
    }


    public function update(UserUpdate $request, User $user)
    {
        try{
            $user = $user->update($request->validated());

            if(!$user){
                return redirect()->back()->withErrors('User Not Update');
            }
            return redirect()->route('users.index')->withSuccess("User updated");
        }catch(\Exception $e){
            return redirect()->back()->withErrors('User Not Update..');
        }
    }

    public function destroy(string $id)
    {
        try{
            $user = User::find($id);
            $user->delete();
            return redirect()->route('users.index')->withSuccess('User Deleted');
        }catch(\Exception $e){
            return redirect()->back()->withErrors('User Not Deleted');
        }

    }
}
