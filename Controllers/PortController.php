<?php

namespace App\Http\Controllers;

use App\Models\Port;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function index(Request $request)
    {
        $ships = Port::all();
        return view('port.index', ['port' => $port]);
    }
}
