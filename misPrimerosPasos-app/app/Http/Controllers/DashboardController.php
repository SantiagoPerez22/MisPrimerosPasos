<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $fullName = $user->name;
        $firstName = explode(' ', trim($fullName))[0]; // Obtener el primer nombre
        $roles = $user->getRoleNames(); // Obtener todos los roles del usuario

        return view('dashboard', compact('firstName', 'roles'));
    }
}
