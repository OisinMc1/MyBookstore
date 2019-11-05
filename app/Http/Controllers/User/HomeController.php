<?php
# @Date:   2019-10-23T12:56:13+01:00
# @Last modified time: 2019-10-23T13:45:59+01:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Customer;
use Auth;

class HomeController extends Controller
{

public function __construct()
{
    $this->middleware('auth');
    $this->middleware('role:user');
}

  public function index(){

    $user = Auth::user();
    return view('user.home');
    }
  }
