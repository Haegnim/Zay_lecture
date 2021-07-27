<?php
session_start();
if(isset($_SESSION['userid'])){
  $userid = $_SESSION['userid'];
}else{
  $userid = "";
}

$rep_idx = $_GET['reply_idx'];
$rep_writer = $_GET['reply_id'];
$rep_update_txt = addslashes($_POST['rep_update_txt']);

if(!$userid || $userid != $rep_writer){
  echo"
  <script>
  alert('잘못된 접근입니다.');
  location.href='/zay/index.php';
  </script>
  ";
}else{
  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $sql = "UPDATE ZAY_reply SET ZAY_reply_con='{$rep_update_txt}' WHERE ZAY_reply_idx=$rep_idx";

  mysqli_query($dbConn, $sql);
    echo"
    <script>
    alert('수정이 완료되었습니다.');
    history.go(-1);
    </script>";
  };
?>