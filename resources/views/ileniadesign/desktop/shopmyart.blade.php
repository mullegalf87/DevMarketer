<style>
    
</style>
<section class="container-fluid p-0" style="background-color: #dbd3d3;">
    <div class="d-flex flex-wrap">
        <div class="col-md-12 p-0 mt-5 mb-5">
            <h4 class="text-center" style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;">SEARCH & FILTER</h4>
        </div>
        <div class="d-flex flex-nowrap w-100">
            <h4 class="text-center flex-grow-1 cat subcat_all" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;">ALL</h4>
            <h4 class="text-center flex-grow-1 cat subcat_print cat_0" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;">STAMPE</h4>
            <h4 class="text-center flex-grow-1 cat subcat_postcard cat_1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;">CARTOLINE</h4>
            <div class="text-center flex-grow-1 cat subcat_search">
                <button class="btn btn-primary text-center w-100" style="color:#CDB4B4!important;border-color: #CDB4B4!important;">SEARCH  </button>
            </div>
            <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;">FILTERS</h4>
            <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;">FILTERS</h4>
            <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;">FILTERS</h4>
        </div>
    </div>
    <div id="subcat_print" class="div_subcat" style="display: none;">
        <div class="d-flex flex-nowrap w-100 mt-3" style="height: 60px;">
            <h4 class="text-center flex-grow-1 subcat subcat_print_0" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory('print',0,0)">Illustrazioni</h4>
            <h4 class="text-center flex-grow-1 subcat subcat_print_1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory('print',0,1)">Pupine</h4>
        </div>
    </div>
    <div id="subcat_postcard" class="div_subcat" style="display: none;">
        <div class="d-flex flex-nowrap w-100 mt-3" style="height: 60px;">
            <h4 class="text-center flex-grow-1 subcat subcat_postcard_1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory('postcard',1,1)">Amore</h4>
            <h4 class="text-center flex-grow-1 subcat subcat_postcard_2" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory('postcard',1,2)">Self-love</h4>
            <h4 class="text-center flex-grow-1 subcat subcat_postcard_3" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory('postcard',1,3)">Compleanno</h4>
            <h4 class="text-center flex-grow-1 subcat subcat_postcard_4" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory('postcard',1,4)">Amicizia</h4>
            <h4 class="text-center flex-grow-1 subcat subcat_postcard_5" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory('postcard',1,5)">Motivazione</h4>
            <h4 class="text-center flex-grow-1 subcat subcat_postcard_6" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory('postcard',1,6)">Gratitudine</h4>
        </div>
    </div>
    <div id="subcat_search" class="div_subcat" style="display: none;">
        <div class="d-flex flex-nowrap w-100 mt-3" style="height: 60px;justify-content: center;">
            <input id="search_all" type="search" class="form-control text-left" placeholder="Search..." style="width: 60%;float: right;height:60px;background: transparent; border-radius: 0; width: 31%; float: right; height: 60px; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
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
    @endif
</section>
<script>

    function start_function_shopmyart(){
        
        get_image();

        $(".subcat_all").css({"text-underline-offset": "5px","text-decoration": "underline"});

    }
    
    var old_array_position=[];
    function get_image(type_img){
        $("#append_image_shopmyart").empty();

        var id_user="@if( auth()->guard('users_ileniadesign')->check() ){{ auth()->guard('users_ileniadesign')->user()->id}}@endif";
                console.log(id_user)
        
        $.get("/get_image_shopmyart_ileniadesign",{},
        function(data){
            var res=jQuery.parseJSON(data);
            var price_from;
            
            for (var i = 0; i < res.length; i++) {
                
                var numb_position=res.length-i;
                
                if (res[i].type_img==0 && res[i].id!=142) {
                    
                    price_from=res[i].price_a4;
                    
                }else if(res[i].type_img==1){
                    
                    price_from=res[i].price_a5;
                    
                }else{
                    
                    price_from=res[i].price_a3;
                    
                }
                
                old_array_position.push(res[i].id+"_"+numb_position);
                
                $("#append_image_shopmyart").append('<div class="col-md-4 p-0 position_image utility_subcat cat_subcat category_'+res[i].type_img+' subcategory_'+res[i].subtype_image+'" id="id_image_shopmyart_'+res[i].id+'" position="'+numb_position+'" id_image="'+res[i].id+'" style="padding: 10!important;">'+
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
                '@endif'+
                '<div class="d-flex flex-nowrap mt-1 mb-1">'+
                '<label style="font-family: Futura PT, sans-serif; font-size: 15px!important;margin-bottom: 0;flex-grow:1">'+res[i].name_image.toLowerCase()+'</label>'+
                '<i class="fas fa-shopping-bag"></i>'+
                '</div>'+
                '<label style="font-family: Futura PT, sans-serif; font-size: 12px!important;margin-bottom: 0"> Da € '+price_from.toLowerCase()+'</label><br>'+
                '</div>');

            }
            
            jQuery(document).ready(function ($) {
                $("img.lazy").lazyload(
                { data_attribute: "original",
                effect : "fadeIn"
                });
            });
    
        });
    
    }

    $(".cat").click("slow",function(){

        $(".cat").css("text-decoration", "none");
        
        $(".div_subcat").css("display", "none");

        $('#'+$(this)[0].classList[3]).show();

        $(this).css({"text-underline-offset": "5px","text-decoration": "underline"});

        if($(this)[0].classList[3]=="subcat_all"){

            $(".cat_subcat").show();

        }else{

            $(".cat_subcat").hide();

        }

        $(".cat_subcat.category_"+$(this)[0].classList[4].split("_")[1]).show();


    });

    function filter_subcategory(type_subcat, cat, subcat){

        $(".subcat").css("text-decoration", "none");

        $(".subcat_"+type_subcat+"_"+subcat).css({"text-underline-offset": "5px","text-decoration": "underline"});

        $(".cat_subcat").hide();

        $(".cat_subcat.category_"+cat+".subcategory_"+subcat).show();
        
    }

    $(document).ready(function(){

        $(document).on("input", "#search_all", function (e) {

            var value = $(this).val().toLowerCase();

            if($(this).val().length == 0){

                $(".cat_subcat").show();

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