<?php
# @Date:   2019-10-23T12:55:55+01:00
# @Last modified time: 2019-10-23T13:46:05+01:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
  {
  public function __construct()

  {
      $this->middleware('auth');
      $this->middleware('role:admin');
  }

  public function index(){
    return view('admin.home');
    }

  }
