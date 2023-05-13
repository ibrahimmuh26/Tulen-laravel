<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>CrowdMarket</title>
    <link rel="stylesheet" href="{{asset('/css/home.css')}}" />
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
    <div class ="grid">
      
       @foreach($products as $product)
    
    {{-- <div class="product-card"> --}}
      <a class="product-card" href="{{route("general.product.show",["$product->id"])}}">
        <img
        src="{{asset('/images/'.$product->img)}}"
        alt="product-image"
        class="product-image"
      />
      <div class="trusted-store">Toko terpercaya</div>
      <h3 class="product-name">
        {{$product->name}}
      </h3>
      <div class="star-container">
        <img class="star-image" src="./public/Star 1.png" alt="" />
        <p class="product-description">4,6 (1rb Terjual)</p>
      </div>
      <p class="harga">Rp {{format_rupiah($product->harga)}}</p>
      <div class="product-description">Didanai oleh</div>
      <div class="pendana">
          <div class="pendana-image"></div>
          <div class="pendana-image"></div>
          <div class="pendana-image"></div>
      </div>
        
        
    </a>
      
    {{-- </div> --}}
    @endforeach
    </div>
   
    <footer>
      <div class="footer-container">Copyright 2023 • CrowdMarket</div>
    </footer>
  </body>
</html>
