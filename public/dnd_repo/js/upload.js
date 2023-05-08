var elem_file=[];
$(function() {
  var imagesPreview = function(input, placeToInsertImagePreview) {
    elem_file=[];
    $(".append_image_clear").remove();
    if (input.files) {
      var checkfile=input.files[0].type.match("audio.*");
      var filesAmount = input.files.length;
      for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();
        if (!checkfile) {
          reader.onload = function(event) {
            $($.parseHTML('<img class="append_image_clear" style="width: 100%; height: 200px; object-fit: cover;margin-bottom: 3px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);  
          }
        }
        reader.readAsDataURL(input.files[i]);
        elem_file.push(input.files[i]);
      }
    }
  };
  $('#gallery-photo-add').on('change', function() {
    imagesPreview(this, 'div.gallery');
    var fileName = $(this).val();
    $(this).next('.custom-file-label').html(fileName);
  });
});

$(document).on("click",".save_upload", function(e){
  var idform="upload-form";
  var tag=$(this);
  tag.text("Wait...");
  var result_check_form=check_form(idform);
  if (result_check_form){
    var category=$("#"+idform).find(".category").val();
    var name=$("#"+idform).find(".name").val();
    var whereappend=$("#"+idform+" option:selected").attr("whereappend");
    const formData = new FormData();
    for (var i = 0; i < elem_file.length; i++) {
      formData.append('elem_file[]', elem_file[i]);
    }
    formData.append('category', category);
    $.ajax({
      url : "dnd_repo/php/add_elem.php",
      type: 'POST',
      data : formData,
      processData: false, 
      contentType: false,  
      cache:false,
      success : function(media) {
        var data_upload=[{"name":name, "category":category, "media":media, "whereappend":whereappend}];
        save_data_upload(data_upload, tag, idform);
      }
    });
  }else{
    tag.text("Save");
  }
});

function save_data_upload(data, tag, idform){
  var nameclass="Element";
  $.get("save_dnd",{data, nameclass},
    function(data){
      clear_after_form(tag, idform);
    });
}