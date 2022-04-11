<style>
    #shopdetail .container_page{
        height: 100%!important;
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
        <div class="col-md-6" style="padding-top: 20%; padding-left: 10%; padding-bottom:10%; padding-right: 20%;">
            <h4>Katerine dress</h4>
            <p>in Dress</p>
            <div class="d-flex flex-nowrap">
                <p class="flex-grow-1">Size</p>
                <p>Size guide</p>
            </div>
            <p> A4 &nbsp; A3 &nbsp; A5</p>
            <button style="" class="btn btn-primary text-left w-100">
                <div class="d-flex flex-nowrap">
                    <p class="flex-grow-1 m-0">€ 24,00</p>
                    <p class="m-0"><i class="bx bx-shopping-bag"></i> ADD</p>
                </div>
            </button>
            <div class="d-flex flex-nowrap text-center">
                <p class="flex-grow-1 text-left">Detail</p>
                <p class="flex-grow-1">Delivery</p>
                <p class="flex-grow-1 text-right">Service</p>
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

            }

        });

    }

</script>