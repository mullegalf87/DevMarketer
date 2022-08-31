<style>

</style>

<div class="p-3">
    {{ __('test/lang.action') }}
    <label id="success"></label>
</div>

<script>
    //api sincronizzazione giacenze
    $(function() {
        var token={
            token:"GVeefur5x0iAeO",
        };  
        var product=[{name_prod:"cell", price_prod:3.2, stock_prod:13},{name_prod:"pc", price_prod:160, stock_prod:3}];
        check_token_api(token, product);
    });

</script>