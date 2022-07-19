<style>
    #order input{
        float: right;
        height: 60px;
        background: transparent;
        border-radius: 0;
        border-bottom: 1px solid;
        font-family: 'Futura PT', sans-serif;
        font-size: 15px!important;
    }
</style>
<section class="container-fluid" style="padding: 7%;">

    <div class="d-flex flex-nowrap w-100 p-5">
        <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;" onclick="change_vis_order('list_order')">ORDER</h4>
        <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;" onclick="change_vis_order('list_prefer')">PREFERS</h4>
        <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;" onclick="change_vis_order('list_profile')">PROFILE</h4>
    </div>

    <div id="list_order">
        <table class="table">
            <thead>
                <th>Order</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Date</th>
                <th>Info</th>
            </thead>
            <tbody class="mt-5" id="append_order">
            </tbody>
        </table>
    </div>

    <div id="list_prefer" class="d-none">
        <table class="table">
            <thead>
                <th>Order</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Date</th>
                <th>Info</th>
            </thead>
            <tbody class="mt-5" id="append_prefer">
            </tbody>
        </table>
    </div>

    <div id="list_profile" class="d-none">
        <h1>profilo</h1>
        <!-- <table class="table">
            <thead>
                <th>Order</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Date</th>
                <th>Info</th>
            </thead>
            <tbody class="mt-5" id="append_profile">
            </tbody>
        </table> -->
    </div>

</section>

<script>

    function start_function_order(){
        
        get_all_order();
        
    }

    var old_section="list_order";

    function change_vis_order(section){

        $("#"+old_section).addClass("d-none");

        old_section=section;

        $("#"+section).removeClass("d-none");

    }

    function get_all_order(){
    
        $(".append_order").empty();
        
        $.get("get_product_user_ileniadesign",{},
        function(data){

            var res=jQuery.parseJSON(data);
            console.log(res)
            var list_order='';
        
            // for (let i = 0; i < res.length; i++) {

            //     list_order+='<tr>'+
            //         '<td style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;vertical-align: middle;">'+res[i].id_cat+'</td>'+
            //         '<td><input class="image_category_ileniadesign form-control input" type="text" value="'+res[i].name_cat.replace(/"/g, '&quot;')+'" id="name_cat_setting_'+res[i].id_cat+'"></td>'+
            //         '<td class="flex-grow-1" style="vertical-align: middle;">'+
            //         '<p class="p-0 m-0" style="text-decoration: underline;text-underline-offset: 1px;color:#dbd3d3" onclick="delete_cat_subcat(\''+res[i].id_cat+'\',\'category\')">Remove</p>'+
            //         '</td>'+
            //         '</tr>';
                
            // }

            // $("#append_order").append(list_order);
        
        });

    }

</script>