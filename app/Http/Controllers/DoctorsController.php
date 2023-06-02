<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    //
    function doctor(){
        return view(' user.doctors');
    }
}
