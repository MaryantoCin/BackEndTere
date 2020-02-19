<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function edit()
    {
        $user = Auth::user();
        $userid = $user->id;
        $username = $user->name;
        $datas = User::find($userid);
        return view('edit',compact('datas','userid','username'));
    }
    
    public function update(Request $request, User $user)
    {
        $user = Auth::user();
        $data = $request->all();
        $user->update($data);
        // dd($data);

        return redirect('/home');
    }

}
