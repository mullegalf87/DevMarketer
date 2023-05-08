append_square();

function append_square(){
  var $grid = $('.container-square');
  var divWidth = $(".border")[0].offsetWidth;
  var divHeight = $(".border")[0].offsetHeight;
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  var numDivsX = Math.ceil(windowWidth / divWidth);
  var numDivsY = Math.ceil(windowHeight / divHeight);
  for (var i = 0; i < numDivsX * numDivsY; i++) {
    $grid.append('<div class="border open-modal" modal-body="accordion"></div>');
  }
}

$(".border").on("click", function(event){
  var top = event.pageY;
  var left = event.pageX;
  $('.modal').data("top", top);
  $('.modal').data("left", left);
});

$(".open-modal").on("click", function(event){
  var modal_body=$(this).attr("modal-body");
  open_modal(modal_body);
});

function open_modal(modal_body){
  $('.modal').modal('show');
  $(".custom-body").addClass("d-none");
  $("#body-"+modal_body).removeClass("d-none");
}

function get_element_before_append_element(choose, from){
  var top=$('.modal').data("top")-53;
  var left=$('.modal').data("left")-53;
  var sizetoken=choose.parent().find("input").val();
  var width=($(".border").width()*sizetoken)+"px";
  var height=($(".border").height()*sizetoken)+"px";
  var src=choose.find("img").attr("src");
  var src=from=="token" ? choose.find("img").attr("src"):choose.attr("src");
  var idelement=choose.attr("idelement");
  var object=[{src:src, idelement:idelement, width:width, height:height, top:top, left:left}];
  return object;
}

$(document).on("click", ".token-choose", function(e){
  var object=get_element_before_append_element($(this), "token");
  append_element_token(object);
  $(".draggable").draggableTouch();
  $('.modal').modal('hide');
  remove_token();
});

$(document).on("click", ".btn-operator", function(e) {
  var $input = $(this).parent().find("input");
  var quantity = parseInt($input.val());
  if (quantity >= 1) {
    var operator = $(this).text();
    if (operator === "-") {
      quantity = Math.max(quantity - 1, 1);
    } else if (operator === "+") {
      quantity += 1;
    }
    $input.val(quantity);
  }
});

$(document).on("click", ".song-choose", function(e){
  var object=get_element_before_append_element($(this), "song");
  append_element_song(object);
  $(".draggable").draggableTouch();
  $('.modal').modal('hide');
  remove_token();
});

function append_background_effect(object){
  $(object[0].whereappend).css("background-image","url("+object[0].src+")").attr("idelement",object[0].idelement).addClass("element-to-save-game");
}

function append_element_token(object){
  var img=$("<img>")
  .attr({"src":object[0].src, "idelement":object[0].idelement})
  .addClass("card-img-top draggable position-absolute remove-token element-to-save-game z-2")
  .css({"width":object[0].width, "height":object[0].height, "top":object[0].top, "left":object[0].left});
  $(".border").first().before(img);
}

function append_element_song(object){
  var audio=$("<div>")
  .addClass("card p-3 card-img-top draggable position-absolute remove-token element-to-save-game z-2")
  .attr("idelement",object[0].idelement)
  .css({"width":"auto", "height":"auto", "top":object[0].top, "left":object[0].left})
  .append(
    $("<i>")
    .addClass("fa fa-window-minimize position-absolute reduce-audio")
    .css({"top":"-2px", "right":"8px"})
    )
  .append(
    $("<audio controls autoplay loop>")
    .append($("<source>")
      .attr({"src":object[0].src, "type":"audio/mpeg"})
      )
    )
  $(".border").first().before(audio);
  $(".reduce-audio").click();
}

function remove_token(){
  var touchtime = 0;
  $(".remove-token").on("click touchend", function(e){
    if(touchtime == 0) {
      touchtime = new Date().getTime();
    } else {
      if(((new Date().getTime())-touchtime) < 500) {
        $(this).remove();
        touchtime = 0;
      } else {
        touchtime = new Date().getTime();
      }
    }
    e.preventDefault();
  });
}

$(".clear-song").on("click", function(event){
  $(".container-square").find("audio").parent().remove();
});

$(".clear_all").on("click", function(event){
  clear_all();
  $(".clear-draw").click();
});

function clear_all(){
  $("body").css({"background-image":"url()","background-size":""}).css({"width":"100%", "height":"100%"});
  $(".container-square").css("background-image","url()");
  $(".draggable").remove();
  $(".element-to-save-game").removeClass("element-to-save-game");
  $(".div-audio-icon").hide();
}

$(document).on("click", ".reduce-audio", function(event){
  $(this).parent().hide();
  $(".pause-audio").parent().parent().show();
});

$(document).on("click", ".pause-audio", function(event){
  $("audio")[0].pause();
  $(this).removeClass("pause-audio").addClass("play-audio");
  $(this).find("i").removeClass().addClass("fa fa-play");
  // $(this).parent().parent().hide();
  // $(".reduce-audio").parent().show();
});

$(document).on("click", ".play-audio", function(event){
  $("audio")[0].play();
  $(this).removeClass("play-audio").addClass("pause-audio");
  $(this).find("i").removeClass().addClass("fa fa-pause");
  // $(this).parent().parent().hide();
  // $(".reduce-audio").parent().show();
});

$(document).on("click", ".save-game", function(e){
  var id_game=$(this).attr("id_game");
  var obj_element=[];
  if (id_game!=undefined) {
    $(".element-to-save-game").each(function(index){
      var idelement=$(this).attr("idelement");
      var body_width=$("body").css("width");
      var body_height=$("body").css("height");
      var width=$(this).css("width");
      var height=$(this).css("height");
      var css_top=$(this).css("top");
      var css_left=$(this).css("left");
      obj_element.push({"id_game":id_game, "id_element":idelement, "body_width":body_width, "body_height":body_height, "width":width, "height":height, "css_top":css_top, "css_left":css_left})
    });
    if (obj_element.length==0) {
      obj_element.push({"id_game":id_game});
    }
    save_game_detail(obj_element);
  }else{
    open_modal("user");
    $(".accordion-button[category=newgame]").click();
  }
});

function save_game_detail(obj_element){
  $.get("save_game_detail_dnd",{obj_element},
    function(data){
      console.log(data);
    });
}

function check_form(id){
  $("#"+id).find(".check_form").each(function(index){
    if ($(this).val()=="") {
      $(this).css("border","1px solid red");
    }else{
      $(this).css("border","1px solid green").addClass("check_form_ok");
    }
  });
  var count_check_form=$("#"+id).find(".check_form").not(".d-none").length;
  var count_check_form_ok=$(".check_form_ok").not(".d-none").length;
  var result_check_form=count_check_form == count_check_form_ok ? true : false;
  return result_check_form;
}

function clear_after_form(tag, idform){
  $("#"+idform).find(".check_form").val("").css("border", "var(--bs-border-width) solid var(--bs-border-color)");
  $(".append_image_clear").remove();
  $(".check_form_ok").removeClass("check_form_ok");
  tag.text("Saved!");
  setTimeout(function(e){
    tag.text("Save");
  },3000);
}
