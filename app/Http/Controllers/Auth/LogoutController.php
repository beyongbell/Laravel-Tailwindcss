<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Authentication;

class LogoutController extends Controller
{
    public function store()
    {
        Authentication::logout();
        return redirect()->route('home');
    }
}
