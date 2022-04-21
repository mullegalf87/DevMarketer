<style>
    
    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }
    
    #msform fieldset .form-card {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;
        position: relative
    }
    
    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }
    
    #msform fieldset:not(:first-of-type) {
        display: none
    }
    
    #msform fieldset .form-card {
        text-align: left;
        color: #9E9E9E
    }
    
    #msform input,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px
    }
    
    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid #CDB4B4;
        outline-width: 0
    }
    
    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px
    }
    
    select.list-dt:focus {
        border-bottom: 2px solid #CDB4B4
    }
    
    .card {
        z-index: 0;
        border: none;
        border-radius: 0;
        position: relative
    }
    
    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left
    }
    
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
        padding: 0;
    }
    
    #progressbar .active {
        color: #000000
    }
    
    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 25%;
        float: left;
        position: relative
    }
    
    #progressbar #personal_detail:before {
        font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;
        content: "1"
    }
    
    #progressbar #shipping_detail:before {
        font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;
        content: "2"
    }
    
    #progressbar #delivery_method:before {
        font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;
        content: "3"
    }
      
    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }
    
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }
    
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #CDB4B4
    }
    
    .radio-group {
        position: relative;
        margin-bottom: 25px
    }
    
    .radio {
        display: inline-block;
        width: 204;
        height: 104;
        border-radius: 0;
        background: lightblue;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        cursor: pointer;
        margin: 8px 2px
    }
    
    .radio:hover {
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
    }
    
    .radio.selected {
        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
    }
    
    .fit-image {
        width: 100%;
        object-fit: cover
    }
    
    #promo .card{
      border-radius: 0;
    }
    
    [contenteditable]:focus {
        outline: 0px solid transparent;
      }
</style>
<section class="container-fluid" style="padding: 7%;">
    <h3 class="pb-5" style="font-family: 'Silk Serif', sans-serif;">Summary order</h3>
    <form id="msform">
        <ul id="progressbar">

            <div class="d-flex flex-nowrap">
                <li class="active" id="personal_detail" style="flex-grow: 1;"><strong style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Personal detail</strong></li>
                <li id="shipping_detail" style="flex-grow: 1;"><strong style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Shipping detail</strong></li>
                <li id="delivery_method" style="flex-grow: 1;"><strong style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Delivery method</strong></li>
            </div>

            <fieldset class="pb-0">
                <div class="d-flex flex-nowrap">
                    <button type="button" name="next" class="next action-button btn btn-primary text-left w-100" value="Next Step">
                        <div class="d-flex flex-nowrap">
                            <p class="flex-grow-1 m-0">SHIPPING DETAIL</p>
                            <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                        </div>
                    </button>
                </div>
            </fieldset>

            <fieldset>
                <div class="d-flex flex-nowrap">
                    <button type="button" name="previous" class="previous action-button-previous btn btn-primary text-left w-100 mr-3" value="Previous Step">
                        <div class="d-flex flex-nowrap">
                            <p class="flex-grow-1 m-0">PERSONAL DETAIL</p>
                            <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                        </div>
                    </button>
                    <button type="button" name="next" class="next action-button btn btn-primary text-left w-100" value="Next Step" style="background-color: #CDB4B4!important;">
                        <div class="d-flex flex-nowrap">
                            <p class="flex-grow-1 m-0">DELIVERY METHOD</p>
                            <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                        </div>
                    </button>
                </div>
            </fieldset>

            <fieldset>
                <div class="d-flex flex-nowrap">
                    <button type="button" name="previous" class="previous action-button-previous btn btn-primary text-left w-100 mr-3" value="Previous Step">
                        <div class="d-flex flex-nowrap">
                            <p class="flex-grow-1 m-0">SHIPPING DETAIL</p>
                            <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                        </div>
                    </button>
                    <button type="button" name="next" class="next action-button btn btn-primary text-left w-100" value="Next Step" style="background-color: #CDB4B4!important;">
                        <div class="d-flex flex-nowrap">
                            <p class="flex-grow-1 m-0">PAYMENT</p>
                            <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                        </div>
                    </button>
                </div>
            </fieldset>
            
        </ul>
    </form>
</section>
<script>

    function start_function_summary(){
        
    }
    
    $(document).ready(function(){
        
        var current_fs, next_fs, previous_fs;
        var opacity;
        
        $(".next").click(function(){
            
            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();
            
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            
            next_fs.show();
            
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    
                    opacity = 1 - now;
                    
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({'opacity': opacity});
                },
                duration: 600
            });
        });
        
        $(".previous").click(function(){
            
            current_fs = $(this).parent().parent();
            previous_fs = $(this).parent().parent().prev();
            
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            
            previous_fs.show();
            
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    
                    opacity = 1 - now;
                    
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({'opacity': opacity});
                },
                duration: 600
            });
        });
        
        $('.radio-group .radio').click(function(){
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });
        
        $(".submit").click(function(){
            return false;
        })
        
    });

</script>