<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Sell;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ResourceController extends Controller
{
   public function index(){
       $name=Auth::user()->name;
    $buy_infoes=DB::table('buys')->where('sender_name',$name)->get();
    $sell_infoes=DB::table('sells')->where('sender_name',$name)->get();

   	return view('index',compact('buy_infoes','sell_infoes'));
   }
   public function buy(){
   	return view('buy');
   }
   public function sell(){
   	return view('sell');
   }
   public function transections(){
       $buy_infoes=Buy::all();
       $sell_infoes=Sell::all();
       return view('transection',compact('buy_infoes','sell_infoes'));
   }
   public function users(){
       $users=User::all();
       return view('users',compact('users'));
   }

}
