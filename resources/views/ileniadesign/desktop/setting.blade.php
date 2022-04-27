<section class="container-fluid" style="padding: 7%;">
    <h3 class="pb-5" style="font-family: 'Silk Serif', sans-serif;">Setting image</h3>
    <table class="table">
        <thead>
            <th></th>
            <th>Titolo</th>
            <th>Giacenza</th>
            <th>Sottoscorta</th>
            <th>Azioni</th>
            <th>Categoria</th>
            <th>Sottocategoria</th>
        </thead>
        <tbody class="mt-5" id="append_image_setting">

        </tbody>
        
    </table>
</section>
<script>

    function start_function_setting(){
        get_all_image();
        get_discount_code();
    }

    function get_discount_code(){
        $.get("get_discount_code_ileniadesign",{},
        function(data){

            var res=jQuery.parseJSON(data);
            console.log(res)

        });
    }

    function get_all_image(){
    
    $("#append_image_setting").empty();
    
    $.get("get_all_image_ileniadesign",{},
    function(data){
        
        var res=jQuery.parseJSON(data);
        
        for (let i = 0; i < res.length; i++) {
                
            $("#append_image_setting").append(
            '<tr class="">'+
                '<td class="flex-grow-1" style="">'+
                    '<img style="width: 55px!important;" class="img-corner mr-4" src="ileniadesign_repo/shopmyart/'+res[i].id+'/'+res[i].image_file.split(",")[0]+'">'+
                '</td>'+
                '<td class="flex-grow-1" style="">'+
                    '<input class="form-control input" type="text" value="'+res[i].name_image+'" id="name_image_setting_'+res[i].id+'">'+
                '</td>'+
                '<td class="flex-grow-1" style="">'+
                    '<input class="form-control input" type="text" value="'+res[i].stock+'" id="stock_setting_'+res[i].id+'">'+
                '</td>'+
                '<td class="flex-grow-1" style="">'+
                    '<input class="form-control input" type="text" value="'+res[i].substock+'" id="substock_setting_'+res[i].id+'">'+
                '</td>'+
                '<td class="flex-grow-1" style="">'+
                    '<p class="p-0 m-0" style="text-decoration: underline;text-underline-offset: 1px;color:#dbd3d3" onclick="delete_cart('+res[i].id+')">Remove</p>'+
                '</td>'+
                '<td class="flex-grow-1">'+
                    '<input class="form-control input" type="text" value="'+res[i].name_cat+'" id="name_cat_setting_'+res[i].id+'">'+
                '</td>'+
                '<td class="flex-grow-1">'+
                    '<input class="form-control input" type="text" value="'+res[i].name_subcat+'" id="name_substock_setting_'+res[i].id+'">'+
                '</td>'+
            '</tr>');
            
        }

        var x_timer;
           
        $(".input").keyup(function (e){
            clearTimeout(x_timer);
            var text = $(this).val();
            x_timer = setTimeout(function(){
            // callback_function();
            console.log(user_name);
            }, 1000);
        });

    });
    
}

</script>