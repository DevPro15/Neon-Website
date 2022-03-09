<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.adminpanel');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
