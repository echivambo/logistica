<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controle = DB::table('control_p')
            ->orderByRaw('mes DESC')
            ->get();
        /*
        $controle = DB::table('control_p')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('control_p.*', 'contacts.phone', 'orders.price')
            ->get();
        */
        return view('home', compact('controle'));
    }
}
