<?php

namespace App\Http\Controllers;
use App\Models\Register;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\Session;

class formcontroller extends Controller
{
    public function  index()
    {
        return  view('index');
    }
     public function show( Request $req)
    {

        $req->validate(

            [
                'name'=> 'required',
                'email'=>'required',
                'password'=>'required'
            ]
            );
       // return view('register'); 
       $users= new Register;
       $users->name=$req->name;
       $users->email=$req->email;
       $users->password=$req->password;
       $users->save();

       return redirect('login');
           
    }
 public function  custom_login(Request $req)
 {
        $req->validate
        ([
           'email' => 'required',
           'password'=>'required'

        ]);
    }

   /*         
          $credentials= $req->only('email','password');
          if(Auth::attempt($credentials))
         {
           // $request->session()->regenerate();
          return  $data=$req->all();         //redirect()->intended('basicinfo')->withsuccess('signedin');
          }
      return  back('loginuser')->withErrors('password','wrong email or password!') ;
          //return redirect('login')->with('success','login details are not valid');

 
}


public function info()
 {

if (Auth::check())
{
    $data= $request->input();
    $request->session()->put('user',$data['user']);
    return redirect('basicinfo');  
}
   return redirect('login')->with('successs','you are  not allowed to acess');
}
 }*/
 public function form(Request $req)
 {
   $data=$req->input();
    $req->session()->get('email',$data['email']);
  // return redirect('form');
      //   return view('form_one');

        $req->validate([
              'name'=>'required', 
              'email'=>'required',
              'phone'=>'required|digits:10',
              'course'=>'required'

        ]);
        $users= new Register;
        $users->name=$req->name;
        $users->email=$req->email;
        $users->phone=$req->phone;
        $users->course=$req->course;
        $users->save();

        return  redirect('form/2');


 }
 public function form_two(Request $req)

 {
    $data=$req->input();
    $req->session();
   
   // return view('form_two');
      $req->validate([
         'dob'=>'required',
         'address'=>'required',
         'gender'=>'required'

      ]);
   $user= new Register;
   $user->dob=$req->dob;
   $user->address=$req->address;
   $user->gender=$req->gender;
   $user->save();

   return redirect('submit');


 }
 Public function form_three(Request $req)
 {

    $data=$req->input();
    $req->session();
    

    return view('form_three');
    $req->validate([
       'qualification'=>'required',
        'institute'=>'required',
        'university'=>'required',
        'occupation'=>'required',
        'experience'=>'required'

   ]);

    $user= new Register;
    $user->qualification=$req->qualification;
    $user->institute=$req->institute;
    $user->university=$req->university;
    $user->occupation= $req->occupation;
    $user->experience=$req->experience;
    $user->save();

    return redirect('form');

 }
 public function sess(Request $request){

    $data=$request->input();
    $request->session()->put('email',$data['email']);
    return redirect('form');
}

     
 }




