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
  <title>Zay Shop || Community</title>
</head>

<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php";
    ?>

    <section class="community">
      <div class="center">
        <div class="tit_box">
          <h2>Community Board</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br>mollit anim id est
            laborum.</p>
        </div>
        <div class="comm_table">
          <ul class="comm_row">
            <li class="comm_tit">
              <span>번호</span>
              <span>아이디</span>
              <span>제목</span>
              <span>등록일</span>
              <span>조회수</span>
            </li>
            <li class="comm_con">
              <span>3</span>
              <span>marshall36</span>
              <span>사이트 오픈을 축하합니다.녬</span>
              <span>2021-07-21</span>
              <span>51</span>
            </li>
            <li class="comm_con">
              <span>4</span>
              <span>marshall36</span>
              <span>사이트 오픈을 축하합니다.</span>
              <span>2021-07-21</span>
              <span>51</span>
            </li>
          </ul>

        </div>
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