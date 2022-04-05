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
            <h4 class="text-center flex-grow-1 cat subcat_print" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="change_vis('shopmyart_0')">STAMPE</h4>
            <h4 class="text-center flex-grow-1 cat subcat_postcard" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;">CARTOLINE</h4>
            <div class="text-center flex-grow-1">
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
    <div id="subcat_postcard" class="subcat" style="display: none;">
        <div class="d-flex flex-nowrap w-100 mt-3" style="height: 60px;">
            <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory(1)">Amore</h4>
            <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory(2)">Self-love</h4>
            <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory(3)">Compleanno</h4>
            <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory(4)">Amicizia</h4>
            <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory(5)">Motivazione</h4>
            <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;
            align-items: center;justify-content: center;" onclick="filter_subcategory(6)">Gratitudine</h4>
        </div>
    </div>
    <div class="d-flex flex-wrap" style="padding: 10!important;" id="append_image_shopmyart">
    </div>
</section>
<script>

    function start_function_shopmyart(type_img){
        get_image(type_img);
    }
    
    var old_array_position=[];
    function get_image(type_img){
        $("#append_image_shopmyart").empty();
        
        $.get("/get_image_shopmyart_ileniadesign",{type_img:type_img},
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
                
                $("#append_image_shopmyart").append('<div class="col-md-4 p-0" style="padding: 10!important;">'+
                    '<img onclick="change_vis(\'shopdetail_'+res[i].id+'\')" data-original="ileniadesign_repo/shopmyart/'+res[i].id+'/'+res[i].image_file.split(",")[0]+'" alt="'+res[i].name_image+'" class="lazy" style="width: 100%!important;" >'+
                    '<div class="d-flex flex-nowrap mt-1 mb-1">'+
                    '<label style="font-family: Futura PT, sans-serif; font-size: 15px!important;margin-bottom: 0;flex-grow:1">'+res[i].name_image.toLowerCase()+'</label>'+
                    '<i class="fas fa-shopping-bag"></i>'+
                    '</div>'+
                    '<label style="font-family: Futura PT, sans-serif; font-size: 12px!important;margin-bottom: 0"> Da € '+price_from.toLowerCase()+'</label><br>'+
                    '</div>');
            }
            
            // var id_user="@if( auth()->guard('users_ileniadesign')->check() ){{ auth()->guard('users_ileniadesign')->user()->id==13}}@endif";
            
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
    $(".subcat").css("display", "none");

    $('#'+$(this)[0].classList[3]).show();

    $(this).css({"text-underline-offset": "5px","text-decoration": "underline"});

});

function filter_subcategory(num){
    
    $("#show_hide_append_image").removeClass("d-none");
    
    $(".utility_subcat").hide();
    
    $(".subcategory_"+num).show();
    
}

</script>