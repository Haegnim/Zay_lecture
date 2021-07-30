$(function () {
  //header stick to top and change style when scrollimg down
  const headerStick = function () {
    const hdTop = $("header").offset().top;
    // console.log(hdTop);
    // console.log(tbHeight);

    $(window).scroll(function () {
      const scroll = $(window).scrollTop();
      if (scroll >= hdTop) {
        $("header").css({ position: "fixed", top: 0, width: "100%" });
        $("header").addClass("stick");
      } else {
        $("header").css({ position: "relative" });
        $("header").removeClass("stick");
      }
    });
  };
  headerStick();

  //navigation slide down and up when mobile menu click
  const barsClick = function () {
    $(".mobile_menu").click(function () {
      $(this).toggleClass("on");
      if ($(this).hasClass("on")) {
        $(".menu_items").slideDown(250);
      } else {
        $(".menu_items").slideUp(250);
      }
    });
  };
  barsClick();

  //cart_list page description text cut
  const cuttignTxt = function (txtBox, txtCut, txtLen) {
    for (let i = 0; i < $(txtBox).length; i++) {
      const textLength = $(txtBox).eq(i).find($(txtCut)).text();
      // console.log(textLength);
      $(txtBox)
        .eq(i)
        .find(txtCut)
        .text(textLength.substr(0, txtLen) + "...");
    }
  };
  cuttignTxt(".featured_item", "p.desc", 60);
  cuttignTxt(".search_item", ".search_txt p", 120);
  let len = 0;
  $(window).resize(function () {
    const wWidth = $(window).width();
    if (wWidth < 850) {
      cuttignTxt(".search_item", ".search_txt p", 50);
    } else {
      cuttignTxt(".search_item", ".search_txt p", 120);
    }
  });

  // index page items load more
  const loadMore = function () {
    $(".featured_item").hide();
    $(".featured_item").slice(0, 3).show();

    $(".load_more button").click(function () {
      $(".featured_item:hidden").slice(0, 3).show();

      if ($(".featured_item:hidden").length == 0) {
        $(".load_more").html(
          `<a href="/zay/pages/menu_page/shop.php?key=all">전체보기</a>`
        );
      }
    });
  };
  loadMore();

  //featured item images height fit to resposive width
  const ItemHeightFit = function () {
    const featuredImgWidth = $(".featured_img").outerWidth();
    $(".featured_img").outerHeight(featuredImgWidth);
  };
  ItemHeightFit();

  //detail page image tabs function
  const detailTabs = function () {
    $(".detail_tab_btns span").click(function () {
      const index = $(this).index();

      $(".detail_img>img").hide();
      $(".detail_img>img").eq(index).show();
    });

    $(".detail_tab_btns span").eq(0).trigger("click");
  };

  detailTabs();

  //디테일 페이지 이미지에 맞춰 테두리 높이 변경
  const detailImgH = function () {
    const imgHeight = $(".detail_img_item").outerHeight();
    const btnsHeight = $(".detail_tab_btns").outerHeight();

    $(".detail_img").height(imgHeight + btnsHeight);
  };

  detailImgH();

  //resize event
  $(window).resize(function () {
    setTimeout(function () {
      //리사이즈, 스크롤 이벤트 시 쓰로틀링
      ItemHeightFit();
      detailImgH();
    }, 150);
  });

  // $("#price").click(function () {
  //   $(this).addClass("on");
  //   if ($(this).hasClass("on")) {
  //     $(this).html('높은가격순<i class="fa fa-chevron-up"></i>');
  //     location.href = "/zay/pages/menu_page/shop.php?key=up_price";
  //   } else {
  //     $(this).html('낮은가격순<i class="fa fa-chevron-down"></i>');
  //     location.href = "/zay/pages/menu_page/shop.php?key=down_price";
  //   }
  // });
});
