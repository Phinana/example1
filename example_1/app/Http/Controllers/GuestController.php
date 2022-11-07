<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function show(Request $request) {
        $data = Guest::find($request->id);
        return view('show', ['data' => $data, 'reqId' => $request->id]);
    }

    public function showAll() {
        $data = Guest::All();
        return view('show_all', ['data' => $data]);
    }
}
