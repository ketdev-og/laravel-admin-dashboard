<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileUpdateController extends Controller
{
    
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_no' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'sq' => ['required', 'string', 'max:255'],
            'vsq' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'acc_type' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'zp' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
        ]);
    

        $user = User::find($request->id);
        $user->first_name= $request->fname;
        $user->last_name= $request->lname;
        $user->email= $request->email;
        $user->dob= $request->dob;
        $user->sq = $request->sq;
        $user->vsq = $request->vsq;
        $user->phone_no= $request->phone_no;
        $user->gender= $request->gender;
        $user->country= $request->country;
        $user->address= $request->address;
        $user->zp = $request->zp;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->acc_type= $request->acc_type;

        $user->save();

        return view('usersprofile', ['user'=>$user]);

       
    }
}
