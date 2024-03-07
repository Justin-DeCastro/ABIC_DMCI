<?php

namespace App\Http\Controllers;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Logic for displaying the admin dashboard
        if(session()->has(''))
        return view('admin.dashboard');
    }
}
