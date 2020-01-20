<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
class AccountController extends Controller
{
    public function index(){

      $init = app()->make('App\Http\Controllers\InitController');
      $loginHtml = $init->chkLogin();

      return view('Mypage.mypage', compact('loginHtml'));
    }
}
