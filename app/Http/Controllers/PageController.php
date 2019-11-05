<?php
# @Date:   2019-10-24T09:51:16+01:00
# @Last modified time: 2019-10-24T12:31:04+01:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
      return view('welcome');
    }
    public function about(){
      return view('about');
}
}
