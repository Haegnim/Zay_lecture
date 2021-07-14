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
  <title>Zay Shop || Join</title>
</head>

<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php";
    ?>

    <section class="join">
      <div class="center">
        <div class="form_box">
          <form action="/zay/php/insert_mem.php" method="post" name="mem_form" enctype="multipart/form-data"
            class="mem_form com_form">
            <p>
              <label for="mem_id">아이디</label><input type="text" name="mem_id" id="mem_id" placeholder="아이디">
              <button type="button">중복체크</button>
            </p>
            <!-- 아이디 중복체크 -->
            <p>
              <label>비밀번호</label><input type="new-password" name="mem_pass" autocomplete="off" placeholder="비밀번호">
            </p>
            <p>
              <label>비밀번호 확인</label><input type="new-password" name="mem_pass_check" placeholder="비밀번호 확인">
            </p>
            <p>
              <label>프로필 사진</label><input type="file" name="mem_pf">
            </p>
            <p>
              <label>이름</label><input type="text" name="mem_name" placeholder="이름">
            </p>
            <p>
              <label>이메일</label><input type="text" name="mem_email" placeholder="이메일">
            </p>
            <div class="submit_info">
              <button type="button" id="submit_btn">회원가입</button>
              <span>회원이신가요? <a href="/zay/pages/join/login_form.php">click</a></span>
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
  const submitBtn = document.querySelector("#submit_btn");

  submitBtn.addEventListener('click', function() {
    if (!document.mem_form.mem_id.value) {
      alert('아이디를 입력해 주세요');
      document.mem_form.mem_id.focus();
      return;
    }
    if (!document.mem_form.mem_pass.value) {
      alert('비밀번호를 입력해 주세요');
      document.mem_form.mem_pass.focus();
      return;
    }
    if (!document.mem_form.mem_pass_check.value) {
      alert('비밀번호 확인을 입력해 주세요');
      document.mem_form.mem_pass_check.focus();
      return;
    }
    if (document.mem_form.mem_pass.value != document.mem_form.mem_pass_check.value) {
      alert('비밀번호와 비밀번호 확인이 다릅니다.');
      document.mem_form.mem_pass_check.focus();
      return;
    }

    const extensions = ['jpg', 'png', 'jpeg', 'PNG', 'JPG', 'JPEG'];
    const imgValue = document.mem_form.mem_pf.value;
    const imgExt = imgValue.split('.');
    // console.log(imgExt[1]);

    if (!extensions.includes(imgExt[1])) {
      alert('jpg, png, jpeg 형식의 이미지를 올려주세요.');
      return;
    }
    if (!document.mem_form.mem_name.value) {
      alert('이름을 입력해 주세요');
      document.mem_form.mem_name.focus();
      return;
    }
    if (!document.mem_form.mem_email.value) {
      alert('이메일을 입력해 주세요');
      document.mem_form.mem_email.focus();
      return;
    }

    document.mem_form.submit();
  });
  </script>
</body>

</html>