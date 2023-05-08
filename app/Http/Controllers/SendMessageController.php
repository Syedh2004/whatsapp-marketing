<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\{APIKey};

use App\Http\Controllers\Controller;

use DB, DataTables;

class SendMessageController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:send-message', ['only' => ['index']]);
        $this->middleware('permission:send-message', ['only' => ['index']]);
    }

    public function index(Request $request)
    {
        $apiKey = APIKey::first();

        if ( empty( $apiKey->apikey ) ) {
            return view('apikey.index');
        } else {
            return view('send-message.index');
        }
    }

}
