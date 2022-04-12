<style>
    #shopdetail .container_page{
        height: 100%!important;
    }

    #shopdetail .underline_text{
        text-underline-offset: 5px;
        text-decoration: underline!important;
    }

    .add_button_pink{
        background-color: #CDB4B4!important;
    }
</style>
<section class="container-fluid p-0">
    <div class="d-flex flex-wrap">
        <div class="col-md-6 p-0">
            <div id="carousel_image_detail_control" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="carousel_image_detail">
                </div>
                <a class="carousel-control-prev" href="#carousel_image_detail_control" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="position: absolute;margin: auto;top: 0;bottom: 0;right: 0;left: 0;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_image_detail_control" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="position: absolute;margin: auto;top: 0;bottom: 0;right: 0;left: 0;"></span>
                  <span class="sr-only">Next</span>
                </a>
                <span class="bx bx-heart" style="position: absolute;bottom: 15;right: 15;font-size:x-large"></span>
            </div>
        </div>
        <div id="card_front_detail" class="col-md-6" style="padding-top: 15%; padding-left: 5%; padding-bottom:0; padding-right: 25%;">
            <h4 style="font-family: 'Silk Serif', sans-serif; white-space: nowrap;" id="name_image">KATERINE DRESS</h4>
            <p style="font-family: 'Silk Serif', sans-serif; white-space: nowrap;" class="mb-5" id="subname_image">by Ileniazitodesign</p>
            <div class="d-flex flex-nowrap">
                <p class="flex-grow-1">Size</p>
                <p style="text-decoration: underline;text-underline-offset: 5px;color: lightgray;" class="" onclick="open_info_detail(1)">Size guide</p>
            </div>
            <div class="mb-5 d-flex flex-nowrap group_info_image">
            </div>
            <button id="add_button" class="btn btn-primary text-left w-100 mb-5">
                <div class="d-flex flex-nowrap group_add_button">
                    <p class="flex-grow-1 m-0">Select size</p>
                    <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                </div>
            </button>
            <div class="d-flex flex-nowrap text-center">
                <p style="text-decoration: underline;text-underline-offset: 5px;color: lightgray;" class="flex-grow-1 text-left" onclick="open_info_detail(2)">Detail</p>
                <p style="text-decoration: underline;text-underline-offset: 5px;color: lightgray;" class="flex-grow-1" onclick="open_info_detail(3)">Delivery</p>
                <p style="text-decoration: underline;text-underline-offset: 5px;color: lightgray;" class="flex-grow-1 text-right" onclick="open_info_detail(4)">Promo</p>
            </div>
        </div>
        <div id="card_back_detail" class="col-md-6 p-0" style="background-color: white;z-index: 1031;display: none;">
            <div style="padding: 20%;text-align: center;height: 100%;">
                <h4 style="font-family: 'Futura PT', sans-serif;white-space: nowrap;position: absolute;top: 20;
                right: 30;height: 100%;" onclick="close_info_detail()">x</h4>
                <div class="card_back_detail card_back_detail_1">
                    <h4 class="mb-5" style="font-family: 'Silk Serif', sans-serif; white-space: nowrap;">SIZE GUIDE</h4>
                    <p class="mb-5" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>- a4 Lorem Ipsum is simply dummy text <br>- a3 Lorem Ipsum is simply dummy text <br>- a5 Lorem Ipsum is simply dummy text</p>
                </div>
                <div class="card_back_detail card_back_detail_2">
                    <h4 class="mb-5" style="font-family: 'Silk Serif', sans-serif; white-space: nowrap;">DETAIL</h4>
                    <p class="mb-5" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>- a4 Lorem Ipsum is simply dummy text <br>- a3 Lorem Ipsum is simply dummy text <br>- a5 Lorem Ipsum is simply dummy text</p>
                </div>
                <div class="card_back_detail card_back_detail_3">
                    <h4 class="mb-5" style="font-family: 'Silk Serif', sans-serif; white-space: nowrap;">DELIVERY</h4>
                    <p class="mb-5" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>- a4 Lorem Ipsum is simply dummy text <br>- a3 Lorem Ipsum is simply dummy text <br>- a5 Lorem Ipsum is simply dummy text</p>
                </div>
                <div class="card_back_detail card_back_detail_4">
                    <h4 class="mb-5" style="font-family: 'Silk Serif', sans-serif; white-space: nowrap;">PROMO</h4>
                    <p class="mb-5" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>- a4 Lorem Ipsum is simply dummy text <br>- a3 Lorem Ipsum is simply dummy text <br>- a5 Lorem Ipsum is simply dummy text</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="container-fluid p-0">
    <div class="d-flex flex-wrap h-100">
        <div class="col-md-12 p-0">
            <div id="carousel_image_advice_control" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="carousel_image_advice">
   
                </div>
                <a class="carousel-control-prev" href="#carousel_image_advice_control" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="position: absolute;margin: auto;top: 0;bottom: 0;right: 0;left: 0;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_image_advice_control" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="position: absolute;margin: auto;top: 0;bottom: 0;right: 0;left: 0;"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section> -->
