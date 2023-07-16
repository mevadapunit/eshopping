<?php

namespace App\Http\Controllers\admin\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }
}




