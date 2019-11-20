$(document).ready(function() {
  $(".hide").on({
    mouseover: function() {
       $(this).hide();
    }
  });

  $("#thirdText").on({
      mouseover: function() {
         $(this).hide();
      }
    });
});
