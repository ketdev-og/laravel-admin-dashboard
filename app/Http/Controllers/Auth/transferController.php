<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\transfer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class TransferController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'from_acc' => ['required'],
            'recp_bank_name' => ['required'],
            'acc_name' => ['required'],
            'iban' => ['required'],
            'swiftcode' => ['required'],
            'amount' => ['required'],
           
        ]);

         Transfer::create([
            'user_id'=>Auth::user()->id,
            'from_acc' => $request->from_acc,
            'recp_bank_name' => $request->recp_bank_name,
            'acc_name' => $request->acc_name,
            'iban' => $request->iban,
            'swift_code'=>$request->swiftcode,
            'amount'=>$request->amount,
            'message'=>$request->message,  
            'cm_code'=> Str::uuid()   
        ]);


        return redirect()->back()->with('message', 'transfer made successfully');
    }

    public function verify(Request $request){
        $code = $request->cfc;
        $trans = transfer::where('cm_code',$code)->first();
        if(!$trans){
            return redirect()->back()->with('message', 'invalid confirmation code');
        }elseif($trans->confirmed == 1){
            return redirect()->back()->with('message', 'transfer already confirmed');
        }else{
            $trans->confirmed = 1;
            $trans->save();
            return redirect()->route('success');
        }
        
       
    }


}
