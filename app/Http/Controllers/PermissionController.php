<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionAdd;
use App\Http\Requests\PermissionUpdate;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::orderBy('name','asc')->paginate(10);
        return view('pages.permission.permissions', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionAdd $request)
    {
        try{
            $permission = Permission::create( $request->validated());
            if(!$permission){
                return response()->json(['success'=>false, 'message'=>'Permission Not Created']);
            }
            return response()->json(['success'=>true, 'message'=>'Permission Created']);
        }catch(\Exception $e){
            return response()->json(['success'=>false, 'message'=> 'Permission not added']);
        }
    }

    public function update(PermissionUpdate $request, string $id)
    {
        try{
            $permission = Permission::find($id);
            if(!$id){
                return response()->json(['success'=>false, 'message'=> 'Permission Not Found..']);
            }

            $permission->update($request->validated());

            return response()->json(['success'=>true, 'message'=>'Permission Updated..']);
        }catch(\Exception $e){
            return response()->json(['success'=>false, 'message'=> 'Permission Not Updated..']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission = Permission::find($id);
        $permission->delete();

        return redirect()->back()->withSuccess('Permission Deleted');
    }
}
