<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
  
   
    public function edit($userId){
        
        $user = User::findOrFail($userId);
        return view('user.edit',compact('user'));

    }
    
    public function update($userId,Request $request){
        //dd($request ->all());
        User::findOrFail($userId)->update($request ->all());
        return redirect(route('home'))->with('status','user updated!');
    }
}

