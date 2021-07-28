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
  <title>Zay Shop || shop</title>
</head>

<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php";
    include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";

    ?>
    <section class="shop">
      <div class="center">
        <div class="tit_box">
          <h2>Our Products</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br>mollit anim id est
            laborum.</p>
        </div>

        <div class="shop_btns">
          <div class="tabs">
            <a href="?key=all" class="active">전체보기</a>
            <a href="?key=watches">시계</a>
            <a href="?key=shoes">신발</a>
            <a href="?key=accessories">액세서리</a>
          </div>
          <div class="filters">
            <div class="filter_tabs">
              <select onchange="location.href=this.value">
                <option selected disabled value="">검색조건</option>
                <option value="?key=new">신상품</option>
                <option value="?key=like">좋아요순</option>
                <option value="?key=price-up">높은 가격순</option>
                <option value="?key=price-down">낮은 가격순</option>
              </select>
              <!-- <a href="?key=new">신상품</a>
              <a href="?key=price" id="price">낮은가격순<i class="fa fa-chevron-down"></i></a>
              <a href="?key=like">좋아요</a> -->

            </div>
            <div class="search">
              <input type="text" style="border:1px solid;">
              <i class="fa fa-search"></i>
            </div>
          </div>
        </div> <!-- end of shop_btns -->
        <!-- featured Product section -->
        <div class="featured_box">
          <?php 
    include $_SERVER["DOCUMENT_ROOT"]."/zay/data/sort/category_sort.php";
          ?>
        </div>
        <div class="load_more">
          <button type="button">더보기</button>
        </div>

        <!-- end of featured Product section -->
      </div>
    </section>
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/footer.php";
    ?>
  </div>
  <!-- jquery framework load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/zay/js/jq.main.js"></script>
  <script src="/zay/js/jq.like.unlike.js"></script>

  <script>
  const pathName = window.location.href;
  //console.log(pathName);
  const btns = document.querySelectorAll('.shop .shop_btns a');
  console.log(btns);
  const btnsArr = ['all', 'watches', 'shoes', 'accessories'];

  for (let i = 0; i < btnsArr.length; i++) {
    btns[i].classList.remove('active');
    if (pathName.includes(btnsArr[i])) {
      btns[i].classList.add('active');
    };
  };

  function plzLogin() {
    alert('로그인 후 이용해 주세요.');
    return false;
  };
  </script>
</body>

</html>