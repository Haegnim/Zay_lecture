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
          <h2>Search Results</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br>mollit anim id est
            laborum.</p>
        </div>
        <!--comm_table start-->
        <div class="comm_table comm_center">
          <ul class="comm_row">
            <li class="comm_tit">
              <span>번호</span>
              <span>아이디</span>
              <span>제목</span>
              <span>등록일</span>
              <span>조회수</span>
            </li>
            <?php
              $search_select = $_POST['qna_Search'];
              $search_input = $_POST['search_txt'];
              //echo $search_select, $search_input;

              include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
              if($search_select == 'id_Search'){
                $sql_search = "SELECT * FROM ZAY_comm WHERE ZAY_comm_id LIKE '%$search_input%' ORDER BY ZAY_comm_idx DESC";
              }else{
                $sql_search = "SELECT * FROM ZAY_comm WHERE ZAY_comm_tit LIKE '%$search_input%' ORDER BY ZAY_comm_idx DESC";
              };

              $comm_result = mysqli_query($dbConn, $sql_search);
              $comm_result_num = mysqli_num_rows($comm_result);
              if(!$comm_result_num){
                echo "
                <li>데이터가 존재하지 않습니다. 검색 조건 및 검색어를 확인해 주세요.</li>
                ";
              }else{
                
              
              // $comm_total = mysqli_num_rows($rev_result);
            
              while($comm_row = mysqli_fetch_array($comm_result)){
                $comm_idx = $comm_row['ZAY_comm_idx'];
                $comm_id = $comm_row['ZAY_comm_id'];
                $comm_tit = $comm_row['ZAY_comm_tit'];
                $comm_con = $comm_row['ZAY_comm_con'];
                $comm_reg = $comm_row['ZAY_comm_reg'];
                $comm_hit = $comm_row['ZAY_comm_hit'];
              ?>

            <li class="comm_con">
              <span><?=$comm_idx?></span>
              <span><?=$comm_id?></span>
              <span><a
                  href="/zay/pages/menu_page/community_details.php?detail_idx=<?=$comm_idx?>"><?=$comm_tit?></a></span>
              <span><?=$comm_reg?></span>
              <span><?=$comm_hit?></span>
            </li>
            <?php } }?>

          </ul>
        </div>
        <!-- End of comm_table -->

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