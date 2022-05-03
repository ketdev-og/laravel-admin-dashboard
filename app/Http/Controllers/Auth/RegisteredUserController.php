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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
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

        $user = User::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_no' => $request->phone_no,
            'dob' => $request->dob,
            'sq' => $request->sq,
            'vsq'=>$request->vsq,
            'gender'=>$request->gender,
            'acc_type'=> $request->acc_type,
            'address'=>$request->address,
            'zp'=>$request->zp,
            'state'=>$request->state,
            'country'=>$request->country,
            'city'=>$request->city,
            'acc_no'=>$this->generateUniqueCode()
            
        ]);

        event(new Registered($user));
        return redirect()->route('users');
    }

    public function generateUniqueCode()

    {
        do {
            $code = random_int(1000000000, 9999999999);
        } while (User::where("acc_no", "=", $code)->first());
        return $code;

    }
}
