<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function __construct() {
      $this->middleware('auth');
   }
   
    public function index()
    {
        return view('adminlogin');
    }
        

//      public function checklogin(Request $request){
//         $this->validate($request,[
//             'name' =>'required',
//             'password' =>'required'
           
            
//         ]);
//         $dd=Admin::get();
//        return($dd);
        
//         $user=array(
//             'name' =>$request->get('name'),
//             'password'=>$request->get('password')
//         );
        
//         if(Auth::attempt($user))
//         {
//             return redirect('createuser');
//         }else
//         {
//             return redirect('welcome');
//         }
//     }

    
// }
// 

}