<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleAdd;
use App\Http\Requests\RoleUpdate;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy('id', 'desc')->paginate(10);
        $permissions = Permission::orderBy('name','asc')->get();
        return view('pages.role.roles', compact('roles', 'permissions'));       
    }

    public function store(RoleAdd $request)
    {
        try{

            // dd($request->validated());
            $role = Role::create($request->validated());
            if(!$role){
                return response()->json(['success'=>false, 'message'=> 'Role Not Created..']);
            }
            return response()->json(['success'=>true, 'message'=> 'Role Created..']);

        }catch(\Exception $e){
            return response()->json(['success'=> false, 'message'=>'Role not added..']);
        }
    }

    public function update(RoleUpdate $request, Role $role)
    {
        try{
            $role = $role->update($request->validated());
            if(!$role){
                return response()->json(['success'=>false, 'message'=> 'Role Not Update..']);
            }
            return response()->json(['success'=>true, 'message'=> 'Role Updated..']);

        }catch(\Exception $e){
            return response()->json(['success'=> false, 'message'=>'Role not update..']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->back()->withSuccess('Role Deleted');
    }
}
