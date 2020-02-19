<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'leader_name' => ['required'],
            'leader_address' => ['required'],
            'leader_email' => ['required'],
            'leader_birthplace' => ['required'],
            'leader_birthdate' => ['required'],
            'leader_number' => ['required'],
            'leader_line' => ['required'],
            'leader_github' => ['required'],
            'leader_cv' => ['nullable','file'],
            'leader_project' => ['nullable','file'],
            'member1_name' => ['required'],
            'member1_address' => ['required'],
            'member1_email' => ['required'],
            'member1_birthplace' => ['required'],
            'member1_birthdate' => ['required'],
            'member1_number' => ['required'],
            'member1_line' => ['required'],
            'member1_github' => ['required'],
            'member1_cv' => ['nullable','file'],
            'member1_project' => ['nullable','file'], 
            'member2_name' => ['required'],
            'member2_address' => ['required'],
            'member2_email' => ['required'],
            'member2_birthplace' => ['required'],
            'member2_birthdate' => ['required'],
            'member2_number' => ['required'],
            'member2_line' => ['required'],
            'member2_github' => ['required'],
            'member2_cv' => ['nullable','file'],
            'member2_project' => ['nullable','file'],
            'payment_status' => ['nullable'],
            'payment_image' => ['nullable','file'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'leader_name' => $data['leader_name'],
            'leader_address' => $data['leader_address'],
            'leader_email' => $data['leader_email'],
            'leader_birthplace' => $data['leader_birthplace'],
            'leader_birthdate' => $data['leader_birthdate'],
            'leader_number' => $data['leader_number'],
            'leader_line' => $data['leader_line'],
            'leader_github' => $data['leader_github'],
            'member1_name' => $data['member1_name'],
            'member1_address' => $data['member1_address'],
            'member1_email' => $data['member1_email'],
            'member1_birthplace' => $data['member1_birthplace'],
            'member1_birthdate' => $data['member1_birthdate'],
            'member1_number' => $data['member1_number'],
            'member1_line' => $data['member1_line'],
            'member1_github' => $data['member1_github'],
            'member2_name' => $data['member2_name'],
            'member2_address' => $data['member2_address'],
            'member2_email' => $data['member2_email'],
            'member2_birthplace' => $data['member2_birthplace'],
            'member2_birthdate' => $data['member2_birthdate'],
            'member2_number' => $data['member2_number'],
            'member2_line' => $data['member2_line'],
            'member2_github' => $data['member2_github'],
        ]);

        if(request()->hasFile('leader_cv')){
            $leader_cv = request()->file('leader_cv')->getClientOriginalName();
            request()->file('leader_cv')->storeAs('team_data', $user->id.'/'.$leader_cv, '');
            $user->update(['leader_cv'=>$leader_cv]);
        }

        if(request()->hasFile('leader_project')){
            $leader_project = request()->file('leader_project')->getClientOriginalName();
            request()->file('leader_project')->storeAs('team_data', $user->id.'/'.$leader_project, '');
            $user->update(['leader_project'=>$leader_project]);
        }
        
        if(request()->hasFile('member1_cv')){
            $member1_cv = request()->file('member1_cv')->getClientOriginalName();
            request()->file('member1_cv')->storeAs('team_data', $user->id.'/'.$member1_cv, '');
            $user->update(['member1_cv'=>$member1_cv]);
        }

        if(request()->hasFile('member1_project')){
            $member1_project = request()->file('member1_project')->getClientOriginalName();
            request()->file('member1_project')->storeAs('team_data', $user->id.'/'.$member1_project, '');
            $user->update(['member1_project'=>$member1_project]);
        }

        if(request()->hasFile('member2_cv')){
            $member2_cv = request()->file('member2_cv')->getClientOriginalName();
            request()->file('member2_cv')->storeAs('team_data', $user->id.'/'.$member2_cv, '');
            $user->update(['member2_cv'=>$member2_cv]);
        }

        if(request()->hasFile('member2_project')){
            $member2_project = request()->file('member2_project')->getClientOriginalName();
            request()->file('member2_project')->storeAs('team_data', $user->id.'/'.$member2_project, '');
            $user->update(['member2_project'=>$member2_project]);
        }
        return $user;
    }
}
