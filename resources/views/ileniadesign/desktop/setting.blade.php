<section class="container-fluid" style="padding: 7%;">
    <h3 class="pb-5" style="font-family: 'Silk Serif', sans-serif;">Setting image</h3>
    <table class="table" id="list_image">
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
    <h3 class="pb-5" style="font-family: 'Silk Serif', sans-serif;">Setting categoria</h3>
    <table class="table" id="list_cat">
        <thead>
            <th>Id</th>
            <th>Nome</th>
        </thead>
        <tbody class="mt-5" id="append_cat_setting">
        </tbody>
    </table>
    <h3 class="pb-5" style="font-family: 'Silk Serif', sans-serif;">Setting sottocategoria</h3>
    <table class="table" id="list_subcat">
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Categoria associata</th>
        </thead>
        <tbody class="mt-5" id="append_subcat_setting">
        </tbody>
    </table>
</section>
<script>

    function start_function_setting(){

        get_all_image();
        
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
            '<select class="styled-select append_cat_option" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;" id="id_image_cat_'+res[i].id+'" id_cat='+res[i].id_cat+'>'+
            '</select>'+
            '</td>'+
            '<td class="flex-grow-1">'+
            '<select class="styled-select append_subcat_option" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;" id="id_image_subcat_'+res[i].id+'" id_subcat='+res[i].id_subcat+'>'+
            '</select>'+
            '</td>'+
            '</tr>');

            }

            get_subcategory_image();

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

    function get_category_image(){

        $(".append_cat_option").empty();

        $(".append_cat_setting").empty();
        
        $.get("get_category_image_ileniadesign",{},
        function(data){

            var res=jQuery.parseJSON(data);
            var select_category='';
            var list_cat;
        
            for (let i = 0; i < res.length; i++) {

                select_category+='<option value="'+res[i].id+'">'+res[i].name+'</option>';

                list_cat='<tr><td>'+res[i].id+'</td><td>'+res[i].name+'</td></tr>';

                $("#append_cat_setting").append(list_cat);
                
            }

            $(".append_cat_option").append(select_category);

            selected_attribute_cat();
            
        });
        
    }

    function get_subcategory_image(){

        $(".append_subcat_option").empty();

        $(".append_subcat_setting").empty();

        $.get("get_subcategory_image_ileniadesign",{},
        function(data){

            var res=jQuery.parseJSON(data);
            var select_subcategory='';
            var list_subcat;
        
            for (let i = 0; i < res.length; i++) {

                select_subcategory+='<option value="'+res[i].id+'">'+res[i].name+'</option>';

                list_subcat='<tr><td>'+res[i].id+'</td><td>'+res[i].name+'</td><td class="cat_associated" id_cat_associated='+res[i].id_cat+'></td></tr>';
                
                $("#append_subcat_setting").append(list_subcat);

            }

            $(".append_subcat_option").append(select_subcategory);

            get_category_image();

            selected_attribute_subcat();

        });

    }

    function selected_attribute_cat(){

        $(".append_cat_option").each(function(data){

           var id=$(this).attr("id");
           var id_cat=$(this).attr("id_cat");

           $("#"+id).val(id_cat).attr("selected");

        });

    }

    function selected_attribute_subcat(){

        $(".append_subcat_option").each(function(data){

            var id=$(this).attr("id");
            var id_subcat=$(this).attr("id_subcat");

            $("#"+id).val(id_subcat).attr("selected");

        });

    }

    function get_discount_code(){

        $.get("get_discount_code_ileniadesign",{},
        function(data){

            var res=jQuery.parseJSON(data);
            console.log(res)

        });
    }

</script>