$(function () {
  $(".like, .unlike").click(function () {
    const selectId = $(this).attr("id");
    //alert(selectId); like_12. unlike_12
    const splitId = selectId.split("_");
    const likeUnlike = splitId[0];
    const postId = splitId[1];
    let type = 0;
    if (likeUnlike == "like") {
      type = 1;
    } else {
      type = 0;
    }

    $.ajax({
      url: "/zay/php/like_unlike.php",
      type: "post",
      data: { postId: postId, type: type },
      dataType: "json",
      success: function (data) {
        // console.log(data);
        const likes = data.likes;
        const unlikes = data.unlikes;

        $("#likes_" + postId).text(likes);
        $("#unlikes_" + postId).text(unlikes);
        // console.log(likes, unlikes);
        if (type == 1) {
          $("#like_" + postId).css({
            background: "#59ab6e",
            color: "#fff",
          });
          $("#unlike_" + postId).css({
            background: "#fff",
            color: "#555",
          });
        } else {
          $("#like_" + postId).css({
            background: "#fff",
            color: "#555",
          });
          $("#unlike_" + postId).css({
            background: "lightcoral",
            color: "#fff",
          });
        }
      },
    });
  });
});
