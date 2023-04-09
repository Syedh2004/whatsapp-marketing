<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IsActive;

class IsActiveController extends Controller
{
    public function index(Request $request)
    {
        $data = IsActive::orderBy('id', 'DESC')->first();

        return [
            'status' => $data->status
        ];
    }
}
