<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{

    public function getHome()
    {
        if (Auth::user())
            return redirect()->action('catalogController@getIndex');
        else
            return redirect('login');
    }
}
