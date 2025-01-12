<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        /** @var User $user */
        $user = Auth::user();

        $links = $user
            ->links()
            ->orderBy('sort', 'desc')
            ->get();

        return view('dashboard', compact('links'));
    }
}
