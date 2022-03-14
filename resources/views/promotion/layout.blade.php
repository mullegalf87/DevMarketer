<style type="text/css">
  /* start General Styles*/
  [onClick] {
  cursor:pointer;
  }

  .flex-container{
    margin: 0 auto;
    display: -webkit-flex;  
    display: flex;
  }
  .flex-container .column{
    padding: 10px;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
  }

  .dashed-edit{
    border: 2px dashed #FF0000;
  }

  [contenteditable]:focus {
    outline: 0px solid transparent;
  }
  /*end General Styles*/

  /* Spinner */
  .hide_loading_spinner{

    display: none !important;

  }

  #cover-spin {
    position:fixed;
    width:100%;
    left:0;right:0;top:0;bottom:0;
    background-color: rgba(255,255,255,0.7);
    z-index:9999;
    display:none;
  }

  @-webkit-keyframes spin {
    from {-webkit-transform:rotate(0deg);}
    to {-webkit-transform:rotate(360deg);}
  }

  @keyframes spin {
    from {transform:rotate(0deg);}
    to {transform:rotate(360deg);}
  }

  #cover-spin::after {
    content:'';
    display:block;
    position:fixed;
    left:46%;top:45%;
    width:40px;height:40px;
    border-style:solid;
    border-color:red;
    border-top-color:transparent;
    border-width: 4px;
    border-radius:50%;
    -webkit-animation: spin .8s linear infinite;
    animation: spin .8s linear infinite;
  }

  .image-general-size{

    background-repeat: no-repeat;
    background-size: cover;
    /*display: flex;*/
    object-fit: cover;
    /*z-index: 1;*/

  }

</style>

<div id="cover-spin" class="hide_loading_spinner"></div>

