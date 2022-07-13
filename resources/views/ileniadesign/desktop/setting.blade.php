<style>
    #setting input{
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
        <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;" onclick="change_vis_setting('list_image')">IMAGE</h4>
        <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;" onclick="change_vis_setting('list_cat')">CATEGORY</h4>
        <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;" onclick="change_vis_setting('list_subcat')">SUBCATEGORY</h4>
        <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;" onclick="change_vis_setting('list_discount');">DISCOUNT</h4>
        <h4 class="text-center flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;" onclick="change_vis_setting('list_gift');">GIFT</h4>
    </div>

    <div id="list_image">
        <div class="d-flex flex-nowrap mt-3 mb-3">
            <input class="form-control mr-3" type="text" placeholder="Titolo" id="name"/>
            <input class="form-control mr-3" type="text" placeholder="Price A4" id="price_a4"/>
            <input class="form-control mr-3" type="text" placeholder="Price A3" id="price_a3"/>
            <input class="form-control mr-3" type="text" placeholder="Price A5" id="price_a5"/>
            <select class="d-block w-100" id="type_img_shopmyart" required style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;">
                <option disabled selected>Categoria</option>
            </select>
            <select class="d-block w-100" id="subtype_img_shopmyart" required style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;">
                <option disabled selected>Sottocategoria</option>
            </select>
            <input class="form-control" accept="image/*" type="file" id="imgInp" multiple=""/>
        </div>
        <div class="gallery d-flex"></div>
        <button class="btn btn-primary w-100 mb-3 save_button save_image_button" onclick="send_data_add_prod()">Aggiungi</button>
        <table class="table">
            <thead>
                <th>Id</th>
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
    </div>
    
    <div id="list_cat" class="d-none">
        <div class="d-flex flex-nowrap mt-3 mb-3">
            <input class="form-control" type="text" placeholder="Categoria" id="name_cat"/>
        </div>
        <button class="btn btn-primary w-100 mb-3 save_button save_image_button" onclick="send_data_cat_prod()">Aggiungi</button> 
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Azioni</th>
            </thead>
            <tbody class="mt-5" id="append_cat_setting">
            </tbody>
        </table>
    </div>

    <div id="list_subcat" class="d-none">
        <div class="d-flex flex-nowrap mt-3 mb-3">
            <input class="form-control" type="text" placeholder="Sottocategoria" id="name_subcat"/>
            <select class="d-block w-100" id="type_cat_shopmyart" required style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;">
                <option disabled selected>Categoria</option>
            </select>
        </div>
        <button class="btn btn-primary w-100 mb-3 save_button save_image_button" onclick="send_data_subcat_prod()">Aggiungi</button>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Categoria associata</th>
                <th>Azioni</th>
            </thead>
            <tbody class="mt-5" id="append_subcat_setting">
            </tbody>
        </table>
    </div>

    <div id="list_discount" class="d-none">
        <div class="d-flex flex-nowrap mt-3 mb-3">
            <input class="form-control mr-3" type="text" placeholder="Codice sconto" id="name_discount"/>
            <input class="form-control" type="text" placeholder="% sconto" id="off_discount"/>
        </div>
        <button class="btn btn-primary w-100 mb-3 save_button save_image_button" onclick="send_data_discount_prod()">Aggiungi</button>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Codice sconto</th>
                <th>% Sconto</th>
                <th>Attivo</th>
                <th>Azioni</th>
            </thead>
            <tbody class="mt-5" id="append_discount_setting">
            </tbody>
        </table>
    </div>

    <div id="list_gift" class="d-none">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Desc</th>
                <th>Price</th>
                <th>Multiple</th>
                <th>Status</th>
            </thead>
            <tbody class="mt-5" id="append_gift_setting">
            </tbody>
        </table>
    </div>

