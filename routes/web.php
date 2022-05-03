<?php

use App\Http\Controllers\Auth\ProfileUpdateController;
use App\Http\Controllers\Auth\TransferController;
use App\Http\Controllers\Auth\FundController;
use App\Http\Controllers\Auth\UsersProfileController;
use App\Models\Transaction;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {

    return view('home');
});

Route::get('/checking', function () {
    return view('checking');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/ach', function () {
    return view('ach');
});

Route::get('/banking', function () {
    return view('banking');
});

Route::get('/buscertificate', function () {
    return view('buscertificate');
});

Route::get('/buscheck', function () {
    return view('buscheck');
});


Route::get('/busdebit', function () {
    return view('busdebit');
});


Route::get('/business', function () {
    return view('business');
});

Route::get('/busmarket', function () {
    return view('busmarket');
});

Route::get('/buspage', function () {
    return view('buspage');
});

Route::get('/bussavings', function () {
    return view('bussavings');
});

Route::get('/career', function () {
    return view('career');
});


Route::get('/certificate', function () {
    return view('certificate');
});

Route::get('/check', function () {
    return view('check');
});

Route::get('/checking', function () {
    return view('checking');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/debit', function () {
    return view('debit');
});

Route::get('/enews', function () {
    return view('enews');
});

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/formcomplete', function () {
    return view('formcomplete');
});

Route::get('/formcomplete', function () {
    return view('formcomplete');
});


Route::get('/formcomplete1', function () {
    return view('formcomplete1');
});


Route::get('/health', function () {
    return view('health');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/market', function () {
    return view('market');
});

Route::get('/partnership', function () {
    return view('partnership');
});

Route::get('/press', function () {
    return view('press');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/savings', function () {
    return view('savings');
});


Route::get('/security', function () {
    return view('security');
});

Route::get('/shareholder', function () {
    return view('shareholder');
});


Route::get('/successful', function () {
    return view('successful');
});

Route::get('/personal', function () {
    return view('personal');
});

Route::get('/check_active', function () {
    return view('checkActive');
})->name('check_active');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()) {
            if (Auth::user()->id === 1) {
                auth()->user()->assignRole('admin');
            } else {
                auth()->user()->assignRole('client');
            }
        }
        $transfer = Auth::user()->transfers;
        return view('dashboard', ['transfer' => $transfer]);
    })->name('dashboard');

    Route::get('/transfer', function () {
        return view('transfer');
    })->name('transfer');

    Route::get('/history', function () {
        $transfer = Auth::user()->transfers;
        return view('history', ['transfer' => $transfer]);
    })->name('history');

    Route::get('/summary', function () {
        $transactions = Transaction::all();
        return view('summary', ['transactions'=>$transactions]);
    })->name('summary');

    Route::get('/adprofile', function () {
        return view('adprofile');
    })->name('adprofile');



    Route::get('/verify', function () {
        return view('verifytransfer');
    })->name('verify');

    Route::get('/success', function () {
        return view('success');
    })->name('success');


    Route::get('/fund_transfer', function () {
        return view('fundtransfer');
    })->name('fundtransfer')->middleware('adminProtect');

    Route::get('/users', function () {
        $user = User::all();
        return view('users', ['users' => $user]);
    })->name('users')->middleware('adminProtect');

    Route::get('/users/profile', function () {
        return view('usersprofile');
    })->name('users_profile')->middleware('adminProtect');


    Route::get('/transfers', function () {
    //     $transfer = Transfer::pluck('user_id');
       
    //    // dd(implode($transfer));
    //    $users = User::wherein('id',$transfer)->get();
    //   // dd($users);
    //     return view('adtransfers', ['users' => $users]);

    $transfer = Transfer::with('user')->get();
    return view('adtransfers', ['transfer' => $transfer]);
    })->name('transfers')->middleware('adminProtect');


    Route::post('/update_user', [ProfileUpdateController::class, 'store'])->name('update_user');
    Route::post('/transaction', [TransferController::class, 'store'])->name('transfer_m');
    Route::post('/verify_transfer', [TransferController::class, 'verify'])->name('verify_transfer');
    Route::post('/fund', [FundController::class, 'store'])->name('fund');
    Route::post('/users_profile', [UsersProfileController::class, 'update'])->name('post_users_profile');
    Route::post('/users_delete', [UsersProfileController::class, 'delete'])->name('delete_users_profile')->middleware('adminProtect');
    Route::post('/users_activate', [UsersProfileController::class, 'activate'])->name('activate_users_profile')->middleware('adminProtect');

    Route::get('/update', function (Request $request) {
        $user = User::find($request->id);
        return view('update', ['user' => $user]);
    })->name('update');
});


// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/test', function () {
    $trans = Transfer::get();
    $transAmount = [];
    for ($i=0; $i < count($trans) ; $i++) { 
        array_push($transAmount, $trans[$i]->amount);
    }
    $totalAmount = array_sum($transAmount);

    return $totalAmount;
});


require __DIR__ . '/auth.php';
