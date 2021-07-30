<?php
// $cart_img = $_POST['cart_img'];
// $cart_name = $_POST['cart_name'];
// $cart_desc = $_POST['cart_desc'];
// $cart_pri = $_POST['cart_pri'];
// echo $cart_img."".$cart_name."".$cart_desc."".$cart_pri;
session_start();
// session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST"){ //포스트 방식으로 데이터가 넘어올 경우
  if(isset($_POST['add_to_cart'])){//add_to_cart 네임 변수의 버튼을 눌러 넘어올 경우
    if(isset($_SESSION['cart'])){
      $addedItem = array_column($_SESSION['cart'], 'cart_name');
      //array_column: 주어진 배열(첫번째 파라미터)에서 특정 컬럼(두번째 파라미터) 값 반환 => https://zetawiki.com/wiki/PHP_array_column()
      if(in_array($_POST['cart_name'],$addedItem)){
        //in_array(a,b) : b배열에서 a요소가 있으면 true
        echo"
        <script>
        alert('이미 추가된 상품입니다.');
        history.go(-1);
        </script>
        ";
      }else{
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array(
          'cart_idx'=> $_POST['cart_idx'],
          'cart_img'=> $_POST['cart_img'],
          'cart_name'=> $_POST['cart_name'],
          'cart_desc'=> $_POST['cart_desc'],
          'cart_pri'=> $_POST['cart_pri'],
          'cart_quan'=> 1
          );
          echo"
          <script>
          alert('카드에 상품이 추가되었습니다.');
          history.go(-1);
          </script>
          ";
      }
        // var_dump($addedItem);
      // var_dump($_SESSION['cart']);

    }else{
      $_SESSION['cart'][0]=array(
      'cart_idx'=> $_POST['cart_idx'],
      'cart_img'=> $_POST['cart_img'],
      'cart_name'=> $_POST['cart_name'],
      'cart_desc'=> $_POST['cart_desc'],
      'cart_pri'=> $_POST['cart_pri'],
      'cart_quan'=> 1
      );
      // var_dump($_SESSION['cart']);
      echo"
      <script>
      alert('카드에 상품이 추가되었습니다.');
      history.go(-1);
      </script>
      ";
    }
  } // end check post add_to_cart name
  // start check remove_cart post data
  if(isset($_POST['remove_cart'])){
    foreach($_SESSION['cart'] as $key => $value){
      if($value['cart_name'] == $_POST['cart_remove']){//추가된 카트 상품 정보 중 상품 이름이 cart_remove 버튼 클릭 시 넘어오는 cart_remove의 post value와 같은 경우
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        echo"
      <script>
      alert('카드에 상품이 삭제되었습니다.');
      history.go(-1);
      </script>
      ";
      }
    }
  }
}
?>