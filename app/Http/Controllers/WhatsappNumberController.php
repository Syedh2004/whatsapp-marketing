<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\{WhatsappNumber};

use App\Http\Controllers\Controller;

use App\Imports\WhatsappNumbersImport;

use Maatwebsite\Excel\Facades\Excel;

use DB, DataTables;

class WhatsappNumberController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:whatsapp-number|whatsapp-number-list|whatsapp-number-create|whatsapp-number-edit|whatsapp-number-import|whatsapp-number-delete', ['only' => ['index', 'store', 'import']]);
        $this->middleware('permission:whatsapp-number', ['only' => ['index']]);
        $this->middleware('permission:whatsapp-number-create', ['only' => ['create','store']]);
        $this->middleware('permission:whatsapp-number-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:whatsapp-number-import', ['only' => ['import']]);
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

                        if ( $user->can('whatsapp-number-edit') ) {
                            $btn .= '<a href="' . route('whatsapp-number.edit', $query->id) . '" class="btn btn-primary ml-10">Edit</a>';
                        }
                        if ( $user->can('whatsapp-number-delete') ) {
                            $btn .= '<a href="' . route('whatsapp-number.destroy', $query->id) . '" class="btn btn-primary ml-10">Delete</a>';
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

    public function import()
    {
        return view( 'whatsapp-number.import' );
    }

    public function importStore(Request $request)
    {
        if ( $request->hasFile('file') ) {
            $this->validate($request, [
                'file' => 'required',
            ]);

            $file = $request->file('file');

            // Get the file extension
            $extension = $file->getClientOriginalExtension();
            if ( $extension == 'xlsx' ) {
                try {
                    Excel::import(new WhatsappNumbersImport, request()->file('file'), 'XLSX');

                    return back()->withInput()->with('success', "ALl Numbers Imported!");
                } catch (\Exception $e) {
                    $msg = "Something Went Wrong! " . $e->getMessage();
                    return redirect()->route('whatsapp-number.import')->withInput()->with('error', $msg);
                }
            } else {
                return redirect()->route('whatsapp-number.import')->withInput()->with('error', 'Only XLSX File Supported!');
            }
        } else {
            return redirect()->route('whatsapp-number.import')->withInput()->with('error', 'File Doesn`t Exists!');
        }
        return redirect()->route('whatsapp-number.import')->withInput()->with('warning', 'Something Went Wrong!');
    }

    public function edit(Request $request)
    {
        $data = WhatsappNumber::find( $request->id );
        if ( !is_null( $data ) ) {
            return view( 'whatsapp-number.edit', compact( 'data' ) );
        } else {
            $data['value'] = "Data Not Found!";
            $data['url'] = route('whatsapp-number.index');
            return view( 'data-not-found', compact( 'data' ) );
        }
    }

    public function update(Request $request)
    {
        $numbers = WhatsappNumber::where('numbers', '=', $request['numbers'])->first();

        if ( $numbers != null ) {
            $this->validate($request, [
                'numbers' => 'required',
            ]);

            DB::beginTransaction();
            try {
                WhatsappNumber::where('id', $request['id'])->update([
                    'name'      =>      ( $request['name'] ) ? $request['name'] : '',
                    'numbers'   =>      $request['numbers']
                ]);

                DB::commit();

            } catch (\Exception $e) {
                DB::rollback();
                $th = "Something went wrong " . $e->getMessage();

                return redirect()->route('whatsapp-number.update')->withInput()->with('error', $th);
            }

            return redirect()->route('whatsapp-number.index')->with('success','Whatsapp Number Added Updated!');
        } else {
            return redirect()->route('whatsapp-number.update')->withInput()->with('warning', 'Numbers Doesn`t Exists!');
        }
    }

    public function destroy($id)
    {
        WhatsappNumber::find($id)->delete();
        return redirect()->route('whatsapp-number.index')->with('success','Whatsapp Number deleted successfully');
    }
}
