<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('home');
    }

    public function diagnosa()
    {
        return view('membership.diagnosa');
    }

     function profil()
    {
        $userId = Auth::id();
        $data = User::find($userId);
        return view('membership.profil',compact('data'));
    }
}
