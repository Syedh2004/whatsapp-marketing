<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\{APIKey};

use App\Http\Controllers\Controller;

use DB, DataTables;

class APIKeyController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:send-message', ['only' => ['index']]);
        $this->middleware('permission:send-message', ['only' => ['index']]);
    }

    public function index()
    {
        return view('apikey.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'apikey' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $user = APIKey::create([
                'apikey'    =>      $request->apikey
            ]);

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            $th = "Something went wrong " . $e->getMessage();

            return redirect()->route('apikey.index')->withInput()->with('error', $th);
        }

        return redirect()->route('apikey.index')->with('success','API Key created successfully!');
    }

}
