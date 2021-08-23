$(function () {
  let fileTarget = $(".upload_hidden");

  fileTarget.on("change", function () {
    let filename;
    if (window.FileReader) {
      filename = $(this)[0].files[0].name;
    } else {
      filename = $(this).val().split("/").pop().split("\\").pop();
    }

    $(this).siblings(".upload_name").val(filename);
  });

  $("#pro_img_1").on("change", img1FileSelect);
  $("#pro_img_2").on("change", img2FileSelect);
});

const img1FileSelect = function (e) {
  const input = e.target;
  const reader = new FileReader();

  reader.onload = function () {
    const dataURL = reader.result;
    const output = document.querySelector("#img1");
    output.src = dataURL;
  };
  reader.readAsDataURL(input.files[0]);
};
const img2FileSelect = function (e) {
  const input = e.target;
  const reader = new FileReader();

  reader.onload = function () {
    const dataURL = reader.result;
    const output = document.querySelector("#img2");
    output.src = dataURL;
  };
  reader.readAsDataURL(input.files[0]);
};
