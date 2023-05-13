<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>CrowdMarket</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="container">
      <form action="#">
        <img
          class="image-logo"
          src="{{ asset('assets/logo-crowd-market2-1@2x.png') }}"
          alt=""
        />

        <div class="title">Daftar akun</div>
        <div class="text">
          Harap mengisi biodata anda untuk mulai membuat akun baru
        </div>
        <p class="title-input">Email</p>
        <div class="input-box underline">
          <input type="text" placeholder="masukan email" required />
          <div class="underline"></div>
        </div>
        <p class="title-input">Password</p>
        <div class="input-box">
          <input type="password" placeholder="masukan password" required />
          <div class="underline"></div>
        </div>
        <p class="title-input">Konfirmasi password</p>
        <div class="input-box">
          <input type="password" placeholder="masukan password lagi" required />
          <div class="underline"></div>
        </div>
        <p class="title-input">No. Telp/HP</p>
        <div class="input-box underline">
          <input type="text" placeholder="masukan No. Telp/HP" required />
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="" value="Daftar" />
        </div>
      </form>
      <div class="option">
        Sudah punya akun? <a class="login" href="{{url('/login')}}">Login</a>
      </div>
    </div>
  </body>
</html>

