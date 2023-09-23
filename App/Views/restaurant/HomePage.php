<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/restaurant/assets/styles/style.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title><?= $restaurant_id ?></title>
</head>

<body>
  <!-- header start -->
  <div class="header">
    <div class="back-icon"><i class="fa-solid fa-angles-left"></i></div>
    <img class="logo" src="public/img/logo.png">
    <div class="bars-icon"><i class="fa-solid fa-bars"></i></div>
  </div>
  <!-- header end -->
  <div class="catchword">Kategoriler</div>

  <!-- categories start -->
  <div class="container">
    <div class="categories">
      <div class="category-item">
        <img class="category-image" src="public/img/delish-210419-carne-asada-torta-01-portrait-jg-1620136948.jpg" alt="">
        <p>Breakfast</p>
      </div>

      <div class="category-item">
        <img class="category-image" src="public/img/grease-monkey-burger-720x460.jpg" alt="">
        <p>Sandwiches</p>
      </div>

      <div class="category-item">
        <img class="category-image" src="public/img/abc.jpg" alt="">
        <p>Salads</p>
      </div>

      <div class="category-item">
        <img class="category-image" src="public/img/grease-monkey-burger-720x460.jpg" alt="">
        <p>Sandwiches</p>
      </div>

      <div class="category-item">
        <img class="category-image" src="public/img/abc.jpg" alt="">
        <p>Salads</p>
      </div>
    </div>
  </div>
  <!-- categories end -->

  <!-- products start -->
  <div class="container">
    <h2 class="product-header">Breakfast</h2>
    <!-- <p class="product-explanation"> Sweet or salty. we have the perfect breakfast for every taste.</p> -->
    <div class="products" id="products">
      <div class="product-item">
        <img class="product-image" src="public/img/grease-monkey-burger-720x460.jpg">
        <div class="product-info">
          <h3 class="product-name">Egg Toast Egg Toastzy</h3>
          <p class="product-price">$6</p>
        </div>
        <button class="btn-add-to-cart"><i class="fa-solid fa-plus"></i></button>
      </div>

      <div class="product-item">
        <img class="product-image" src="public/img/abc.jpg">
        <div class="product-info">
          <h3 class="product-name">Croissant Plates koc oguz abim be</h3>
          <p class="product-price">$6,5</p>
        </div>
        <button class="btn-add-to-cart"><i class="fa-solid fa-plus"></i></button>
      </div>

      <div class="product-item">
        <img class="product-image" src="public/img/delish-210419-carne-asada-torta-01-portrait-jg-1620136948.jpg">
        <div class="product-info">
          <h3 class="product-name">Poached Egg Avocado</h3>
          <p class="product-price">$12</p>
        </div>
        <button class="btn-add-to-cart"><i class="fa-solid fa-plus"></i></button>
      </div>

      <div class="product-item">
        <img class="product-image" src="public/img/abc.jpg">
        <div class="product-info">
          <h3 class="product-name">Big Breakfast Plate</h3>
          <p class="product-price">$16</p>
        </div>
        <button class="btn-add-to-cart"><i class="fa-solid fa-plus"></i></button>
      </div>

      <div class="product-item">
        <img class="product-image" src="public/img/delish-210419-carne-asada-torta-01-portrait-jg-1620136948.jpg">
        <div class="product-info">
          <h3 class="product-name">Poached Egg Avocado</h3>
          <p class="product-price">$12</p>
        </div>
        <button class="btn-add-to-cart"><i class="fa-solid fa-plus"></i></button>
      </div>

    </div>
  </div>
  <!-- products end -->

  <!-- basket start -->
  <div class="basket-wrapper">
    <div class="basket" id="basket">
      <i class="fa-solid fa-basket-shopping"></i>
      <div class="basket-count-wrapper">
        <span class="basket-count">8</span>
      </div>
    </div>
  </div>
  <!-- basket end -->

  <!-- card modal start -->
  <div class="popup" id="popup">
    <div class="overlay"></div>
    <div class="popup-content">
      <h2>Sepet</h2>

      <div class="modal-products">
        <div class="product-item">
          <img class="product-image" src="public/img/grease-monkey-burger-720x460.jpg">
          <div class="product-info">
            <h3 class="product-name">Egg Toast</h3>
            <p class="product-price">$6</p>
          </div>
          <div class="product-item-right">
            <div class="product-item-right-quantity">
              <button class="quantity-minus">
                <i class="fa-solid fa-plus"></i>
              </button>
              <span class="quantity">0</span>
              <button class="quantity-plus">
                <i class="fa-solid fa-minus"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="product-item">
          <img class="product-image" src="public/img/grease-monkey-burger-720x460.jpg">
          <div class="product-info">
            <h3 class="product-name">Egg Toast Toasttttz</h3>
            <p class="product-price">$6</p>
          </div>
          <div class="product-item-right">
            <div class="product-item-right-quantity">
              <button class="quantity-minus">
                <i class="fa-solid fa-plus"></i>
              </button>
              <span class="quantity">0</span>
              <button class="quantity-plus">
                <i class="fa-solid fa-minus"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="product-item">
          <img class="product-image" src="public/img/grease-monkey-burger-720x460.jpg">
          <div class="product-info">
            <h3 class="product-name">Egg Toast Toast Toast T</h3>
            <p class="product-price">$6</p>
          </div>
          <div class="product-item-right">
            <div class="product-item-right-quantity">
              <button class="quantity-minus">
                <i class="fa-solid fa-plus"></i>
              </button>
              <span class="quantity">0</span>
              <button class="quantity-plus">
                <i class="fa-solid fa-minus"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="product-item">
          <img class="product-image" src="public/img/grease-monkey-burger-720x460.jpg">
          <div class="product-info">
            <h3 class="product-name">Egg Toast Toast Toast T</h3>
            <p class="product-price">$6</p>
          </div>
          <div class="product-item-right">
            <div class="product-item-right-quantity">
              <button class="quantity-minus">
                <i class="fa-solid fa-plus"></i>
              </button>
              <span class="quantity">0</span>
              <button class="quantity-plus">
                <i class="fa-solid fa-minus"></i>
              </button>
            </div>
          </div>
        </div>

      </div>
      <div class="subtotal">
        <p class="subtotal-header">Toplam:</p>
        <p class="subtotal-value">700<span class="tl"> TL</span></p>
      </div>
      <div class="controls">
        <button class="close-btn">Menüye Dön</button>
        <button class="submit-btn">Siparişi Tamamla</button>
      </div>
    </div>
  </div>
  <!-- card modal end -->








  <script type="module" src="public/restaurant/assets/scripts/main.js"></script>
</body>

</html>