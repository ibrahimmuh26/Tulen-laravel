<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>CrowdMarket</title>
    <link rel="stylesheet" href="{{asset('css/detailProduk.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <p class="route">Home / Tas Rajut Organik</p>
    <div class="column-container">
      <div class="barang">
        <div class="foto-produk" style="background-image: url("./public/Untitled.png);"></div>
        <div class="keterangan-produk">
          <div class="trusted-store">Toko terpercaya</div>
          <h3 class="product-name">Minvacne hj</h3>
          <div class="star-container">
            <img class="star-image" src="./public/Star 1.png" alt="" />
            <p class="product-description">4,6 (1rb Terjual)</p>
          </div>
          <p class="harga">Rp<span id="harga-satuan">50.000</span></p>
          <div class="product-description">Didanai oleh</div>
          <div class="pendana">
            <div class="pendana-image"></div>
            <div class="pendana-image"></div>
            <div class="pendana-image"></div>
          </div>
          <div class="container-toko">
            <img class="logo-toko" src="./public/building.png" alt="" />
            <p class="nama-toko">Toko Ibu Mar</p>
            <form action="" method="">
              <form>
                <input
                  class="toko-button"
                  type="button"
                  value="Kunjungi Toko"
                />
              </a>
            </form>
          </div>
          <p class="deskripsi">Deskripsi</p>
          <p class="product-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
            <br /><br />
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>
      <div class="atur-pesanan">
        <p class="atur-pesanan-title">Atur Pesanan</p>
        <p class="product-description-padding">Jumlah yang ingin dibeli</p>
        <form id="qtyform" method="POST" class="quantity" action="{{url('/co/'.$products->id)}}">
            @csrf
          <input
            type="button"
            value="-"
            class="qtyminus minus button-qty"
            field="quantity"
            onClick="decreaseCount(event, this); calculateTotal();"
          />
          <input type="text" name="quantity" value="1" class="qty" id="qty" />
          <input
            type="button"
            value="+"
            class="qtyplus plus button-qty"
            field="quantity"
            onClick="increaseCount(event, this), calculateTotal();"
          />
        <p class="product-description-padding">Subtotal yang dibayar</p>
        <p class="harga">Rp<span id="result">50.000</span></p>
          <button type="submit"  >
            <input class="pesanan-button" type="button" value="Buat pesanan" />
          </button>
        </form>
      </div>
    </div>

    <footer>
      <div class="footer-container">Copyright 2023 • CrowdMarket</div>
    </footer>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
