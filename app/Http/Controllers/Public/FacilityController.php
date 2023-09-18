<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    public function trashBank(){
        return view('public.facility.trash-bank');
    }

    public function tps3r(){
        return view('public.facility.tps3r');
    }
}
