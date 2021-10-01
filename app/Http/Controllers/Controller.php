<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getWelcome(){
      
    //  $data=array('name'=>'hamed','greetings'=>'welcome',
    //  'age'=>23,'password'=>12345,'email'=>'test.mail.com');
    $data=array( );


        return view('welcome',compact('data')); 
    }

}
