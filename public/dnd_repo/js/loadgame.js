$(document).on("click", ".open-game", function(e){
  var id_game=$(this).attr("id_game");
  $(".save-game").attr("id_game",id_game);
  get_game(id_game);
});

function get_game(id_game){
  $.get("get_game_dnd",{id_game},
    function(data){
      append_game(data);
    });
}

function append_game(data){
  clear_all();
  $.each(data, function(key, value) {
    var src=`dnd_repo/${value['category']}/${value['media']}`;
    var idelement=value['id_element'];
    var body_width=value['body_width'];
    var body_height=value['body_height'];
    var width=value['width'];
    var height=value['height'];
    var top=value['css_top'];
    var left=value['css_left'];
    var whereappend=value['whereappend'];
    $("body").css({"width":body_width, "height":body_height, "background-repeat":"no-repeat", "background-size":body_width+" "+body_height});
    var object=[{src:src, idelement:idelement, body_width:body_width, body_height:body_height, width:width, height:height, top:top, left:left, whereappend:whereappend}];
    if (value["category"]>=1 && value["category"]<=2) {
      append_background_effect(object);
    }
    if (value["category"]>=3 && value["category"]<=5) {
      append_element_token(object);
    }
    if (value["category"]==6) {
      append_element_song(object);
    }
  });
  $(".draggable").draggableTouch();
  remove_token();
}

$(document).on("click", ".delete-game", function(e){
  var id_game=$(this).attr("id_game");
  $.get("delete_game_dnd",{id_game},
    function(data){
      console.log(data);
      load_game("loadgame");
    });
});