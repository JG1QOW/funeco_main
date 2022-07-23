<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function index(Request $request)
    {
        $ships = Ship::all();
        return view('ship.index', ['ships' => $ships]);
    }
}
