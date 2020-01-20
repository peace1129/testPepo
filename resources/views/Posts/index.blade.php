@extends('layouts.topmenu')

@section('title', 'Jack Russel Club')

@section('stylesheet')
<!-- スクリプト追加 -->
@endsection

@section('loginHtml')
<!-- <form method="POST" action="/logout" name="logoutForm">

              <a href="javascript:document.logoutForm.submit();"><i class="icon ion-md-desktop"></i>  ログアウト</a>
              </fome> -->
              @csrf
{!! $loginHtml !!}
@endsection

@section('content')
<header class="masthead text-white text-center">
  <div class="overlay" style="background-image: url( {{ asset('/img/freestocks-org-BwMAjePW9M4-unsplash.jpg') }}); background-size:cover;opacity:.6;"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-12 mx-auto">
        <h1 class="mb-5" style="font-family:cursive;">'Jack Russel Club'<br />
        ジャックラッセルテリア専門の交流広場</h1>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              精一杯の愛情表現をしてくれるジャックラッセルテリア。<br />
              そんな活力に溢れたエネルギッシュな愛犬たちを紹介しませんか？
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>

<!-- Icons Grid -->
<section class="features-icons bg-light text-center" style="padding-top:12px;padding-bottom:12px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <a href="#" style="text-decoration: none;" class="m-auto">
              <i class="text-primary">Intro</i>
            </a>
          </div>
          <h4><i class="icon ion-md-checkmark-circle-outline"></i>
            STEP1.あなたのジャックラッセルを紹介しましょう。</h4>
          <p class="lead mb-0" style="font-size:14px;">まずはアカウントを登録し、あなたのジャックラッセルを全国へ紹介しよう。</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <a href="#posts" style="text-decoration: none;" class="m-auto">
              <i class="text-primary">Share</i>
            </a>
          </div>
          <h4><i class="icon ion-md-checkmark-circle-outline"></i>
            STEP2.お悩みや情報を共有しましょう。</h4>
          <p class="lead mb-0" style="font-size:14px;">お困りごと、オススメ情報を全国のジャックラッセルファンと共有しよう。</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <a href="#" style="text-decoration: none;" class="m-auto">
              <i class="text-primary">Follows</i>
            </a>
          </div>
          <h4><i class="icon ion-md-checkmark-circle-outline"></i>
            STEP3.ジャックラッセルをフォローしましょう。
          </h4>
          <p class="lead mb-0" style="font-size:14px;">お気に入りのジャックラッセルテリアを見つけたらフォローしよう。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Image Showcases -->
<section class="showcase" id="posts">
  <div class="container-fluid p-0">
    <div class="row no-gutters">

      <div class="col-lg-6 order-lg-2 text-white showcase-img">
        aaa
      </div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>Fully Responsive Design</h2>
        <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
      <div class="col-lg-6 my-auto showcase-text">
        <h2>Updated For Bootstrap 4</h2>
        <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>Easy to Use &amp; Customize</h2>
        <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="testimonials text-center bg-light">
  <div class="container">
    <h2 class="mb-5">What people are saying...</h2>
    <div class="row">
      <div class="col-lg-4">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
          <h5>Margaret E.</h5>
          <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
          <h5>Fred S.</h5>
          <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
          <h5>Sarah W.</h5>
          <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="call-to-action text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h2 class="mb-4">Ready to get started? Sign up now!</h2>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
        <ul class="list-inline mb-2">
          <li class="list-inline-item">
            <a href="#">About</a>
          </li>
          <li class="list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#">Contact</a>
          </li>
          <li class="list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#">Terms of Use</a>
          </li>
          <li class="list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#">Privacy Policy</a>
          </li>
        </ul>
        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
      </div>
      <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
        <ul class="list-inline mb-0">
          <li class="list-inline-item mr-3">
            <a href="#">
              <i class="fab fa-facebook fa-2x fa-fw"></i>
            </a>
          </li>
          <li class="list-inline-item mr-3">
            <a href="#">
              <i class="fab fa-twitter-square fa-2x fa-fw"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="fab fa-instagram fa-2x fa-fw"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

@endsection
