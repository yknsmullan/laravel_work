<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function index()
  {
      return view('user_page.user');
  }
  public function other()
  {
      return view('user_page.register');
  }
}
