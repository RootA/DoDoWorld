<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaymentController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
 public function __construct()
 {
     $this->middleware('guest');
 }
 /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
     return view('pages.payment');
 }
 public function orderPost(Request $request)
 {
         $user = User::find(3);
         $input = $request->all();
         $token = $input['stripeToken'];

         try {
             $user->subscription($input['plane'])->create($token,[
                     'email' => $user->email
                 ]);
             return back()->with('success','Subscription is completed.');
         } catch (Exception $e) {
             return back()->with('success',$e->getMessage());
         }

  }
}
