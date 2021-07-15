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
    include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";

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
          <?php
          $cate_arr = array('watches', 'shoes', 'accessories');
          for($i = 0; $i < count($cate_arr); $i++){
            $sql = "SELECT * FROM zay_pro WHERE ZAY_pro_cate='{$cate_arr[$i]}'ORDER BY ZAY_pro_idx DESC LIMIT 1";

            $cate_result = mysqli_query($dbConn, $sql);
            $cate_result_row = mysqli_fetch_array($cate_result);

            $cate_img = $cate_result_row['ZAY_pro_img_01'];
            $cate_tit = $cate_result_row['ZAY_pro_cate']
          ?>
          <!-- Loop of cate item -->
          <div class="cate_item">
            <div class="cate_img">
              <img src="/zay/data/product_imgs/<?=$cate_img?>" alt="">
            </div>
            <h3><?=$cate_tit?></h3>

            <a href="#" class="main_btn">Go Shop</a>
          </div>
          <!-- end of Loop of cate item -->
          <?php }?>


        </div>
      </div>

    </section>
    <!-- featured Product section -->
    <section class="featured">
      <div class="center">
        <div class="tit_box">
          <h2>Featured Product</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br>mollit anim id
            est
            laborum.</p>
        </div>
        <div class="featured_box">

          <?php
        $sql1= "SELECT * FROM zay_pro ORDER BY ZAY_pro_idx DESC";
        $pro_result = mysqli_query($dbConn, $sql1);
        
        while($pro_row = mysqli_fetch_array($pro_result)){
          $pro_row_idx = $pro_row['ZAY_pro_idx'];
          $pro_row_img = $pro_row['ZAY_pro_img_01'];
          $pro_row_tit = $pro_row['ZAY_pro_name'];
          $pro_row_desc = $pro_row['ZAY_pro_desc'];
          $pro_row_pri = $pro_row['ZAY_pro_pri'];

        ?>
          <!-- featured loop item -->
          <div class="featured_item">
            <div class="item_frame">
              <div class="featured_img">
                <img src="/zay/data/product_imgs/<?=$pro_row_img?>" alt="">
              </div>
              <div class="like_unlike">
                <div class="like_icons">
                  <span>좋아요 | <b>20</b></span>
                  <span>별로에요 | <b>11</b></span>
                </div>
                <p><i class="fa fa-krw"></i><?=$pro_row_pri?></p>
              </div>
              <div class="featured_txt">
                <h3><?=$pro_row_tit?></h3>
                <p class="desc"><?=$pro_row_desc?></p>

              </div>
              <div class="reviews">
                <em>Comments(12)</em>
              </div>
            </div>
          </div>
          <!-- end of featured loop item -->
          <?php }?>
        </div>
      </div>
      <div class="load_more">
        <button type="button">더보기</button>
      </div>
    </section>
    <!-- end of featured Product section -->
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