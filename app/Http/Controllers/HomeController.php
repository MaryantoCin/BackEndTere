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

        if(request()->hasFile('leader_cv')){
            $name_leader_cv = time()."_".request()->file('leader_cv')->getClientOriginalName();
            request()->file('leader_cv')->move('cv',$name_leader_cv);
            $data['leader_cv'] = $name_leader_cv;
        }

        if(request()->hasFile('leader_project')){
            $name_leader_project = time()."_".request()->file('leader_project')->getClientOriginalName();
            request()->file('leader_project')->move('project',$name_leader_project);
            $data['leader_project'] = $name_leader_project;
        }

        if(request()->hasFile('member1_cv')){
            $name_member1_cv = time()."_".request()->file('member1_cv')->getClientOriginalName();
            request()->file('member1_cv')->move('cv',$name_member1_cv);
            $data['member1_cv'] = $name_member1_cv;
        }

        if(request()->hasFile('member1_project')){
            $name_member1_project = time()."_".request()->file('member1_project')->getClientOriginalName();
            request()->file('member1_project')->move('project',$name_member1_project);
            $data['member1_project'] = $name_member1_project;
        }
        
        if(request()->hasFile('member2_cv')){
            $name_member2_cv = time()."_".request()->file('member2_cv')->getClientOriginalName();
            request()->file('member2_cv')->move('cv',$name_member2_cv);
            $data['member2_cv'] = $name_member2_cv;
        }

        if(request()->hasFile('member2_project')){
            $name_member2_project = time()."_".request()->file('member2_project')->getClientOriginalName();
            request()->file('member2_project')->move('project',$name_member2_project);
            $data['member2_project'] = $name_member2_project;
        }

        $user->update($data);
        // dd($data);

        return redirect('/home');
    }

}
