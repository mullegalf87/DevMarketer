<section class="container-fluid" style="padding: 7%;">
    <div class="d-flex flex-nowrap">
        <h2 class="pb-5" style="font-family: 'Silk Serif', sans-serif;">Setting image / </h2>
        <h2 class="pb-5" style="font-family: 'Silk Serif', sans-serif;"> Setting categoria / </h2>
        <h2 class="pb-5" style="font-family: 'Silk Serif', sans-serif;"> Setting sottocategoria / </h2>
        <h2 class="pb-5" style="font-family: 'Silk Serif', sans-serif;"> Setting discount</h2>
    </div>

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
    
    <table class="table" id="list_cat">
        <thead>
            <th>Id</th>
            <th>Nome</th>
        </thead>
        <tbody class="mt-5" id="append_cat_setting">
        </tbody>
    </table>

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

    $(document).ready(function(){ 

        var x_timer;

        $(document).on('keyup', '.input', function (e) {
            clearTimeout(x_timer);
            var classFrom=$(this)[0].classList[0];
            var id = $(this).attr("id").split("_")[3];
            // var text=$("#"+$(this).attr("id")).val();
            var text=$("#"+$(this).attr("id"));
            x_timer = setTimeout(function(){
                update_setting(classFrom, id, text);
            }, 1000);
        });

    });

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
            '<input class="image_shopmyart_ileniadesign form-control input" type="text" value="'+res[i].name.replace(/"/g, '&quot;')+'" id="name_image_setting_'+res[i].id+'">'+
            '</td>'+
            '<td class="flex-grow-1" style="">'+
            '<input class="image_shopmyart_ileniadesign form-control input" type="text" value="'+res[i].stock+'" id="stock_setting_'+res[i].id+'">'+
            '</td>'+
            '<td class="flex-grow-1" style="">'+
            '<input class="image_shopmyart_ileniadesign form-control input" type="text" value="'+res[i].substock+'" id="substock_setting_'+res[i].id+'">'+
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

            get_category_image();

        });
    
    }

    function get_category_image(){

        $(".append_cat_option").empty();

        $("#append_cat_setting").empty();
        
        $.get("get_category_image_ileniadesign",{},
        function(data){

            var res=jQuery.parseJSON(data);
            var select_category='';
            var list_cat;
        
            for (let i = 0; i < res.length; i++) {

                select_category+='<option value="'+res[i].id_cat+'">'+res[i].name_cat+'</option>';

                list_cat='<tr>'+
                    '<td>'+res[i].id_cat+'</td>'+
                    '<td><input class="image_category_ileniadesign form-control input" type="text" value="'+res[i].name_cat.replace(/"/g, '&quot;')+'" id="name_cat_setting_'+res[i].id_cat+'"></td>'+
                    '</tr>';

                $("#append_cat_setting").append(list_cat);
                
            }

            get_subcategory_image(res);

            $(".append_cat_option").append(select_category);

            selected_attribute_cat();
            
        });
        
    }

    function get_subcategory_image(res_cat){

        $(".append_subcat_option").empty();

        $("#append_subcat_setting").empty();

        $.get("get_subcategory_image_ileniadesign",{},
        function(data){

            var res=jQuery.parseJSON(data);

            let arr = res.reduce((arr, item) => {

            let itemsFromSecondArray = res_cat.filter(({id_cat}) => id_cat == item.id_cat);

            if(itemsFromSecondArray.length){

                arr.push(...itemsFromSecondArray);

            } else arr.push(item);

            return arr;
            
            }, []);

            const res_subcategory = res.map(t1 => ({...t1, ...arr.find(t2 => t2.id_cat === t1.id_cat)}))

            var select_subcategory='';
            var list_subcat='';
            var select_list_subcat='';

            for (let i = 0; i < res_cat.length; i++) {

                select_list_subcat+='<option value="'+res_cat[i].id_cat+'">'+res_cat[i].name_cat+'</option>';
                
            }
        
            for (let i = 0; i < res_subcategory.length; i++) {

                select_subcategory+='<option value="'+res_subcategory[i].id_subcat+'">'+res_subcategory[i].name_subcat+'</option>';

                list_subcat+='<tr>'+
                '<td>'+res_subcategory[i].id_subcat+'</td>'+
                '<td><input class="image_subcategory_ileniadesign form-control input" type="text" value="'+res[i].name_subcat.replace(/"/g, '&quot;')+'" id="name_subcat_setting_'+res[i].id_subcat+'"></td>'+
                '<td>'+
                '<select class="styled-select append_subcat_cat_option" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;" id="id_subcat_cat_'+res[i].id_subcat+'" id_subcat_subcat='+res[i].id_cat+'>'+
                select_list_subcat+
                '</select>'+
                '</td>'+
                '</tr>';

            }

            $("#append_subcat_setting").append(list_subcat);

            $(".append_subcat_option").append(select_subcategory);

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

        $(".append_subcat_cat_option").each(function(data){

            var id=$(this).attr("id");
            var id_subcat_subcat=$(this).attr("id_subcat_subcat");

            $("#"+id).val(id_subcat_subcat).attr("selected");

        });

    }

    function update_setting(table, id, text){

        text=text.val();

        $.get("update_setting_image",{table:table, id:id, text:text},
        function(data){
            console.log(data);
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