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
  <title>Zay Shop || Login</title>
</head>

<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php";
    ?>

    <section class="join">
      <div class="center">
        <div class="form_box">
          <form action="/zay/php/login.php" name="login_form" method="post" name="mem_form" class="login_form com_form">
            <p class="login">
              <label for="mem_id">아이디</label><input type="text" name="login_id" id="mem_id" placeholder="아이디" ">
          </p>
          <p>
            <label>비밀번호</label><input type=" new-password" name="login_pass" autocomplete="off" placeholder="비밀번호">
            </p>

            <div class="submit_info">
              <button type="button" id="login_btn">로그인</button>
              <span>회원이 아니신가요? <a href="/zay/pages/join/join_form.php">click</a></span>
            </div>
          </form>
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