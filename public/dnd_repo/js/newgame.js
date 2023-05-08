$(document).on("click",".save_newgame", function(e){
  var idform="newgame-form";
  var tag=$(this);
  tag.text("Wait...");
  var result_check_form=check_form("newgame-form");
  if (result_check_form){
    var name=$("#"+idform).find(".name").val();
    var data_newgame=[{"name":name}];
    save_data_newgame(data_newgame, tag, idform);
  }else{
    tag.text("Save");
  }
});

function save_data_newgame(data, tag, idform){
  var nameclass="Game";
  $.get("save_dnd",{data, nameclass},
    function(data){
      $(".save-game").attr("id_game",data);
      clear_after_form(tag, idform);
    });
}