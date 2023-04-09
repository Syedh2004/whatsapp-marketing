<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{WhatsappNumber};
use App\Http\Controllers\Controller;
use DB, DataTables;

class WhatsappNumberController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:whatsapp-number|whatsapp-number-list|whatsapp-number-create|whatsapp-number-edit|whatsapp-number-delete', ['only' => ['index','store']]);
        $this->middleware('permission:whatsapp-number', ['only' => ['index']]);
        $this->middleware('permission:whatsapp-number-create', ['only' => ['create','store']]);
        $this->middleware('permission:whatsapp-number-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:whatsapp-number-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if ( request()->ajax() ) {
            $query = WhatsappNumber::get();

            $user = Auth::user();

            return Datatables::of( $query )
                    ->addIndexColumn()
                    ->addColumn('action', function( $query ) use ( $user ) {
                        $btn = '';

                        if ( $user->can('whatsapp-number-show') ) {
                            $btn .= '<a href="' . route('whatsapp-number.show', $query->id) . '" class="btn btn-info">Show</a>';
                        }
                        if ( $user->can('whatsapp-number-edit') ) {
                            $btn .= '<a href="' . route('whatsapp-number.edit', $query->id) . '" class="btn btn-primary ml-10">Edit</a>';
                        }
                        if ( $user->can('whatsapp-number-delete') ) {
                            $btn .= '<a href="' . route('whatsapp-number.destroy', $query->id) . '" class="btn btn-primary ml-10">Edit</a>';
                        }

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('whatsapp-number.index');
    }

    public function create()
    {
        return view( 'whatsapp-number.create' );
    }

    public function store(Request $request)
    {
        $numbers = WhatsappNumber::where('numbers', '=', $request['numbers'])->first();

        if ( $numbers === null ) {
            $this->validate($request, [
                'numbers' => 'required|regex:/^[0-9]+$/|digits_between:8,16',
            ]);

            DB::beginTransaction();
            try {
                WhatsappNumber::create([
                    'name'      =>      $request['name'],
                    'numbers'   =>      $request['numbers']
                ]);

                DB::commit();

            } catch (\Exception $e) {
                DB::rollback();
                $th = "Something went wrong " . $e->getMessage();

                return redirect()->route('whatsapp-number.create')->withInput()->with('error', $th);
            }

            return redirect()->route('whatsapp-number.index')->with('success','Whatsapp Number Added Successfully');
        } else {
            return redirect()->route('whatsapp-number.create')->withInput()->with('warning', 'Numbers Already Exists!');
        }
    }

    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();

        return view('roles.show',compact('role','rolePermissions'));
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")
                                ->where("role_has_permissions.role_id", $id)
                                ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
                                ->all();

        return view( 'roles.edit', compact('role', 'permissions', 'rolePermissions') );
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')->with('success','Role updated successfully');
    }

    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')->with('success','Role deleted successfully');
    }
}
