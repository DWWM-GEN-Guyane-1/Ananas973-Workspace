$(document).ready(function() {
    $("#firstText").on({
      mouseover: function() {
         $(this).css({"border": "5px green dashed"});
      }
    });

    $("#thirdText").on({
        mouseover: function() {
           $(this).css({"border": "5px green dashed"});
        }
      });
 });