<style>
    #shopmyart ::placeholder {
        color: #CDB4B4;
        opacity: 1; /* Firefox */
        text-align: center;
    }
</style>
<section class="container-fluid p-0" style="background-color: #dbd3d3;">
    <div class="d-flex flex-wrap">
        <div class="col-md-12 p-0 mt-5 mb-5">
            <h4 class="text-center" style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;">SEARCH & FILTER</h4>
        </div>
        <div class="d-flex flex-nowrap w-100">
            <h4 class="text-center flex-grow-1 cat subcat_all" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;">ALL</h4>
            <h4 class="text-center flex-grow-1 cat cat_0" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;">STAMPE</h4>
            <h4 class="text-center flex-grow-1 cat cat_1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;">CARTOLINE</h4>
            <div class="text-center flex-grow-1">
                <input id="search_all" type="search" class="text-center" placeholder="Search" style="border-color: #CDB4B4!important;width: 100%;float: right;height:60px;background: transparent;border-radius: 0;height: 60px;border: 1px solid black;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" autocomplete="off">
            </div>
            <h4 class="text-center flex-grow-1 cat cat_2" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;">CALENDARIO</h4>
            <h4 class="text-center flex-grow-1 cat cat_3" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;">FORMATO</h4>
            <h4 class="text-center flex-grow-1 cat cat_4" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;">PREZZO</h4>
        </div>
    </div>
    <div id="append_subcat">
    </div>
    <div id="cat_3" class="div_subcat" style="display: none;">
        <div class="d-flex" style="height: 60px;width:100%;overflow-x:auto;overflow-y:hidden;justify-content: center;">
            <h4 class="text-center otherparameter otherparameter_0_0" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_other_parameter(0,0,'22')">A4 (297x210)</h4>
            <h4 class="text-center otherparameter otherparameter_0_1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_other_parameter(0,1,'30,50')">A3 (297x420)</h4>
            <h4 class="text-center otherparameter otherparameter_0_2" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_other_parameter(0,2,'6,16')">A5 (148x210)</h4>
            <h4 class="text-center otherparameter otherparameter_0_3" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_other_parameter(0,3,'24')">24x30</h4>
        </div>
    </div>
    <div id="cat_4" class="div_subcat" style="display: none;">
        <div class="d-flex" style="height: 60px;width:100%;overflow-x:auto;overflow-y:hidden;justify-content: center;">
            <h4 class="text-center otherparameter otherparameter_1_1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_other_parameter(1,1,'6')">< 6 €</h4>
            <h4 class="text-center otherparameter otherparameter_1_2" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_other_parameter(1,2,'6,16')">< 16 €</h4>
            <h4 class="text-center otherparameter otherparameter_1_3" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_other_parameter(1,3,'6,16,22')">< 22 €</h4>
            <h4 class="text-center otherparameter otherparameter_1_4" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_other_parameter(1,4,'6,16,22,24')">< 24 €</h4>
            <h4 class="text-center otherparameter otherparameter_1_5" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_other_parameter(1,5,'6,16,22,24,30')">< 30 €</h4>
            <h4 class="text-center otherparameter otherparameter_1_6" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_other_parameter(1,6,'6,16,22,24,30,50')">< 50 €</h4>
        </div>
    </div>
    @if( auth()->guard('users_ileniadesign')->check() )
    @if( auth()->guard('users_ileniadesign')->user()->id==13 )
    <div class="d-flex flex-wrap slides" style="padding: 10!important;" id="append_image_shopmyart">
    </div>
    @else
    <div class="d-flex flex-wrap" style="padding: 10!important;" id="append_image_shopmyart">
    </div>
    @endif
    @else
    <div class="d-flex flex-wrap" style="padding: 10!important;" id="append_image_shopmyart">
    </div>
    @endif
