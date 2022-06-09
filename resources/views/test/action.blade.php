<style>

</style>

<div class="p-3">

    <h1>Server 2</h1>

    <div class="d-flex flex-nowrap">

        <input class="form-control mr-3" name="token" placeholder="Paste token" id="token"/>

        <button class="btn btn-primary" onclick="assign_token_api()">Assign token</button>

    </div>  

    <label id="success"></label>

</div>

<script>

    function assign_token_api(){

        var token=$("#token").val();

        var object={
            token:token,
        };  

        add_token_api(object);

        // $("#success").text(add_token_api(object));

    }



</script>