<script>

    function start_function_shopdetail(num_image){

        id_article(num_image);

    }

    function id_article(num_image){

        $("#carousel_image_detail").empty();
        $.get("/get_image_detail_ileniadesign",{id_image:num_image},
        function(data){
            var res=jQuery.parseJSON(data);
            var active;
            for (let i = 1; i < res[0].image_file.split(",").length; i++) {
                
                if (i==1) {
                    active="active";
                } else {
                    active="";
                }

                $("#carousel_image_detail").append('<div class="carousel-item '+active+'"><img src="ileniadesign_repo/shopmyart/'+num_image+'/'+res[0].image_file.split(",")[i-1]+'" class="d-block w-100"></div>');

                $("#name_image").text(res[0].name_image);

                $(".group_info_image").html('<p class="info_detail" id_image="'+res[0].id+'" name_image="'+res[0].name_image+'" name_size="A4" num_size="1" price="'+res[0].price_a4+'">A4</p>&nbsp;&nbsp;&nbsp;<p class="info_detail" id_image="'+res[0].id+'" name_image="'+res[0].name_image+'" name_size="A3" num_size="2" price="'+res[0].price_a3+'">A3</p>&nbsp;&nbsp;&nbsp;<p class="info_detail" id_image="'+res[0].id+'" name_image="'+res[0].name_image+'" name_size="A5" num_size="3" price="'+res[0].price_a5+'">A5</p>');

                $(".info_detail").click("slow",function(){

                    $(".info_detail").removeClass("underline_text");

                    $(this).addClass("underline_text");

                    $("#add_button").addClass("add_button_pink");

                    $(".group_add_button").html("<p class='flex-grow-1 m-0'>€ "+$(this).attr("price")+"</p><p class='m-0'><i class='bx bx-shopping-bag'></i> ADD</p>");

                    $("#add_button").attr("onclick","add_cart(\'"+$(this).attr("id_image")+"\',\'"+$(this).attr("name_image")+"\',\'"+$(this).attr("name_size")+"\',\'"+$(this).attr("num_size")+"\',\'"+$(this).attr("price")+"\')");

                });

            }

        });

    }

    

    function open_info_detail(num){
    
        $("#card_back_detail").css("display","");

        $("#card_front_detail").css("display","none");

        $(".card_back_detail").css("display","none");

        $(".card_back_detail_"+num).css("display","");

    }

    function close_info_detail(){

        $("#card_back_detail").css("display","none");

        $("#card_front_detail").css("display","");

        $(".info_detail").css("text-decoration", "none");

    }

    function add_cart(id_image, name_image, name_size, num_size, price){

        $(".circle_cart").css("background-color","#CDB4B4");

        $(".group_add_button").html("<p class='text-center m-0'>"+name_size+" size added to cart</p>");

    }

</script>