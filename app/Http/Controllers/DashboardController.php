<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function authentication()
    {
        return view('index',[
            'title' => 'Dashboard',
        ]);
    }
}
