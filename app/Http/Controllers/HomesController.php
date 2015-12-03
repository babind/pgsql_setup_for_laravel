<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class HomesController extends Controller
{
   
   public function index()
   {
        return view('homes.index');

   }

}
