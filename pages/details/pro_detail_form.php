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
  <title>Zay Shop || Detail</title>
</head>

<body>
  <div class="wrap">
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php";
    ?>

    <section class="pro_insert">
      <div class="center">
        <div class="detail_contents">

          <?php
          $pro_idx = $_GET{'pro_idx'};
          include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
          $sql = "SELECT * FROM zay_pro WHERE ZAY_pro_idx='{$pro_idx}'";
          $detail_result = mysqli_query($dbConn, $sql);
          $detail_row = mysqli_fetch_array($detail_result);

          $detail_idx = $detail_row['ZAY_pro_idx'];
          $detail_img_1=$detail_row['ZAY_pro_img_01'];
          $detail_img_2=$detail_row['ZAY_pro_img_02'];
          $detail_name=$detail_row['ZAY_pro_name'];
          $detail_pri=$detail_row['ZAY_pro_pri'];
          $detail_desc=$detail_row['ZAY_pro_desc'];
          $detail_color=$detail_row['ZAY_pro_color'];
          $detail_bran=$detail_row['ZAY_pro_bran'];
          $like_unlike_type = -1;
          //????????? ????????? ?????? ?????? ??????
          $status_query = "SELECT COUNT(*) AS cntStatus, ZAY_like_unlike_type FROM ZAY_like_unlike WHERE ZAY_like_unlike_userid='{$useridx}' AND ZAY_like_unlike_postid='{$detail_idx}'";

          $status_result = mysqli_query($dbConn, $status_query);
          $status_row = mysqli_fetch_array($status_result);
          $count_status = $status_row['cntStatus'];

          //$type = $status_row['ZAY_like_unlike_type'];
          //echo $type;

          //????????? include??? ???????????? ??????
          if($count_status > 0){
            $like_unlike_type=$status_row['ZAY_like_unlike_type'];
          }

          $like_query = "SELECT COUNT(*) cntLikes FROM ZAY_like_unlike WHERE ZAY_like_unlike_type=1 AND ZAY_like_unlike_postid='{$detail_idx}'";
          $like_result = mysqli_query($dbConn, $like_query);
          $like_row = mysqli_fetch_array($like_result);
          $total_likes = $like_row['cntLikes'];
          
          $unlike_query = "SELECT COUNT(*) cntUnlikes FROM ZAY_like_unlike WHERE ZAY_like_unlike_type=0 AND ZAY_like_unlike_postid='{$detail_idx}'";
          $unlike_result = mysqli_query($dbConn, $unlike_query);
          $unlike_row = mysqli_fetch_array($unlike_result);
          $total_unlikes = $unlike_row['cntUnlikes'];
          
          // echo $total_unlikes;

          $unlike_query = "";

        ?>
          <div class="detail_img">
            <img src="/zay/data/product_imgs/<?=$detail_img_1?>" alt="" class="detail_img_item">
            <img src="/zay/data/product_imgs/<?=$detail_img_2?>" alt="">
            <div class="detail_tab_btns">
              <span>
                <img src="/zay/data/product_imgs/<?=$detail_img_1?>" alt="">
              </span>
              <span>
                <img src="/zay/data/product_imgs/<?=$detail_img_2?>" alt="">
              </span>
            </div>
          </div>
          <div class="detail_txt">
            <div class="detail_wrap">
              <div class="detail_top">
                <h2><?=$detail_name?></h2>
                <p><span><i class="fa fa-krw"></i><?=$detail_pri?></span></p>
                <!-- detail_like -->
                <div class="detail_like">
                  <div class="like_unlike">
                    <div class="like_unlike">

                      <?php if(!$userid){ ?>
                      <span onclick="plzLogin()"> ????????? | <b><?=$total_likes?></b></span>
                      <span onclick="plzLogin()"> ???????????? | <b><?=$total_unlikes?></b></span>
                      <?php }else{ ?>

                      <span id="like_<?=$detail_idx?>" class="like" style="<?php if($like_unlike_type == 1){echo "background: #59ab6e;
        color: #fff;";} ?>">????????? |
                        <b id="likes_<?=$detail_idx?>"><?=$total_likes?></b>
                      </span>
                      <span id="unlike_<?=$detail_idx?>" class="unlike" style="<?php if($like_unlike_type == 0){echo "background: lightcoral;
        color: #fff;";} ?>">???????????? |
                        <b id="unlikes_<?=$detail_idx?>"><?=$total_unlikes?></b>
                      </span>
                      <?php } ?>
                      <!-- <span class="comments">20 <b>Comments</b></span> -->
                    </div>

                  </div>
                  <p class="gray">Brand : <?=$detail_bran?></p>
                  <div class="detail_desc">
                    <h3>????????????</h3>
                    <p><?=$detail_desc?></p>
                  </div>
                  <p class="gray">Available Color : <?=$detail_color?></p>
                </div>
                <!-- end of detail_like -->
              </div>
              <div class="size_quan">
                <div class="size">
                  <p>Size
                    <span>S</span>
                    <span>M</span>
                    <span>L</span>
                    <span>XL</span>
                  </p>
                  <p>Quantity
                    <span>-</span>
                    <b>1</b>
                    <span>+</span>
                  </p>
                </div>
                <form action="/zay/php/cart.php" method="post">
                  <div class="detail_btns">
                    <button type="button">BUY NOW</button>
                    <button type="submit" name="add_to_cart">ADD TO CART</button>
                  </div>
                  <input type="hidden" name="cart_idx" value="<?=$detail_idx?>">
                  <input type="hidden" name="cart_img" value="<?=$detail_img_1?>">
                  <input type="hidden" name="cart_name" value="<?=$detail_name?>">
                  <input type="hidden" name="cart_desc" value="<?=$detail_desc?>">
                  <input type="hidden" name="cart_pri" value="<?=$detail_pri?>">
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- end of detail-contents  -->
      </div>
    </section>
    <section class="comments">
      <div class="center">
        <div class="comments_tit">
          <span>?????????</span>
          <?php
          include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
          $sql_rev = "SELECT * FROM ZAY_REVIEW WHERE ZAY_pro_rev_con_idx=$pro_idx ORDER BY ZAY_pro_rev_idx DESC";

          $rev_result = mysqli_query($dbConn, $sql_rev);
          $rev_total = mysqli_num_rows($rev_result);
          ?>
          <span><em><?=$rev_total?></em><em> Comments</em></span>
        </div>

        <div class="comment_insert">
          <form action="/zay/php/comment_insert.php?pro_idx=<?=$pro_idx?>&pro_writer=<?=$userid?>" method="post"
            name="comment_form">
            <textarea type="text" placeholder="???????????? ????????? ?????????." name="comment_txt"></textarea>
            <?php if(!$userid){?>
            <button type="button" onclick="plzLogin()">??????</button>
            <?php }else{?>
            <button type="button" onclick="insertTxt()">??????</button>
            <?php }?>
          </form>
        </div>
        <div class="comment_contents">
          <?php
              while($rev_row = mysqli_fetch_array($rev_result)){
                $rev_idx = $rev_row['ZAY_pro_rev_idx'];
                $rev_writer = $rev_row['ZAY_pro_rev_id'];
                $rev_reg = $rev_row['ZAY_pro_rev_reg'];
                $rev_txt = $rev_row['ZAY_pro_rev_txt'];
                $rev_pro_idx = $rev_row['ZAY_pro_rev_con_idx'];
              ?>
          <!-- loop start -->
          <div class="loop_contents">
            <div class="comments_tit">
              <span><?=$rev_writer?></span>
              <span><?=$rev_reg?></span>
            </div>
            <form action="/zay/php/comment_update.php?pro_idx=<?=$rev_idx?>&pro_writer=<?=$rev_writer?>" method="post">
              <div class="comment_text">
                <em class="rev_txt"><?=$rev_txt?></em>
                <textarea class="rev_update_txt" name="rev_update_txt"><?=$rev_txt?></textarea>

                <?php if(!$userid){?>
                <input type="hidden">
                <?php }else{ 
                    if($userid != $rev_writer){
                    ?>
                <input type="hidden">
                <?php
                    } else {
                    ?>
                <span class="comment_btns">
                  <button type="submit" class="rev_send">?????????</button>
                  <button type="button" class="rev_update">??????</button>
                  <button type="button" class="rev_delete" value="<?=$rev_idx?>">??????</button>
                  <input type="hidden" value="<?=$rev_writer?>">
                </span>
                <?php
                    }
                  }
                  ?>
              </div>
            </form>
          </div>
          <!-- loop end -->
          <?php }?>
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
  <script src="/zay/js/jq.like.unlike.js"></script>
  <script>
  $(function() {
    $(".rev_update").click(function() {
      $(this).toggleClass("on");

      if ($(this).hasClass("on")) {
        $(this).text('????????????');
        $(this).prev(".rev_send").show();
        $(this).parent(".comment_btns").siblings(".rev_txt").hide();
        $(this).parent(".comment_btns").siblings(".rev_update_txt").show();
      } else {
        $(this).text('??????');
        $(this).prev(".rev_send").hide();
        $(this).parent(".comment_btns").siblings(".rev_txt").show();
        $(this).parent(".comment_btns").siblings(".rev_update_txt").hide();
      };
    });
    $(".rev_delete").click(function() {
      const confirmCheck = confirm('?????? ?????????????????????????');

      // console.log(confirmCheck);

      if (!confirmCheck) {
        return false;
      } else {
        const del_val = $(this).val();
        const pro_writer = $(this).next("input").val();
        location.href = `/zay/php/comment_delete.php?del_key=${del_val}&pro_writer=${pro_writer}`;
      }
    });
  });
  </script>
  <script>
  function plzLogin() {
    alert('????????? ??? ????????? ?????????.');
    return false;
  };

  function insertTxt() {
    if (!document.comment_form.comment_txt.value) {
      alert('???????????? ????????? ?????????.');
      return;
    }

    document.comment_form.submit();
  };
  </script>


</body>

</html>