<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
        {
            $this->validate($request, [
                'content' => 'required|max:140'
            ]);

            Auth::user()->statuses()->create([
                'content' => $request->content
            ]);
            return redirect()->back();
        }
}
