<style>

</style>

<div class="p-3">
    Home
</div>

<script>
    function get_data(){
        $.get("get_data",{},
            function(data){
                var res=jQuery.parseJson(data);
                for (let i = 0; i < res.length; i++) {
                    const element = res[i];
                }
        });
    }

    function create_data(){
        var nameprod=$("#nameprod").val();
        var priceprod=$("#priceprod").val();
        $.get("create_data",{nameprod:nameprod, priceprod:priceprod},
            function(data){
                console.log(data);
        });
    }

    function update_data(){
        var idprod=12;
        var priceprod=$("#priceprod").val();
        $.get("update_data",{idprod:idprod, priceprod:priceprod},
        function(data){
            console.log(data);
        });
    }

    function delete_data(){
        var idprod=12;
        $.get("delete_data",{idprod:idprod},
        function(data){
            console.log(data);
        });
    }
</script>