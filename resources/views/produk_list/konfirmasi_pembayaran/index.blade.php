<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CrowdMarket - Buat Pesanan</title>
    <link rel="stylesheet" href="{{asset('css/style_1.css')}}" />
  </head>
  <body>
    <nav class="navbar">
      <img
        class="logo-app"
        src="{{asset('assets/logo-crowd-market2-1@2x.png')}}"
        alt="error"
      />
      <form action="" method="">
        <input
          class="search"
          type="text"
          name="search"
          id=""
          placeholder="Cari produk"
        />
      </form>
      <div class="container-icon">
        <a href=""
          ><img class="logo-normal" src="./public/shoppingcart.png" alt=""
        /></a>
        <a href=""
          ><img class="logo-normal" src="./public/notification.png" alt=""
        /></a>
        <a href=""
          ><img class="logo-normal" src="./public/message.png" alt=""
        /></a>
        <form action="" method="">
          <a href="">
            <input class="nav-button" type="button" value="Toko" />
          </a>
        </form>
        <div class="avatar"></div>
        <p class="username">Raditya</p>
      </div>
    </nav>
    <main>
      <div class="breadcrumb">
        <p>Home / Tas Rajut Organik / Buat Pesanan / Pembayaran</p>
      </div>
      <form action="">
        <div id="content">
          <article id="product-qty" class="card">
            <h2 class="section-title">Mohon Selesaikan Pembayaran</h2>
            <p class="section-descrip">
              Selesaikan pembayaran untuk menyelesaikan pesanan. Batas akhir pembayaran
            </p>
            <h3 class="date-time">
              {{$order->created_at}}
            </h3>
            <p class="section-descrip rekening">
              No Rekening 
            </p>
            <h3 class="tagihan">
              XXXXXXXX10
            </h3>
            <p class="section-descrip">
              Total Pembayaran
            </p>
            <h3 class="tagihan">
             Rp.{{$order->total}}
            </h3>
            <div class="button-bawah">
              {{-- <button class="nav-button nav-button-custom">Cek status</button> --}}
              <a href="{{route('general.product')}}"class="button-bayar">Belanja Lagi</a>
            </div>
          </article>
        </div>
      </form>
    </main>
    <footer>
      <div class="footer-container">Copyright 2023 • CrowdMarket</div>
    </footer>
    <script src="./main.js"></script>
  </body>
</html>
