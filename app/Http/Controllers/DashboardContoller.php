<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardContoller extends Controller
{
 
    public function index()
    {
    }


    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    
    public function show()
    {
        return view("dashboard.dashboard");
    }

    public function start_New_Report()
    {
        return view("dashboard.start_new_report");
    }

   
    public function edit(string $id)
    {
    }


    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
