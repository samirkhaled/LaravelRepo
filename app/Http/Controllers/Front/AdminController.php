<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
public function showAdminName(){
    return 'hello samir';
}
public function getAdminView(){
 $obj=new \stdClass();
 $obj->name="samir";
 $obj->age=12;


    return view('welcome',compact('obj'));
}



}
