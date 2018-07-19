$(document).ready(function() {



  function strafeLeft() {
    $("#strafe").animate({left: "-=150"}, 10000, "swing", strafeRight);
  }

  function strafeRight() {
    $("#strafe").animate({left: "+=150"}, 10000, "swing", strafeLeft);
  }

  strafeRight();


});
