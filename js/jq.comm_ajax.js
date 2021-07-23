// $(function () {
//   const url = "/zay/data/ajax/community_ajax.php";

//   $.get(url, { page: 1 }, function (comm_data) {
//     $(".comm_row").append(comm_data);
//   });
// });

let current = 1;
const pgLength = $(".num").length;
//ajax를 통해 클릭한 넘버링 데이터 불러옴
function getPage(n) {
  const url = "/zay/data/ajax/community_ajax.php";
  $(".num").removeClass("active");
  $(".num")
    .eq(n - 1)
    .addClass("active");

  $.get(url, { page: n }, function (comm_data) {
    $(".comm_row").html(comm_data);
    current = n;
  });
}
//이전, 다음 버튼 클릭시 기능
function prevNext(pageNum, calcPage) {
  if (current == pageNum) {
    getPage(pageNum);
  } else {
    getPage(current + calcPage);
  }
}

$(".angle").click(function () {
  if ($(this).hasClass("prev")) {
    prevNext(1, -1);
  } else {
    prevNext(pgLength, 1);
  }
});
//처음으로 가기, 마지막으로 가기 버튼 클릭시 기능
$(".angle-double").click(function () {
  if ($(this).hasClass("first")) {
    getPage(1);
  } else {
    getPage(pgLength);
  }
});

$(".num").eq(0).trigger("click");
// $(".num").eq(0).addClass("active");
