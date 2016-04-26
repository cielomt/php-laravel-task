<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }
    
    
    public function edit($id){
        $user = User::findOrFail($id);
        return view('account.edit',compact('user'));
    }

    public function update($id, Request $request){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('contacts')->with(['flash_message'=>'Profile successfully updated!']);
    }
}