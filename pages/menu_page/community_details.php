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
        <?php
        $detail_idx = $_GET['detail_idx'];
        include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
        $sql = "SELECT * FROM ZAY_comm WHERE ZAY_comm_idx=$detail_idx";

        $detail_result = mysqli_query($dbConn, $sql);
        $detail_row = mysqli_fetch_array($detail_result);

        $detail_id = $detail_row['ZAY_comm_id'];
        $detail_tit = $detail_row['ZAY_comm_tit'];
        $detail_con = $detail_row['ZAY_comm_con'];
        $detail_reg = $detail_row['ZAY_comm_reg'];
        $detail_hit = $detail_row['ZAY_comm_hit'];

        $new_hit = $detail_hit +1;
        $sql1="UPDATE ZAY_comm SET ZAY_comm_hit=$new_hit WHERE ZAY_comm_idx=$detail_idx";

        mysqli_query($dbConn, $sql1);
        ?>
        <div class="tit_box">
          <h2><?=$detail_tit?></h2>
          <p><?=$detail_con?></p>
        </div>
        <div class="write comm_center">
          <h4>Posted By <?=$detail_id?> / <?=$detail_reg?> /<?=$new_hit?> </h4>
          <form class="write_form"
            action="/zay/php/community_update.php?detail_idx=<?=$detail_idx?>&detail_writer=<?=$detail_id?>"
            name="write_form" method="post">
            <div class="write_tit">
              <label for="write_input">제목</label>
              <input type="text" id="write_input" name="write_input" value="<?=$detail_tit?>">
            </div>
            <div class="write_con">
              <textarea name="write_con"><?=$detail_con?></textarea>
            </div>
          </form>
          <div class="write_btn">
            <?php if(!$userid || $userid != $detail_id){ ?>
            <a href="/zay/pages/menu_page/community_form.php">돌아가기</a>
            <?php }else{ ?>
            <a href="/zay/pages/menu_page/community_form.php">돌아가기</a>
            <a href="javascript:;" id="update">수정</a>
            <a href="/zay/php/community_delete.php?detail_idx=<?=$detail_idx?>&detail_writer=<?=$detail_id?>">삭제</a>
            <?php }?>
          </div>
        </div>
      </div>
    </section>
    <section class="comments">
      <div class="center">
        <div class="comments_tit">
          <?php
          $sql2 = "SELECT * FROM ZAY_reply WHERE ZAY_comm_reply_idx=$detail_idx ORDER BY ZAY_reply_idx DESC";
          $reply_result=mysqli_query($dbConn, $sql2);
          $reply_total = mysqli_num_rows($reply_result);
          ?>
          <span>답글</span>
          <span><em><?=$reply_total?></em><em>Replies</em></span>
        </div>
        <!-- start comment_insert -->
        <div class="comment_insert">
          <form action="/zay/php/reply_insert.php?detail_idx=<?=$detail_idx?>" method="post" name="reply_form">
            <textarea type="text" placeholder="답글을 입력해 주세요." name="reply_txt"></textarea>
            <?php if(!$userid){ ?>
            <button type="button" onclick="plzLogin()">입력</button>
            <?php }else{ ?>
            <button type="button" onclick="insertTxt()">입력</button>
            <?php } ?>
          </form>
        </div>
        <!-- end of comment_insert -->
        <!-- start comment_contents -->
        <div class="comment_contents">
          <?php
          while($reply_row = mysqli_fetch_array($reply_result)){
            $reply_idx = $reply_row['ZAY_reply_idx'];
            $reply_writer = $reply_row['ZAY_reply_id'];
            $reply_reg = $reply_row['ZAY_reply_reg'];
            $reply_con = $reply_row['ZAY_reply_con'];
          ?>
          <!-- loop start -->
          <div class="loop_contents">
            <div class="comments_tit">
              <span><?=$reply_writer?></span>
              <span><?=$reply_reg?></span>
            </div>
            <form action="#" method="post">
              <div class="comment_text">
                <em class="rep_txt"><?=$reply_con?></em>
                <textarea class="rep_update_txt" name="rep_update_txt">아니지만</textarea>
                <span class="comment_btns">
                  <button type="submit" class="rep_send">보내기</button>
                  <button type="button" class="rep_update">수정</button>
                  <button type="button" class="rep_delete" value="">삭제</button>
                  <input type="hidden" value="">
                </span>
              </div>
            </form>
          </div>
          <!-- loop end -->
          <?php }?>
        </div>
        <!-- end of comment_contents -->
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
  // const upBtn = document.querySelector('#update');
  // upBtn.addEventListener("click", function() {
  //   document.write_form.submit();
  // });

  function backGo() {
    history.go(-1);
  };

  function plzLogin() {
    alert('로그인 후 이용해 주세요.');
    return false;
  };

  function insertTxt() {
    if (!document.reply_form.reply_txt.value) {
      alert('댓글을 입력해 주세요.');
      return;
    }
    document.reply_form.submit();

  }
  </script>
</body>

</html>