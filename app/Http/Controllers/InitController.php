<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InitController extends Controller
{

    ////ログイン状態監視用メソッド
    public function chkLogin(){

      $loginHtml = null;
      if (Auth::check()) {
        // ログイン中⇒マイページログイン用HTML返却
        $loginHtml = "<form method=\"POST\" action=\"/logout\" name=\"logoutForm\">
                      {! @csrf !}
                      <a href=\"javascript:document.logoutForm.submit();\"><i class=\"icon ion-md-desktop\"></i>  ログアウト</a>
                      </fome>
                      <a href=\"/Mypage\"><i class=\"icon ion-md-desktop\"></i>  マイページ</a>";
      } else {
        // ログアウト中⇒新規登録・ログイン用HTML返却
        $loginHtml = "<a href=\"/home\"><i class=\"icon ion-md-desktop\"></i>  ログイン</a>
                      <a href=\"/register\"><i class=\"icon ion-md-desktop\"></i>  新規登録</a>";
      }

      return $loginHtml;
    }
}
