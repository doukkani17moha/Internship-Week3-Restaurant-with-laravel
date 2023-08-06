<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Plat;

class HomeController extends Controller
{

    public function index()
{
    $menucake = DB::table('plats')->where('enable', 1)->where('categorie_id', 1)->get();
    $menufast = DB::table('plats')->where('enable', 1)->where('categorie_id', 3)->get();
    $breakfast = DB::table('plats')->where('enable', 1)->where('plat_time', 'breakfast')->get();
    $lunch = DB::table('plats')->where('enable', 1)->where('plat_time', 'lunch')->get();
    $dinner = DB::table('plats')->where('enable', 1)->where('plat_time', 'dinner')->get();
    $chefs = DB::table('chefs')->get();

    return view("home", compact('menucake','menufast', 'breakfast', 'lunch', 'dinner', 'chefs'));
}


    public function reservation_confirm(Request $req)
    {
         // Validate the form data
         $this->validate($req, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'no_guest' => 'required|string',
            'date' => 'required|string',
            'time' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = [
            'reserv_name' => $req->name,
            'reserv_email' => $req->email,
            'reserv_phone' => $req->phone,
            'no_guest' => $req->no_guest,
            'reserv_date' => $req->date,
            'reserv_time' => $req->time,
            'reserv_msg' => $req->message,
        ];
        $reservation=DB::table('reservations')->insert($data);
        if ($reservation) {
            session()->flash('success', 'Reservation Confirmed successfully!');
        } else {
            session()->flash('error', 'Failed to take a reservation.');
        }
    }
    /**
     * function to display menu
     */
    public function menu(){
        $plat = DB::table('plats')->where('enable', 1)->get();
        return view('menu', compact('plat'));
    }
}
