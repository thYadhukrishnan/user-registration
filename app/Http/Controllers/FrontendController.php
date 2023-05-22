<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function login(){
        return view('login');
    }

    public function dologin(){
        $input=['email'=>request('email'),'password'=>request('password')];
        
        if (Auth::attempt($input,true)){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->with('message','Invalid User');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }

    public function register(){
        return view('register');
    }

    public function saveuser(){
        request()->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'cpassword'=>'required',
        ]);
        $name=request('name');
        $email=request('email');
        $password=bcrypt(request('password'));
        $user=User::updateOrCreate([
            'email' => $email],[
            'name' => $name,
            'password' => $password,
        ]);
        return redirect()->route('home')->with('message','User Created Successfully...');
    }

    public function home(){
        $userId = Auth::id();
        //dd($userId);
        //return($userId);

        $address=Address::where('user_id','=',$userId)->get();
       // dd($address);
        return view('home',compact('address'));
    }

    public function addaddress(){
        return view('addaddress');
    }

    public function saveaddress(){
        request()->validate([
            'place'=>'required',
            'phone'=>'required',
            'pincode'=>'required',
        ]);
        $place=request('place');
        $phone=request('phone');
        $pin=request('pincode');
        $userId = Auth::id();
        $address=Address::updateOrCreate([
            'place' => $place],[
            'phone' => $phone,
            'pin' => $pin,
            'user_id'=>$userId,
        ]);
        return redirect()->route('home')->with('message','User Created Successfully...');
    }

    public function editaddress($id){
        $address=Address::find(decrypt($id));
        //dd($address);
        return view('editaddress',compact('address'));
    }

    public function updateaddress(Request $request){

        $address=Address::find(decrypt(request('id')));
        

        $address->update([

            'place'=>request('place'),
            'phone'=>request('phone'),
            'pin'=>request('pincode'),
        ]);
 
        return redirect()->route('home');
    }

    public function deleteaddress($id){
        $address=Address::find(decrypt($id));
        $address->delete();
        return redirect()->back();
    }


}
