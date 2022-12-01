<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users=User::with('roles')->get();
        return view('pages.users.list_user',compact('users'));
    }

    public function create()
    {
        $roles=Role::all();
        return view('pages.users.add_user',compact('roles'));
    }


    public function store(StoreUserRequest $request)
    {
        $request->validated();
        $request['password']=bcrypt($request['password']);
        User::create($request->all());
        $last=User::all()->last();
        $user_id=$last->id;
        $user=User::find($user_id);
        if($request['role']=='admin')
        {
            $user->assignRole('admin');
        }
        else
        {
            $user->assignRole('employer');
        }
        return redirect()->route('users.index');
    }




}
