<!DOCTYPE html>
<html lang="tr">

<head>
  <!-- <script>
    const path = window.location.pathname;
    const securePath = path.replace(/\/$/, "");
    if (path.endsWith("/")) {
      window.location.href = securePath;
      //sayfanın sonunda slash olunca apache son parameteyi dizin olarak algılıyor
      //ve statik doyalarımın yolu karışıyor

      base url ile sorun cozuldu
    }
  </script> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $BASE_URL ?>public/shop/assets/styles/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <title><?= $shop_name ?></title>
</head>

<body>
  <!-- header start -->
  <div class="header">
    <div class="back-icon"><i class="fa-solid fa-angles-left"></i></div>
    <img class="logo" src="<?= $BASE_URL ?>public/img/logo.png">
    <div class="bars-icon"><i class="fa-solid fa-bars"></i></div>
  </div>
  <!-- header end -->
  <div class="catchword">Kategoriler</div>

  <!-- categories start -->
  <div class="container">
    <div class="categories">
      <?php
      foreach ($product_categories as $value) { ?>
        <div class="category-item" data-category-name="<?= $value['category_name'] ?>" data-category-id="<?= $value['id'] ?>">
          <img class="category-image" src="<?= $BASE_URL ?>public/shop/assets/images/<?= $shop_routing_name ?>/categories/<?= $value['category_photo'] ?>" alt="">
          <p><?= $value['category_name'] ?></p>
        </div>
      <?php }
      ?>
    </div>
  </div>
  <!-- categories end -->

  <!-- products start -->
  <div class="container">
    <h2 class="product-header"></h2>
    <!-- <p class="product-explanation"> Sweet or salty. we have the perfect breakfast for every taste.</p> -->
    <div class="products" id="products">
    </div>
  </div>
  <!-- products end -->

  <!-- basket start -->
  <div class="basket-wrapper">
    <div class="basket" id="basket">
      <i class="fa-solid fa-basket-shopping"></i>
      <div class="basket-count-wrapper">
        <span class="basket-count"></span>
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
      </div>
      <div class="subtotal">
        <p class="subtotal-header">Toplam:</p>
        <p class="subtotal-value"><span class="tl"> TL</span></p>
      </div>
      <div class="controls">
        <button class="close-btn">Menüye Dön</button>
        <button class="submit-btn">Siparişi Tamamla</button>
      </div>
    </div>
  </div>
  <!-- card modal end -->
  <script>
    let routing_name = '<?= $shop_routing_name ?>';
    let base_url = '<?= $BASE_URL ?>';
  </script>
  <script src="<?= $BASE_URL ?>public/shop/assets/scripts/main-min.js"></script>

</body>

</html>