<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ReservationController extends Controller
{
    /**
     * Function to display all Reservations
     */
    public function reservation()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $reservations=DB::table('reservations')->get();
         return view('Admin.all_reservations',compact('reservations'));

    }
}
