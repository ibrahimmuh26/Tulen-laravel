<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>CrowdMarket</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="container">
      <form method="POST" action="{{route('')}}" >
        <img
          class="image-logo"
          src="{{ asset('assets/logo-crowd-market2-1@2x.png') }}"
          alt=""
        />

        <div class="title">Selamat Datang!</div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter Your Email" required />
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Password" required />
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="" value="Continue" />
        </div>
      </form>
      <div class="option">Belum punya akun? <a class="daftar" href="{{ url('/register') }}">daftar</a></div>
    </div>
  </body>
</html>
