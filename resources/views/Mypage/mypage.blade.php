@extends('layouts.topmenu')

@section('title', 'Jack Russel Club')

@section('stylesheet')
<!-- スクリプト追加 -->
@endsection

@section('loginHtml')
{!! $loginHtml !!}
@endsection

@section('content')
<div class="bg-warning">
  <div class="container">
  <h1 class="ml-3">マイページ</h1>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-8" style="height:1200px;">
      <form>
          <div class="form-group">
              <label>ユーザ名</label>
              <input type="text" name="user_name" class="form-control" value="ここに登録されているユーザ名">
          </div>

          <div class="form-group">
              <label>愛犬の名前</label>
              <input type="text" name="user_name" class="form-control">
          </div>

          <div class="form-group">
              <label>愛犬の年齢</label>
              <input type="text" name="user_name" class="form-control">
          </div>

          <div class="form-group">
              <label>愛犬の性別</label>
              <input type="text" name="user_name" class="form-control">
          </div>

          <div class="form-group">
              <label>コメント</label>
              <input type="textarea" name="user_name" class="form-control">
          </div>

          <button type="submit">ログイン</button>
      </form>
    </div>
    <div class="col-md-4" style="height:1200px;">
      現在のプロフィール画像
      <img src="{{ asset('/img/freestocks-org-BwMAjePW9M4-unsplash.jpg') }}" class="w-100 rounded-circle">
    </div>
  </div>
</div>
@endsection
