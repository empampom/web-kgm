<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $procurements = Procurement::all();
        return view("dashboard.index", compact("procurements"));
    }

    public function detail($id)
    {
        $procurement = Procurement::find($id);
        return view("dashboard.detail", compact("procurement"));
    }
}
