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
  <title>Zay Shop || Shop</title>
</head>

<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php";
    ?>

    <section class="pro_search">
      <div class="center">
        <div class="tit_box">
          <h2>Search Result</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br>mollit anim id est
            laborum.</p>
        </div>
        <div class="search_lists">

          <?php 
      $pro_search = $_GET['pro_search'];

      include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
      $sql = "SELECT * FROM zay_pro WHERE ZAY_pro_name LIKE '%$pro_search%' ORDER BY ZAY_pro_idx DESC";

      $result = mysqli_query($dbConn, $sql);
      $result_num = mysqli_num_rows($result);

      if(!$result_num){
        echo '
        <div class="search_item" style="padding:10px 20px; justify-content:center">
        검색 결과가 없습니다.
        </div>
        ';
      
      }else{
        
      
      // $pro_total = mysqli_num_rows($rev_result);
    
      while($result_row = mysqli_fetch_array($result)){
        $pro_idx = $result_row['ZAY_pro_idx'];
        $pro_name = $result_row['ZAY_pro_name'];
        $pro_pri = $result_row['ZAY_pro_pri'];
        $pro_desc = $result_row['ZAY_pro_desc'];
        $pro_img = $result_row['ZAY_pro_img_01'];
      
          ?>


          <!-- start loop search item  -->
          <div class="search_item">
            <span class="search_img">
              <a href="/zay/pages/details/pro_detail_form.php?pro_idx=<?=$pro_idx?>"><img
                  src="/zay/data/product_imgs/<?=$pro_img?>" alt=""></a>
            </span>
            <span class="search_txt">
              <h2><?=$pro_name?></h2>
              <p><?=$pro_desc?></p>
              <h3 class="show_hide">Total Price : <i class="fa fa-krw"></i><?=$pro_pri?> </h3>
            </span>
            <span class="search_pri">
              <h3><i class="fa fa-krw"></i><?=$pro_pri?></h3>
            </span>
            <span class="search_btns">
              <button>BUY NOW</button>
              <button>ADD TO CART</button>
            </span>
          </div>
          <!-- end of loop search item  -->
          <?php }} ?>
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