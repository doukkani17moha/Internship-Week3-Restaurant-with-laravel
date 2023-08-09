<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{

    public function index()
{
    $plats = DB::table('plats')->where('enable', 1)->limit(8)->get();

    return view("home", compact('plats'));
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
        DB::table('reservations')->insert($data);
        return redirect('/')->with('success', 'Reservation submitted successfully, We gonna contact you soon as possible!');
    }
    /**
     * Function to accept reservation and send an email for acceptance
     */

     /**
     * Function to decline reservation and send an email for declined
     */

    /**
     * function to display menu
     */
    public function menu(){
        $plats = DB::table('plats')->where('enable', 1)->get();
        $categories = DB::table('categories')->get();
        $platsByCategory = [];

        foreach ($categories as $category) {
            $platsByCategory[$category->id] = DB::table('plats')
                ->where('enable', 1)
                ->where('categorie_id', $category->id)
                ->get();
        }

        return view('menu', compact('plats', 'categories', 'platsByCategory'));
    }


    public function about(){
        $chefs = DB::table('chefs')->limit(4)->get();
        return view('about', compact('chefs'));
    }
}
