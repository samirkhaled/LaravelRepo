<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstContoller extends Controller

{

   function __construct(){
      $this->middleware('auth')->except("showId4");
   }
   public function showId1($id)
   {

    return " wellcome ".$id; 
   } 
   public function showId2($id)
   {

    return " wellcome ".$id; 
   } 


   public function showId3($id)
   {

    return " wellcome ".$id; 
   } 

   public function showId4($id)
   {

    return " wellcome ".$id; 
   } 


}