</section>
<script>

    //.not("#discount_code") $(document).on('keyup' perchè se lo prende anche da altri input
    function start_function_setting(){

        get_all_image();
        
    }

    var old_section="list_image";

    function change_vis_setting(section){

        $("#"+old_section).addClass("d-none");

        old_section=section;

        $("#"+section).removeClass("d-none");

    }

    $(document).ready(function(){ 

        var x_timer;

        $(document).on('keyup', '#setting .input', function (e) {
            clearTimeout(x_timer);
            var classFrom=$(this)[0].classList[0];
            var complete_id=$(this).attr("id");
            var id = $(this).attr("id").split("_")[3];
            var text=$("#"+$(this).attr("id"));
            x_timer = setTimeout(function(){
                update_setting(classFrom, complete_id, id, text);
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
            '<tr id="tr_'+res[i].id+'">'+
            '<td class="flex-grow-1" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;vertical-align: middle;">'+res[i].id+'</td>'+
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
            '<td class="flex-grow-1" style="vertical-align: middle;">'+
            '<p class="p-0 m-0" style="text-decoration: underline;text-underline-offset: 1px;color:#dbd3d3" onclick="delete_image(\''+res[i].id+'\')">Remove</p>'+
            '</td>'+
            '<td class="flex-grow-1" style="vertical-align: middle;">'+
            '<select class="styled-select append_cat_option" table="image_shopmyart_ileniadesign" column="type_img" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;" id="id_image_cat_'+res[i].id+'" id_cat='+res[i].id_cat+'>'+
            '</select>'+
            '</td>'+
            '<td class="flex-grow-1" style="vertical-align: middle;">'+
            '<select class="styled-select append_subcat_option" table="image_shopmyart_ileniadesign" column="subtype_image" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;" id="id_image_subcat_'+res[i].id+'" id_subcat='+res[i].id_subcat+'>'+
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
            var list_cat='';
        
            for (let i = 0; i < res.length; i++) {

                select_category+='<option value="'+res[i].id_cat+'">'+res[i].name_cat+'</option>';

                list_cat+='<tr>'+
                    '<td style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;vertical-align: middle;">'+res[i].id_cat+'</td>'+
                    '<td><input class="image_category_ileniadesign form-control input" type="text" value="'+res[i].name_cat.replace(/"/g, '&quot;')+'" id="name_cat_setting_'+res[i].id_cat+'"></td>'+
                    '<td class="flex-grow-1" style="vertical-align: middle;">'+
                    '<p class="p-0 m-0" style="text-decoration: underline;text-underline-offset: 1px;color:#dbd3d3" onclick="delete_cat_subcat(\''+res[i].id_cat+'\',\'category\')">Remove</p>'+
                    '</td>'+
                    '</tr>';
                
            }

            get_subcategory_image(res);

            $("#append_cat_setting").append(list_cat);

            $(".append_cat_option").append(select_category);

            $("#type_img_shopmyart").append(select_category);

            $("#type_cat_shopmyart").append(select_category);

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
                '<td style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;vertical-align: middle;">'+res_subcategory[i].id_subcat+'</td>'+
                '<td><input class="image_subcategory_ileniadesign form-control input" type="text" value="'+res[i].name_subcat.replace(/"/g, '&quot;')+'" id="name_subcat_setting_'+res[i].id_subcat+'"></td>'+
                '<td style="vertical-align: middle;">'+
                '<select class="styled-select append_subcat_cat_option" table="image_subcategory_ileniadesign" column="id_cat" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;" id="id_subcat_cat_'+res[i].id_subcat+'" id_subcat_subcat='+res[i].id_cat+'>'+
                select_list_subcat+
                '</select>'+
                '</td>'+
                '<td class="flex-grow-1" style="vertical-align: middle;">'+
                '<p class="p-0 m-0" style="text-decoration: underline;text-underline-offset: 1px;color:#dbd3d3" onclick="delete_cat_subcat(\''+res[i].id_subcat+'\',\'subcategory\')">Remove</p>'+
                '</td>'+
                '</tr>';

            }

            $("#append_subcat_setting").append(list_subcat);

            $(".append_subcat_option").append(select_subcategory);

            $("#subtype_img_shopmyart").append(select_subcategory);

            selected_attribute_subcat();

            get_discount_code();

            get_gift_code();

        });

    }

    function get_discount_code(){

        $("#append_discount_setting").empty();

        $.get("get_discount_code_ileniadesign",{},
        function(data){

            var res=jQuery.parseJSON(data);
            var list_discount="";
            var select_discount;
            
            for (let i = 0; i < res.length; i++) {

                if (res[i].end_discount==0) {

                    select_discount+='<option value="'+res[i].end_discount+'" selected>Sì</option><option value="1">No</option>';
                    
                } else {

                    select_discount+='<option value="0">Sì</option><option value="'+res[i].end_discount+'" selected>No</option>';
                    
                }

                list_discount+='<tr>'+
                '<td style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;vertical-align: middle;">'+res[i].id+'</td>'+
                '<td><input class="image_discount_ileniadesign form-control input" type="text" value="'+res[i].name.replace(/"/g, '&quot;')+'" id="name_discount_setting_'+res[i].id+'"></td>'+
                '<td><input class="image_discount_ileniadesign form-control input" type="text" value="'+res[i].off+'" id="off_discount_setting_'+res[i].id+'"></td>'+
                '<td style="vertical-align: middle;"><select class="styled-select" table="image_discount_ileniadesign" column="end_discount" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;" id="end_discount_setting_'+res[i].id+'">'+
                    select_discount+
                '</select></td>'+
                '<td class="flex-grow-1" style="vertical-align: middle;">'+
                '<p class="p-0 m-0" style="text-decoration: underline;text-underline-offset: 1px;color:#dbd3d3" onclick="delete_cat_subcat(\''+res[i].id+'\',\'discount\')">Remove</p>'+
                '</td>'+
                '</tr>';

                }

                $("#append_discount_setting").append(list_discount);

                change_select_option();

        });
    }

    function get_gift_code(){
        
        $("#append_gift_setting").empty();
        
        $.get("get_gift_ileniadesign",{},
        function(data){
            
            var res=jQuery.parseJSON(data);
            var list_gift="";
            var select_status;
            
            for (let i = 0; i < res.length; i++) {
                
                if (res[i].status==0) {
                    
                    select_status+='<option value="'+res[i].status+'" selected>Sì</option><option value="1">No</option>';
                    
                } else {
                    
                    select_status+='<option value="0">Sì</option><option value="'+res[i].status+'" selected>No</option>';
                    
                }
                
                list_gift+='<tr>'+
                '<td style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;vertical-align: middle;">'+res[i].id+'</td>'+
                '<td><input class="image_gift_ileniadesign form-control input" type="text" value="'+res[i].name.replace(/"/g, '&quot;')+'" id="name_gift_setting_'+res[i].id+'"></td>'+
                '<td><input class="image_gift_ileniadesign form-control input" type="text" value="'+res[i].price+'" id="price_gift_setting_'+res[i].id+'"></td>'+
                '<td><input class="image_gift_ileniadesign form-control input" type="text" value="'+res[i].multiple+'" id="multiple_gift_setting_'+res[i].id+'"></td>'+
                '<td style="vertical-align: middle;"><select class="styled-select" table="image_gift_ileniadesign" column="status" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;" id="end_status_setting_'+res[i].id+'">'+
                select_status+
                '</select></td>'+
                '</tr>';
                
            }
            
            $("#append_gift_setting").append(list_gift);
            
            change_select_option();
            
        });
    }
    
    var file;

    imgInp.onchange = evt => {

        [file] = imgInp.files

    }
    
    var prod_file=[];

    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {
        prod_file=[];
        $(".append_image_clear").remove();
            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
        
                    var reader = new FileReader();

                    reader.onload = function(event) {
                    
                        $($.parseHTML('<img class="append_image_clear mr-3 mb-3" style="object-fit: cover;margin-bottom: 3px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);  

                    }

                    reader.readAsDataURL(input.files[i]);

                    prod_file.push(input.files[i]);

                }
            }

        };

        $('#imgInp').on('change', function() {
            imagesPreview(this, 'div.gallery');
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
            
        });

    });

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

    function update_setting(table, complete_id, id, text){
        
        complete_id=complete_id.split("_")[0];
        
        text=text.val();
        
        $.get("update_setting_image",{table:table, complete_id:complete_id, id:id, text:text},
        function(data){
            console.log(data);
        });
        
    }

    function change_select_option(){
        
        $(".styled-select").change(function(data){
            var id=$(this).attr("id").split("_")[3];
            var table=$(this).attr("table");
            var column=$(this).attr("column");
            var value=$(this).val();
            
            $.get("update_setting_image_select",{id:id, table:table, column:column, value:value},
            function(data){

                console.log(data);

            });
            
        })
        
    }

    function send_data_add_prod() {

        $(".save_image_button").text("Wait...");

        var name_image=$("#name").val();
        var price_a4=$("#price_a4").val();
        var price_a3=$("#price_a3").val();
        var price_a5=$("#price_a5").val();
        var type_img_shopmyart=$("#type_img_shopmyart").val();
        var subtype_img_shopmyart=$("#subtype_img_shopmyart").val();

        $.get("/add_image_ileniadesign",{name_image:name_image, price_a4:price_a4, price_a3:price_a3, price_a5:price_a5, type_img_shopmyart:type_img_shopmyart, subtype_img_shopmyart:subtype_img_shopmyart},
        function(data){
            var res=jQuery.parseJSON(data);
            var id_prod=res;
            var position=res;

            var formData = new FormData();

            for (var i = 0; i < prod_file.length; i++) {

            formData.append('prod_file[]', prod_file[i]);

            }

            formData.append('id_prod', id_prod);

            setTimeout(function(){
            $.ajax({
                url : "/ileniadesign_repo/other_function/add_product.php",
                type: 'POST',
                data : formData,
                processData: false, 
                contentType: false,  
                cache:false,
                success : function(e) {

                $.get("/update_image_ileniadesign",{position:position, id_image:id_prod, image_file:e},
                    function(data){

                        get_all_image();

                    });

                },
                error: function (data, textStatus, errorThrown) {

                },
            });
            },2000);

        });

    }

    function send_data_cat_prod(){

        var name_cat=$("#name_cat").val();

        $.get("/add_data_cat_prod_ileniadesign",{name_cat:name_cat},
        function(data){

            get_category_image();

        });

    }

    function send_data_subcat_prod(){

        var name_subcat=$("#name_subcat").val();
        var id_cat=$("#type_cat_shopmyart").val();

        $.get("/add_data_subcat_prod_ileniadesign",{name_subcat:name_subcat, id_cat:id_cat},
        function(data){

            get_category_image();

        });

    }

    function send_data_discount_prod(){

        var name_discount=$("#name_discount").val();
        var off_discount=$("#off_discount").val();

        $.get("/add_data_discount_prod_ileniadesign",{name_discount:name_discount, off_discount:off_discount},
        function(data){

            get_category_image();

        });

    }

    function delete_image(id_image){

        $.get("/delete_image_ileniadesign",{id_image:id_image},
        function(data){

            get_all_image();

        });

    }

    function delete_cat_subcat(id, type){

        $.get("/delete_cat_subcat_ileniadesign",{id:id, type:type},
        function(data){

            get_category_image();

        });

    }

    

</script>