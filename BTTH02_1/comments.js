$(document).ready(function () {
  $("#commentForm").on("submit", function (event) {
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: "comments.php",
      method: "POST",
      data: formData,
      dataType: "JSON",
      success: function (response) {
        if (!response.error) {
          $("#commentForm")[0].reset();
          $("#commentId").val("0");
          $("#message").html(response.message);
          showComments(); // Gọi hàm để bổ sung bình luận mới
        } else if (response.error) {
          $("#message").html(response.message);
        }
      },
    });
  });

  // Hàm để hiển thị bình luận
  function showComments() {
    $.ajax({
      url: "show_comments.php",
      method: "POST",
      success: function (response) {
        $("#showComments").html(response);
      },
    });
  }
});
