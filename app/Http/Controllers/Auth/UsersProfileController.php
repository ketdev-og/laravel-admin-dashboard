<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UsersProfileController extends Controller
{
   public function update(Request $request)
   {
      $id = $request->id;
      $user = User::find($id);
      return view('usersprofile', ['user' => $user]);
   }

   public function delete(Request $request)
   {
      $id = $request->id;
      User::find($id)->delete();
      return redirect()->route('users');
   }
   public function activate(Request $request)
   {
      $id = $request->id;
      $user =  User::find($id);
      $user->isActive = !$user->isActive;
      $user->save();
      
      return view('usersprofile', ['user' => $user]);
   }
}
