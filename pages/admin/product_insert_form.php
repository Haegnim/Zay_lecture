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
  <title>Zay Shop || Admin</title>
  <style>
  input,
  textarea {
    border: 1px solid;
  }

  textarea {
    resize: both;
  }
  </style>
</head>

<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php";
    ?>

    <section class="pro_insert">
      <div class="center">
        <form action="/zay/php/product_insert.php" method="post" class="pro_insert_form" name="pro_insert_form">
          <p>
            <select name="pro_select" id="pro_select">
              <option value="watches">watches</option>
              <option value="shoes">shoes</option>
              <option value="accessories">accessories</option>
            </select>
          </p>
          <p>상품이름 : <input type="text" name="pro_insert_name"></p>
          <p>상품가격 : <input type="text" name="pro_insert_pri"></p>
          <p>상품브랜드 : <input type="text" name="pro_insert_bran"></p>
          <p>상품설명 : <textarea name="pro_insert_desc"></textarea></p>
          <p>상품색상 : <input type="text" name="pro_insert_color"></p>
          <p>상품사진1 : <input type="file" name="pro_insert_img1"></p>
          <p>상품사진2 : <input type="file" name="pro_insert_img2"></p>
          <button type="submit">상품입력</button>
        </form>
      </div>
    </section>
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/footer.php";
    ?>
  </div>
  <!-- jquery framework load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/zay/js/jq.main.js"></script>

</body>

</html>