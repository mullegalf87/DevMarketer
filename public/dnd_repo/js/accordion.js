$(document).on("click",".click-accordion",function(e){
  var check_open_accordion=$(this).attr("aria-expanded");
  var category=$(this).attr("category");
  close_other_accordion(category);
  var namecategory=$(this).attr("namecategory");
  if (check_open_accordion == "true") {
    get_element(category, namecategory);
  }
});

function get_element(category, namecategory){
  $.get("get_element_dnd",{category, namecategory},
    function(data){
      $("#append_"+category).html(data);
    });
}

$(document).on("click",".delete-element",function(e){
  var idelement=$(this).attr("idelement");
  var card=$(this).parents(".card");
  $.get("delete_element_dnd",{idelement},
    function(data){
      console.log(data);
      card.remove();
    });
});

$(document).on("click", ".background-effect-choose", function(e){
  var src=$(this).find("img").attr("src");
  var idelement=$(this).attr("idelement");
  var whereappend=$(this).attr("whereappend");
  var object=[{src:src, idelement:idelement, whereappend:whereappend}];
  append_background_effect(object);
});