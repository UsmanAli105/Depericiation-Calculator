$(document).ready(function(){
  $("#pixel").click(function(){
    $("#colors").toggleClass("hidden");
  });
  $("#t-red").click(function(){
    $(".header").css("background-color","#ff4546")
    $(".Label-form").css("background-color","#ff4546")
    $(".form-items button").css("background-color","#ff4546")
    $(".footer").css("background-color","#ff4546")

  });

  $("#t-orange").click(function(){
    $(".header").css("background-color","#ee6f22")
    $(".Label-form").css("background-color","#ee6f22")
    $(".form-items button").css("background-color","#ee6f22")
    $(".footer").css("background-color","#ee6f22")

  });

  $("#t-green").click(function(){
    $(".header").css("background-color","#3fdf97")
    $(".Label-form").css("background-color","#3fdf97")
    $(".form-items button").css("background-color","#3fdf97")
    $(".footer").css("background-color","#3fdf97")

  });

  $("#t-blue").click(function(){
    $(".header").css("background-color","#56cfe1")
    $(".Label-form").css("background-color","#56cfe1")
    $(".form-items button").css("background-color","#56cfe1")
    $(".footer").css("background-color","#56cfe1")

  });

  $("#t-black").click(function(){
    $(".header").css("background-color","#000")
    $(".Label-form").css("background-color","#000")
    $(".form-items button").css("background-color","#000")
    $(".footer").css("background-color","#000")

  });
});
