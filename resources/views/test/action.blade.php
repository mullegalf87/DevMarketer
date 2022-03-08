<div class="w-100 p-3">
    <h1>Test</h1>
    <div class="d-flex flex-nowrap mb-3">
        <div class="group-form flex-grow-1 mr-3">
            <input type="text" name="name_prod" class="form-control" placeholder="Product name" id="name_prod"/>
        </div>
        <div class="group-form flex-grow-1 mr-3">
            <input type="text" name="price_prod" class="form-control" placeholder="Price name" id="price_prod"/>
        </div>
        <div class="group-form flex-grow-1">
            <button class="btn btn-primary w-100" onclick="add_prod()">Add</button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th class="text-center">Action</th>
            </thead>
            <tbody id="append_prod">
            </tbody>
        </table>
    </div>
</div>
<script>
    
    function start_test(){
        
        get_prod();
        
    }
    
    function add_prod(){
        
        var name_prod=$("#name_prod").val();
        var price_prod=$("#price_prod").val();
        
        $.get("/add_prod_test",{name_prod:name_prod, price_prod:price_prod},
        function(data){
            
            console.log("log_add_prod");
            console.log(data);
            get_prod();
            
        });
        
    }
    
    function get_prod(){
        
        $("#append_prod").empty();
        $("#tr_sum").remove();
        $.get("/get_prod_test",{},
        function(data){
            var sum_prod=0;
            console.log("log_get_prod");
            console.log(data);
            for(var i=0; i<data.length;i++){
                var append_prod=
                '<tr>'+
                '<td>'+data[i].id+'</td>'+
                '<td><input type="text" name="name_prod" class="form-control" id="name_prod_'+data[i].id+'" value="'+data[i].name_prod+'"/></td>'+
                '<td><input type="text" name="price_prod" class="form-control" id="price_prod_'+data[i].id+'" value="'+data[i].price_prod+'"/></td>'+
                '<td class="justify-content-center d-flex flex-nowrap">'+
                '<button class="btn btn-secondary mr-3" onclick="update_prod('+data[i].id+')">update</button>'+
                '<button class="btn btn-danger" onclick="delete_prod('+data[i].id+')">delete</button>'+
                '</td>'+
                '</tr>';
                $("#append_prod").append(append_prod);
                sum_prod+=parseFloat(data[i].price_prod);
            }
                    
                var append_prod_sum=
                '<tr id="tr_sum">'+
                '<td>Total: '+data.length+'</td>'+
                '<td></td>'+
                '<td>€ '+sum_prod+'</td>'+
                '<td></td>'+
                '</tr>';
                
                $("#append_prod").append(append_prod_sum);
                        
        });
                    
    }
                
    function update_prod(id){
        
        var name_prod=$("#name_prod_"+id).val();
        var price_prod=$("#price_prod_"+id).val();
        
        $.get("/update_prod_test",{id:id, name_prod:name_prod, price_prod:price_prod},
        function(data){
            
            console.log("log_update_prod");
            console.log(data);
            get_prod();
            
        });
        
    }
                
    function delete_prod(id){
        
        $.get("/delete_prod_test",{id:id},
        function(data){
            
            console.log("log_delete_prod");
            console.log(data);
            get_prod();
            
        });
        
    }
                
</script>