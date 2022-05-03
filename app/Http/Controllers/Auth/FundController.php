<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FundController extends Controller
{
    public function store(Request $request)
    {   
        $acc_no = $request->acc_no;
        $id = User::where('acc_no', $acc_no)->first()->id;
        
       
        if(!$id){
            return redirect()->back()->with('message', 'account number invalid');
        }else{
            Transaction::create([
                'user_id' => $id,
                'acc_type' => $request->acc_type,
                'acc_no' => $request->acc_no,
                'amount' => $request->amount
            ]);
    
            return redirect()->back()->with('message', 'fund transfered successfully');
        }
       
    }
}
