$(function () {
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
});
