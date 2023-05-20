<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardContoller extends Controller
{
 
  
    public function show()
    {
        return view("dashboard.dashboard");
    }

    public function start_New_Report()
    {
        return view("dashboard.start_new_report");
    }

    public function my_cases()
    {
        return view("dashboard.my_cases");
    }

    public function my_invoices()
    {
        return view("dashboard.my_invoices");
    }

  


  
}
