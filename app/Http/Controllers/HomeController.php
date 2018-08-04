<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

class HomeController extends Controller
{

    public function index(User $user){
      
      //$activeuser = $user->where('activated', true)->get() ;
      //$activeuser = $user->active()->get();
      
      
      //$notactiveuser = $user->notActive()->get();
    //  dd($notactiveuser, $activeuser ); 
   //   $postToUpdate = $post->find(4);
    //   $created_at = $postToUpdate->created_at;
      
    //   dd($created_at);
    //   $postToUpdate->title = 'This is an updated title4';
    //   $postToUpdate->save(); 
      
    //  dd($postToUpdate);
      //$posts = $post->get();
     
      //return view('test.dog')->with('user', $user);
        $created_at = $user->get();
        return response()->json($created_at);
    // public function index(Request $request) {
                
            // return view('test.dog');    
 }
}