<script type="text/javascript">

  var id_layout=window.location.href.split("layout_")[1];
  // var token_layout=window.location.href.split("?layout=")[1];

  var token_layout = window.location.href.substring(
    window.location.href.indexOf("=") + 1, 
    window.location.href.lastIndexOf("#")
    );

  start_function_layout();

  function start_function_layout(){

    get_edited_element();

    $('#cover-spin').show(0)

  }

  function remove_edit_element_token_user(carousel){
    //con split undefined con indexof ""
    if (token_layout!="") {

      $(".dashed-edit").removeClass("dashed-edit");

      $(".rightCircle").removeClass("rightCircle");

      $(".text_edit").removeClass("text_edit");

      $(".image_edit").removeClass("image_edit");

    }

  }

  function get_edited_element(){

    remove_edit_element_token_user();

    $("#cover-spin").removeClass("hide_loading_spinner");

    //attribuisce gli id alle section per i colori
    var num_section;

    $(".custom_color").each(function(index){

      num_section=index+1;

      $(this).attr("id","section_color_"+num_section);

    });

    //attribuisce i testi dei div dentro il db
    var object_text_edit={};

    $(".text_edit").each(function(index){

      var id_section_edit_text=$(this)[0].id;

      var value_section_edit_text=$("#"+$(this)[0].id).text();

      object_text_edit[id_section_edit_text] = value_section_edit_text;

    });

    $.get("get_edited_element_promotion",{id_layout:id_layout, token_layout:token_layout, num_section:num_section, object_text_edit:$.trim(JSON.stringify(object_text_edit).replaceAll('"',"").replaceAll('{',"").replaceAll('}',"").replaceAll(',',"").replace(/\s+/g, ' ').replace(/\r?\n|\r/g, " "))},
      function(data){

        var res=jQuery.parseJSON(data);

        //si loggato no token
        if (res.response=="1_0") {

          $("#type_image_0").removeClass("d-none");

          $('body').click(function(evt){ 

            if (~evt.target.className.indexOf("block_edit_text")){

            }else{

              edit_text_element();

            }

          });
          
        //si loggato si token
        } else if(res.response=="1_1"){

          $("#type_image_"+res.get_edited_element[0].carousel).removeClass("d-none");
          $(".image-2").hide();

          $(".dashed-edit").removeClass("dashed-edit text_edit image_edit block_edit_text");
          
        //no loggato si token
        } else if(res.response=="0_1"){

          $("#type_image_"+res.get_edited_element[0].carousel).removeClass("d-none");

          $(".dashed-edit").removeClass("dashed-edit text_edit image_edit block_edit_text");

        }

        if (res.get_edited_element==null) {

          window.location.replace("404");

        }else if(res.get_edited_element.length!=0){

          // section color
          if (res.get_edited_element[0].section_color!="") {

            var num_section_id;
            var id_section_color;
            var value_section_color;

            for (var i = 0; i < res.get_edited_element[0].section_color.split(",").length; i++) {

              num_section_id=i+1;

              id_section_color=res.get_edited_element[0].section_color.split(",")[i].split(":")[0];
              value_section_color=res.get_edited_element[0].section_color.split(",")[i].split(":")[1];

              $("#layout_"+res.get_edited_element[0].id_layout+" #"+id_section_color).css("background-color",value_section_color);

            }

          }

          // section text
          var id_section_edit;
          var value_section_edit;

          for (var i = 0; i < res.get_edited_element[0].section_edit_text.split("sectionedit_").length; i++) {

            id_section_edit=res.get_edited_element[0].section_edit_text.split("sectionedit_")[i].split(":")[0];

            value_section_edit=res.get_edited_element[0].section_edit_text.split("sectionedit_")[i].split(":")[1];

            $("#layout_"+res.get_edited_element[0].id_layout+" #sectionedit_"+id_section_edit).html($.trim(value_section_edit).replace(/\\n/g, ''));

          }

          // section image
          var id_user=res.get_edited_element[0].id_user;

          var array_section_image=res.get_edited_element[0].section_image.split(",");

          var new_array_section_image = array_section_image.filter(function(v){return v!==''});
          
          for (var i = 0; i < new_array_section_image.length; i++) {

            if (new_array_section_image[i].split("/")[0]=="image-2") {

              $('#layout_'+res.get_edited_element[0].id_layout+' .image-2-reply').css('background-image', 'url("promotion_repo/img_layout/'+id_user+'/'+res.get_edited_element[0].id_layout+"_token_"+res.get_edited_element[0].token_layout+'/'+new_array_section_image[i]+'?refresh=<?php echo rand(1,999); ?>")');

            }

            $('#layout_'+res.get_edited_element[0].id_layout+' .'+new_array_section_image[i].split("/")[0]).css('background-image', 'url("promotion_repo/img_layout/'+id_user+'/'+res.get_edited_element[0].id_layout+"_token_"+res.get_edited_element[0].token_layout+'/'+new_array_section_image[i]+'?refresh=<?php echo rand(1,999); ?>")');

            // $('#layout_'+res.get_edited_element[0].id_layout+' .'+new_array_section_image[i].split("/")[0]).attr('src', 'promotion_repo/img_layout/'+id_user+'/'+res.get_edited_element[0].id_layout+"_token_"+res.get_edited_element[0].token_layout+'/'+new_array_section_image[i]+'?refresh=<?php echo rand(1,999); ?>');

            $('#layout_'+res.get_edited_element[0].id_layout+' .'+new_array_section_image[i].split("/")[0]).attr("path_image",new_array_section_image[i]);

          }

          //attribuisce i size alle immagini che poi dovranno contenere
          set_size_image();

          // section social
          $('#layout_'+res.get_edited_element[0].id_layout+' .facebook').attr("href","https://www.facebook.com/"+res.get_edited_element[0].facebook);

          $('#layout_'+res.get_edited_element[0].id_layout+' .pinterest').attr("href","https://www.pinterest.it/"+res.get_edited_element[0].pinterest);
          
          $('#layout_'+res.get_edited_element[0].id_layout+' .instagram').attr("href","https://www.instagram.com/"+res.get_edited_element[0].instagram);

        }

         $("#cover-spin").addClass("hide_loading_spinner");

      });

  }

  function set_size_image(){

    $(".image-general-size").each(function(index){

      $("."+$(this)[0].classList[0]).css("height",$(this).height()+"px");

      $("."+$(this)[0].classList[0]).css("width",$(this).width()+"px");

      if ($("."+$(this)[0].classList[0]).css('background-image') !== 'none') {

        $("."+$(this)[0].classList[0]).attr("src","");

        var text_img_tag=$($("img."+$(this)[0].classList[0])[0]).prop('outerHTML');

        if (text_img_tag!=undefined) {

          text_img_tag=text_img_tag.replace('<img','<div').replace('">','"></div>');

          console.log(text_img_tag);

          $("."+$(this)[0].classList[0]).replaceWith(text_img_tag);

        }

      }

    });

  }

  $(".image_edit").click(function(){
  
    var class_image=$(this)[0].classList[0];

    var num_id_image_edit=class_image.split("-")[1];

    $('#layout_'+id_layout+' .verborgen_file_'+num_id_image_edit).click();
    
    previewFile(num_id_image_edit, class_image, id_layout);

  });

  function previewFile(num_id_image_edit, class_image, id_layout){

    $('#layout_'+id_layout+' .verborgen_file_'+num_id_image_edit).one('change',function (data) {

      var file = this.files[0];
      var reader = new FileReader();
      reader.onloadend = function () {

        $("#cover-spin").removeClass("hide_loading_spinner");

        $('#layout_'+id_layout+' .'+class_image).css('background-image', 'url("' + reader.result + '")');
          // $('#layout_'+id_layout+' .'+class_image).attr('src', reader.result);

          set_size_image();

          $("."+class_image).attr("src","");

        if (class_image=="image-2") {

          $('#layout_'+id_layout+' .image-2-reply').css('background-image', 'url("' + reader.result + '")');

        }

      }

      if (file) {

        reader.readAsDataURL(file);

        new ImageCompressor(file, {
          quality: 0.6,
          success(result) {

            $.get("get_token_layout_for_image_promotion",{id_layout:id_layout},
              function(data){

                var token_layout=jQuery.parseJSON(data);

                var id_user="@if( auth()->guard('users_promotion')->check() ){{ auth()->guard('users_promotion')->user()->id}}@endif";
                var ext_file=result.name.split(".")[1];
                const formData = new FormData();
                formData.append('file', result, result.name);
                formData.append('id_user', id_user);
                formData.append('id_layout', id_layout+"_token_"+token_layout);
                formData.append('class_image', class_image);
                formData.append('num_image', num_id_image_edit);
                formData.append('ext_file', ext_file);

                $('#layout_'+id_layout+' .'+class_image).attr("path_image",class_image+"/1."+ext_file);

                setTimeout(function(){
                  $.ajax({
                    url : "promotion_repo/upload_img_layout.php",
                    type: 'POST',
                    data : formData,
                    processData: false, 
                    contentType: false,  
                    cache:false,
                    success : function(folder) {

                      var array_image_edited=[];

                      $("#layout_"+id_layout+" .image_edit").each(function(data){

                        array_image_edited.push($(this).attr("path_image"));

                      });

                      $.get("edit_image_promotion",{id_layout:id_layout, section_image:array_image_edited.toString()},
                        function(data){
                          console.log(data);
                          edit_text_element();

                          $("#cover-spin").addClass("hide_loading_spinner");
                        });

                    },
                    error: function (data, textStatus, errorThrown) {

                    },
                  });
                },2000);

              });

          },
          error(e) {
            console.log(e.message);
          },
        });

      } else {
        // preview.src = "";
      }

    });

  }
  
  $( document ).ready(function() {

    $(".text_edit").attr('contenteditable', 'true');

  });

  var section_edit="";

  $('.text_edit').click(function(event) { 

    $(this).toggleClass('active');

    event.stopPropagation();

    section_edit=$(this).attr("id").split("sectionedit_")[1];

  }); 

  function edit_text_element(){

    $("#cover-spin").removeClass("hide_loading_spinner");

    var object_text_edit={};

    $(".text_edit").each(function(index){

      var id_section_edit_text=$(this)[0].id;

      var value_section_edit_text=$("#"+$(this)[0].id).text();

      object_text_edit[id_section_edit_text] = value_section_edit_text;

    });

    $.get("edit_element_promotion",{id_layout:id_layout, object_text_edit:$.trim(JSON.stringify(object_text_edit).replaceAll('"',"").replaceAll('{',"").replaceAll('}',"").replaceAll(',',"").replace(/\s+/g, ' ').replace(/\r?\n|\r/g, " "))},
      function(data){
        console.log(data);

        $("#cover-spin").addClass("hide_loading_spinner");

      });

  }

  function register_user(){

    $("#cover-spin").removeClass("hide_loading_spinner");

    var input_name=$("#input_name").val();
    var input_lastname=$("#input_lastname").val();
    var input_cellular=$("#input_cellular").val();
    var input_email=$("#input_email").val();
    var token_user=window.location.href.split("#")[1];

    console.log(token_user)

    if (token_user!="") {

      $.get("register_user_promotion",{token_layout:token_layout, input_name:input_name, input_lastname:input_lastname, input_cellular:input_cellular, input_email:input_email, token_user:token_user},
      function(data){

        var res=jQuery.parseJSON(data);

        if (res=="exist") {

          alert("Sei già registrato!");

        }else{

          alert("Inviato!");

        }

        $("input").each(function(data){

          $(this).val("");

        });

        // fai partire il send_email_utente software ajax e poi 
        $("#cover-spin").addClass("hide_loading_spinner");

      });

    }else{

      $("#cover-spin").addClass("hide_loading_spinner");

      $("input").each(function(data){

        $(this).val("");

      });

      // fai partire il send_email_utente software ajax e poi 
      $("#cover-spin").addClass("hide_loading_spinner");

    }

  }

  function scroll_page_tag(class_tag){

    $('html, body').animate({
      scrollTop: $("."+class_tag).offset().top
    }, 2000);

  }
 
</script>