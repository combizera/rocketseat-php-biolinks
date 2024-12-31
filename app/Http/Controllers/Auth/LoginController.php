<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request)
    {
        if($request->attempt()) {
            return to_route('dashboard');
        }

        return back()->with('message', 'Invalid credentials');
    }
}