</section>
<script>

    function start_function_shopmyart(){
        
        get_image();

        $(".subcat_all").css({"text-underline-offset": "5px","text-decoration": "underline"});

        get_subcat();

    }

    function get_subcat(id_cat){

        $("#append_subcat").empty();

        $.get("get_subcat_ileniadesign",{},

        function(data){
            
            var res=jQuery.parseJSON(data);
            var array_cat;
            
            if (res.length!=0) {
                
                for (let y = 0; y < 2; y++) {
                    
                    array_cat=res.filter(v =>v.id_cat===y);
                    
                    var append_subcat='<div id="cat_'+y+'" class="div_subcat" style="display:none">'+
                    '<div class="d-flex" style="height: 60px;width:100%;overflow-x:auto;overflow-y:hidden;justify-content: center;">';

                    for (let i = 0; i < array_cat.length; i++) {
                        append_subcat+='<h4 class="text-center subcat subcat_'+array_cat[i].id_cat+'_'+array_cat[i].id+'" style="font-family: Futura PT, sans-serif;font-size: 13px!important;flex: 0 0 10%;transform: translate(0, 50%);" onclick="filter_subcategory('+array_cat[i].id_cat+','+array_cat[i].id+')">'+array_cat[i].name+'</h4>';
                    }

                    append_subcat+='</div>'+
                    '</div>';                    
                            
                    $("#append_subcat").append(append_subcat);
                            
                }
                        
            }
                    
        });
    }
    
    var old_array_position=[];
    function get_image(type_img){
        $("#append_image_shopmyart").empty();
        
        $.get("/get_image_shopmyart_ileniadesign",{},
        function(data){
            var res=jQuery.parseJSON(data);
            var price_from;
            var format;
            
            for (var i = 0; i < res.length; i++) {
                
                var numb_position=res.length-i;
                
                if (res[i].type_img==0 && res[i].id!=142) {
                    
                    price_from=res[i].price_a4;
    
                }else if(res[i].type_img==1){
                    
                    price_from=res[i].price_a5;
                    
                }else {
                    
                    price_from=res[i].price_a3;
     
                }
                
                old_array_position.push(res[i].id+"_"+numb_position);
                
                $("#append_image_shopmyart").append('<div class="col-md-4 p-0 position_image utility_subcat cat_subcat category_'+res[i].type_img+' subcategory_'+res[i].subtype_image+' parameter_a4_'+res[i].price_a4+' parameter_a3_'+res[i].price_a3+' parameter_a5_'+res[i].price_a5+'" id="id_image_shopmyart_'+res[i].id+'" position="'+numb_position+'" id_image="'+res[i].id+'" style="padding: 10!important;">'+
                '@if( auth()->guard("users_ileniadesign")->check() )'+
                '@if( auth()->guard("users_ileniadesign")->user()->id==13 )'+
                '<div class="image-css" style="position: relative;display: inline-block;">'+
                '<img class="close" style="position: absolute;top: 5px;left: 5px;width:150px; height:150px;" src="public/img/ilenia_design/default_img.png">'+
                '<img onclick="change_vis(\'shopdetail_'+res[i].id+'\')" data-original="ileniadesign_repo/shopmyart/'+res[i].id+'/'+res[i].image_file.split(",")[0]+'" alt="'+res[i].name_image+'" class="lazy" style="width: 100%!important;" >'+
                '<a class="close" style="position: absolute;top: 5px;right: 5px;" onclick="delete_image(\''+res[i].id+'\',shopmyart)">x</a>'+
                '<i class="" aria-hidden="true"></i>'+
                '</div>'+
                '@else'+
                '<img onclick="change_vis(\'shopdetail_'+res[i].id+'\')" data-original="ileniadesign_repo/shopmyart/'+res[i].id+'/'+res[i].image_file.split(",")[0]+'" alt="'+res[i].name_image+'" class="lazy" style="width: 100%!important;" >'+
                '@endif'+
                '@else'+
                '<img onclick="change_vis(\'shopdetail_'+res[i].id+'\')" data-original="ileniadesign_repo/shopmyart/'+res[i].id+'/'+res[i].image_file.split(",")[0]+'" alt="'+res[i].name_image+'" class="lazy" style="width: 100%!important;" >'+
                '@endif'+
                '<div class="d-flex flex-nowrap mt-1 mb-1">'+
                '<label style="font-family: Futura PT, sans-serif; font-size: 15px!important;margin-bottom: 0;flex-grow:1">'+res[i].name_image.toLowerCase()+'</label>'+
                '<i class="bx bx-shopping-bag"></i>'+
                '</div>'+
                '<label style="font-family: Futura PT, sans-serif; font-size: 12px!important;margin-bottom: 0"> Da € '+price_from.toLowerCase()+'</label><br>'+
                '</div>');

            }
            
            jQuery(document).ready(function ($) {

                $("img.lazy").lazyload({ 

                    data_attribute: "original",
                    effect : "fadeIn",
                    // placeholder: "data:image/gif;base64,R0lGODlhEALAPQAPzl5uLr9Nrl8e7...",
                    

                });

            });
    
        });
    
    }

    $(".cat").click("slow",function(){

        $(".cat").css("text-decoration", "none");
        
        $(".div_subcat").css("display", "none");

        $(".cat_subcat").hide();
      
        $(this).css({"text-underline-offset": "5px","text-decoration": "underline"});

        if($(this)[0].classList[3]=="subcat_all"){

            $(".cat_subcat").show();

        }else if($(this)[0].classList[3]=="cat_2"){

            $(".cat_subcat.parameter_a3_50").show();

        }else if($(this)[0].classList[3]=="cat_3" || $(this)[0].classList[3]=="cat_4"){

            $(".cat_subcat").show();

            $("#"+$(this)[0].classList[3]).show();

        }else{

            $(".cat_subcat").hide();

            $("#"+$(this)[0].classList[3]).show();

        }

        $(".cat_subcat.category_"+$(this)[0].classList[3].split("_")[1]).show();

    });

    function filter_subcategory(cat, subcat){

        $(".subcat").css("text-decoration", "none");

        $(".subcat_"+cat+"_"+subcat).css({"text-underline-offset": "5px","text-decoration": "underline"});

        $(".cat_subcat").hide();

        $(".cat_subcat.category_"+cat+".subcategory_"+subcat).show();
        
    }

    function filter_other_parameter(type, subtype, parameter){
        
        $(".otherparameter").css("text-decoration", "none");
        
        $(".otherparameter_"+type+"_"+subtype).css({"text-underline-offset": "5px","text-decoration": "underline"});
        
        $(".cat_subcat").hide();

        var array_parameter=parameter.split(",")

        for (let i = 0; i < array_parameter.length; i++) {
  
            $(".cat_subcat.parameter_a4_"+array_parameter[i]).show();
            $(".cat_subcat.parameter_a3_"+array_parameter[i]).show();
            $(".cat_subcat.parameter_a5_"+array_parameter[i]).show();
            
        }

     
    }

    $(document).ready(function(){

        $(document).on("input", "#search_all", function (e) {

            var value = $(this).val().toLowerCase();

            if($(this).val().length == 0){

                $(".cat_subcat").show();

                $("#search_all").blur(); 

            }

            $("#append_image_shopmyart div").filter(function() {

                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

            });

        });

    });

    // drug and drop image
    $(".slides").sortable({
        placeholder: 'slide-placeholder',
        revert: 150,
        start: function(e, ui){
            
            placeholderHeight = ui.item.outerHeight();
            ui.placeholder.height(placeholderHeight + 15);
            $('<div class="slide-placeholder-animator" data-height="' + placeholderHeight + '"></div>').insertAfter(ui.placeholder);
        
        },
        change: function(event, ui) {
            
            ui.placeholder.stop().height(0).animate({
                height: ui.item.outerHeight() + 15
            }, 300);
            
            placeholderAnimatorHeight = parseInt($(".slide-placeholder-animator").attr("data-height"));
            
            $(".slide-placeholder-animator").stop().height(placeholderAnimatorHeight + 15).animate({
                height: 0
            }, 300, function() {
                $(this).remove();
                placeholderHeight = ui.item.outerHeight();
                $('<div class="slide-placeholder-animator" data-height="' + placeholderHeight + '"></div>').insertAfter(ui.placeholder);
            });
            
        },
        stop: function(e, ui) {

        $(".slide-placeholder-animator").remove();

        var new_array_position=[];

        $(".position_image").each(function(i){

            var id_image=$(this).attr("id_image");
            var numb_position=$(".position_image").length-i;

            $("#id_image_shopmyart_"+id_image).attr("position",numb_position);

            new_array_position.push(id_image+"_"+numb_position)
            
        });

        var ultimate_array_position=[];

        for (var i = 0; i < old_array_position.length; i++) {
            if (old_array_position[i]!=new_array_position[i]) {
            ultimate_array_position.push(new_array_position[i]);
            }
        }

        update_position_image(ultimate_array_position);

        old_array_position=new_array_position;

        },

    });

    function update_position_image(ultimate_array_position){

        var type_page="shopmyart";

        $.get("/update_position_image_ileniadesign",{ultimate_array_position:ultimate_array_position.toString(), type_page:type_page},
        function(data){

        console.log(data);
        
        });

    }

</script>