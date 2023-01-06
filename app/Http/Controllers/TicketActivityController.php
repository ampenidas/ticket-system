<?php

namespace App\Http\Controllers;

use App\Models\TicketActivity;
use Illuminate\Http\Request;

class TicketActivityController extends Controller
{
    public function store(Request $request)
    {
        TicketActivity::create($request->all());
        return redirect()->back();
    }
}
