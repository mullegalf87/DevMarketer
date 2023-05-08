$(document).on("click",".click-out-accordion",function(e){
  var category=$(this).attr("category");
  close_other_accordion(category);
});

function close_other_accordion(category){
  $(".accordion-button").not("[category="+category+"]").addClass("collapsed").attr("aria-expanded",false);
  var target=$(".accordion-button[category="+category+"]").attr("data-bs-target");
  $(".accordion-collapse").not(target).removeClass("show");
}

$(document).on("click",".get-table",function(e){
  var category=$(this).attr("category");
  load_game(category);
});

function load_game(category){
  $.get("load_game_dnd",{category},
    function(data){
      $("#append_"+category).html(data);
    });
}

$(document).on("click",".logout",function(){
  window.location.replace("/logout_dnd");
});