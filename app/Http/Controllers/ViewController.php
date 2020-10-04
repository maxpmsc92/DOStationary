<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class ViewController extends Controller
{
    

       public function artisan()
       {
              Artisan::call('migrate:fresh');
              return view('welcome');
       }
}