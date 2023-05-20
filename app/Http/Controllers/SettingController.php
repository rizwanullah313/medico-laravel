<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    
    public function setting()
    {
      return view("setting.setting");
    }

    public function define_solicitor()
    {
      return view("setting.add_solicitor");
    }

    public function define_locations()
    {
      return view("setting.add_venues");
    }

    public function define_expert_procedures()
    {
      return view("setting.add_procedures");
    }

    public function add_referrer()
    {
      return view("setting.add_agencies");
    }

}
