<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User};
use Spatie\Permission\Models\Role;
use DataTables, Hash, DB;

class UsersController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:users|users-list|users-create|users-edit|users-delete', ['only' => ['index','store']]);
        $this->middleware('permission:users', ['only' => ['index']]);
        $this->middleware('permission:users-create', ['only' => ['create','store']]);
        $this->middleware('permission:users-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:users-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create(Request $request)
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users')->with('success','User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    public function edit($id)
    {
        $data['user'] = User::find($id);
        $data['roles'] = Role::pluck('name','name')->all();
        $data['userRole'] = $data['user']->roles->pluck('name','name')->all();

        return view('users.edit', compact('data') );
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'. $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();

        $user = User::find($id);

        if ( !empty( $input['password'] ) ) {
            $input['name'] = $request->name;
            $input['email'] = $request->email;
            $input['roles'] = $request->roles;
            $input['password'] = Hash::make($input['password']);
        } else {
            $input['name'] = $request->name;
            $input['email'] = $request->email;
            $input['roles'] = $request->roles;
            $input['password'] = $user->password;
        }

        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole( $request->input('roles') );

        return redirect()->route('users')->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users')->with('success','User deleted successfully');
    }
}
