<?php

session_start();

//세션 삭제
unset($_SESSION['userid']);
unset($_SESSION['userprofile']);

echo "
  <script>
    alert('로그아웃 되었습니다.');
    location.href='/zay/index.php';
  </script>
";

?>