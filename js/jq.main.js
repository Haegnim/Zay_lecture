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

  //index page description text cut
  const cuttignTxt = function () {
    for (let i = 0; i < $(".featured_item").length; i++) {
      const textLength = $(".featured_item").eq(i).find($("p.desc")).text();
      // console.log(textLength);
      $(".featured_item")
        .eq(i)
        .find("p.desc")
        .text(textLength.substr(0, 60) + "...");
    }
  };
  cuttignTxt();

  // index page items load more
  const loadMore = function () {
    $(".featured_item").hide();
    $(".featured_item").slice(0, 3).show();

    $(".load_more button").click(function () {
      $(".featured_item:hidden").slice(0, 3).show();

      if ($(".featured_item:hidden").length == 0) {
        $(".load_more").html(`<a href="#">전체보기</a>`);
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
  //resize event
  $(window).resize(function () {
    ItemHeightFit();
  });
});
