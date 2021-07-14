<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Favicon Link -->
  <link rel="shortcut icon" href="/zay/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/zay/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/zay/img/favicon.ico">
  <title>ZAY shop</title>
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700&family=Roboto:wght@100;300;400;500;700&display=swap"
    rel="stylesheet">
  <!--reset css -->
  <link rel="stylesheet" href="/zay/css/reset.css" />
  <!--Light Slider plugin css -->
  <link rel="stylesheet" href="/zay/lib/lightslider.css" />
  <!-- main css -->
  <link rel="stylesheet" href="/zay/css/style.css" />
  <!-- media style css -->
  <link rel="stylesheet" href="/zay/css/media.css" />
</head>

<body>
  <div class="wrap">

    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php";
    ?>

    <!-- slider landing section -->
    <section class="slider">
      <!-- loop slider box -->
      <div class="slider_box">
        <div class="center slider_wrap">
          <div class="slider_txt">
            <h2>Proident occaecat</h2>
            <h4>Ullamco laboris nisi ut</h4>
            <p>We bring you 100% free CSS templates for your websites. If you wish to support TemplateMo, please make a
              small contribution via PayPal or tell your friends about our website. Thank you.</p>
          </div>
          <div class="slider_img">
            <img src="/zay/img/banner_img_01.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- enc of loop slider box -->
      <!-- loop slider box -->
      <div class="slider_box">
        <div class="center slider_wrap">
          <div class="slider_txt">
            <h2>Proident occaecat</h2>
            <h4>Ullamco laboris nisi ut</h4>
            <p>We bring you 100% free CSS templates for your websites. If you wish to support TemplateMo, please make a
              small contribution via PayPal or tell your friends about our website. Thank you.</p>
          </div>
          <div class="slider_img">
            <img src="/zay/img/banner_img_02.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- enc of loop slider box -->
      <!-- loop slider box -->
      <div class="slider_box">
        <div class="center slider_wrap">
          <div class="slider_txt">
            <h2>Proident occaecat</h2>
            <h4>Ullamco laboris nisi ut</h4>
            <p>We bring you 100% free CSS templates for your websites. If you wish to support TemplateMo, please make a
              small contribution via PayPal or tell your friends about our website. Thank you.</p>
          </div>
          <div class="slider_img">
            <img src="/zay/img/banner_img_03.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- enc of loop slider box -->
    </section>
    <!-- end of slider landing section -->

    <!-- Categories Section -->
    <section class="categories">
      <div class="center">
        <div class="tit_box">
          <h2>Categories of The Month</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br>mollit anim id est
            laborum.</p>
        </div>
        <div class="cate_box">
          <!-- Loop of cate item -->
          <div class="cate_item">
            <div class="cate_img">
              <img src="/zay/img/category_img_01.jpg" alt="">
            </div>
            <h3>Watches</h3>

            <a href="#" class="main_btn">Go Shop</a>
          </div>
          <!-- end of Loop of cate item -->
          <!-- Loop of cate item -->
          <div class="cate_item">
            <div class="cate_img">
              <img src="/zay/img/category_img_02.jpg" alt="">
            </div>
            <h3>Watches</h3>

            <a href="#" class="main_btn">Go Shop</a>
          </div>
          <!-- end of Loop of cate item -->
          <!-- Loop of cate item -->
          <div class="cate_item">
            <div class="cate_img">
              <img src="/zay/img/category_img_03.jpg" alt="">
            </div>
            <h3>Watches</h3>

            <a href="#" class="main_btn">Go Shop</a>
          </div>
          <!-- end of Loop of cate item -->
        </div>
      </div>

    </section>
    <!-- end of Categories Section -->
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/footer.php";
    ?>
  </div>
  <!-- jquery framework load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/zay/lib/lightslider.js"></script>
  <script src="/zay/js/jq.main.js"></script>
  <script src="/zay/js/slider.js"></script>
</body>

</html>