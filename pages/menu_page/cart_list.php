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
  <title>Zay Shop || Cart List</title>
</head>

<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php";
    ?>

    <section class="pro_search">
      <div class="center">
        <div class="tit_box">
          <h2>Cart List</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br>mollit anim id est
            laborum.</p>
        </div>
        <div class="search_lists">



          <?php
          $total = 0;
            if(isset($_SESSION['cart'])){
              foreach($_SESSION['cart'] as $key => $value){
                $total = $total + $value['cart_pri'];
                
                $cart_idx=$value['cart_idx'];
                $cart_img=$value['cart_img'];
                $cart_name=$value['cart_name'];
                $cart_pri=$value['cart_pri'];
                $cart_desc=$value['cart_desc'];
                $cart_quan =$value['cart_quan'];

            ?>
          <!-- start loop search item  -->
          <div class="search_item">
            <span class="search_img">
              <a href="/zay/pages/details/pro_detail_form.php?pro_idx=<?=$cart_idx?>"><img
                  src="/zay/data/product_imgs/<?=$cart_img?>" alt=""></a>
            </span>
            <span class="search_txt">
              <h2><?=$cart_name?></h2>
              <p><?=$cart_desc?></p>
              <h3 class="show_hide">Total Price : <i class="fa fa-krw"></i><?=$cart_pri?> </h3>
            </span>
            <span class="search_pri">
              <h3><i class="fa fa-krw"></i><?=$cart_pri?></h3>
            </span>
            <span class="search_btns">
              <form action="/zay/php/cart.php" method="post">
                <button name="remove_cart">REMOVE ITEM</button>
                <input type="hidden" name="cart_remove" value="<?=$cart_name?>">
                <button>ADD TO CART</button>

              </form>
            </span>
          </div>
          <!-- end of loop search item  -->
          <?php }} ?>
          <div class="total_pri">
            <h3>Total Price : <i class="fa fa-krw"></i><?=$total?> </h3>
          </div>
        </div> <!-- end of search lists  -->
      </div>
    </section>
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/footer.php";
    ?>
  </div>
  <!-- jquery framework load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/zay/js/jq.main.js"></script>
  <script>
  const loginBtn = document.querySelector("#login_btn");

  loginBtn.addEventListener('click', function() {
    if (!document.login_form.login_id.value) {
      alert('아이디를 입력해 주세요');
      document.login_form.login_id.focus();
      return;
    }
    if (!document.login_form.login_pass.value) {
      alert('비밀번호를 입력해 주세요');
      document.login_form.login_pass.focus();
      return;
    }
    document.login_form.submit();
  });
  </script>

</body>

</html>