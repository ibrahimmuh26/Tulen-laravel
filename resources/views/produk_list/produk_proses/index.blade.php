<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CrowdMarket - Buat Pesanan</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  </head>
  <body>
    <nav class="navbar">
      <img
        class="logo-app"
        src="./public/logo-crowd-market2-1@2x.png"
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
        <p>Home / Tas Rajut Organik / Buat Pesanan</p>
      </div>
      <form action="">
        <div id="content">
          <article id="product-qty" class="card">
            <h2 class="section-title">Barang yang dipesan</h2>
            <img
              src="./public/image-qty.svg"
              class="featured-image"
              alt="product"
            />
            <h3 class="product-title">Tas Rajut Organik</h3>
            <p class="store-name">Toko Ibu Mur</p>
            <form id="qtyform" method="" class="quantity" action="#">
              <input
                type="button"
                value="-"
                class="qtyminus minus button"
                field="quantity"
                onClick="decreaseCount(event, this); calculateTotal();"
              />
              <input type="text" name="quantity" value="{{$qty}}" class="qty" id="qty" />
              <input
                type="button"
                value="+"
                class="qtyplus plus button"
                field="quantity"
                onClick="increaseCount(event, this); calculateTotal();"
              />
            </form>
          </article>
          <article id="pengiriman" class="card card-alamat">
            <h2 class="alamat-title">Alamat Pengiriman</h2>
            <p class="alamat-section">
              Mohon isi form di bawah untuk alamat pengiriman barang
            </p>
            <form action="">
              <label for="nama">Nama Penerima</label><br />
              <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan Nama Pembeli"
                class="text-name"
                required
              />
              <br />
              <label for="telp">No. Telp/HP</label><br />
              <input
                type="text"
                id="telp"
                name="telp"
                placeholder="Masukkan No. Telp/HP"
                class="text-telp"
                required
              />
              <br />
              <label for="alamat">Alamat Penerima</label><br />
              <textarea
                id="alamat"
                name="alamat"
                rows="4"
                cols="50"
                placeholder="Masukkan Alamat"
                class="area-alamat"
              ></textarea>
            </form>
          </article>
        </div>
        <aside>
          <article class="profile card card-aside">
            <header>
              <h2 class="ringkasan-header">Ringksan Pesanan</h2>
            </header>
            <section>
              <table border="0">
                <tr>
                  <th>Harga Barang</th>
                  <td>Rp<span id="harga-satuan">{{$products->harga}}</span></td>
                </tr>
                <tr>
                  <th>Total Harga (<span id="barang">{{$qty}}</span> Barang)</th>
                  <td>Rp<span id="result">{{$products->harga*$qty}}</span></td>
                </tr>
                <tr>
                  <td colspan="2"><hr /></td>
                </tr>
                <tr>
                  <th>Biaya Jasa Aplikasi (5%)</th>
                  <td>Rp<span id="layanan">{{($products->harga*$qty)*5/100}}</span></td>
                </tr>
                <tr>
                  <td colspan="2"><hr /></td>
                </tr>
                <tr>
                  <th>Total Tagihan</th>
                  <td><b id="tagihan">Rp{{($products->harga*$qty)+(($products->harga*$qty)*5/100)}}</b></td>
                </tr>
              </table>
              <button class="button-bayar">Bayar Tagihan</button>
            </section>
          </article>
        </aside>
      </form>
    </main>
    <footer>
      <div class="footer-container">Copyright 2023 • CrowdMarket</div>
    </footer>
    <script src="{{asset('/js/sub_main.js')}}"></script>
  </body>
</html>

