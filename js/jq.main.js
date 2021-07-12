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

  //light slider function code
  const slider = function () {
    $(".slider").lightSlider({
      item: 1,
      controls: true,
      prevHtml: "<i class='fa fa-angle-left'></i>",
      nextHtml: "<i class='fa fa-angle-right'></i>",
      speed: 400,
      auto: true,
      loop: true,
      pause: 4000,
      easing: "linear",
    });
  };
  slider();

  $(".mobile_menu").click(function () {
    $(this).toggleClass("on");
    if ($(this).hasClass("on")) {
      $(".menu_items").slideDown(250);
    } else {
      $(".menu_items").slideUp(250);
    }
  });
});
