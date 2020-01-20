<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    public function index(){
      // ログイン状態チェック後状態別LoginHtml取得
      $init = app()->make('App\Http\Controllers\InitController');
      $loginHtml = $init->chkLogin();

      return view('Posts.index',compact('loginHtml'));
    }

    public function logout(){
      // ログアウト
      Auth::logout();

      // ログイン状態チェック後状態別LoginHtml取得
      $init = app()->make('App\Http\Controllers\InitController');
      $loginHtml = $init->chkLogin();

      return view('Posts.index',compact('loginHtml'));
    }
}
