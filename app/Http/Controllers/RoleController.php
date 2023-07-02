<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{
    public function pickRole(): View
    {
        return view('role');
    }

    public function verify(Request $request): RedirectResponse
    {
        session()->put('keyValue', $request->token);
        
        return redirect()->route('keluhans.index');
    }
}
