<style>

</style>

<div class="p-3">
    <label id="name_page"></label>
    
</div>

<script>
    function start_function_actiondetail(num_page_detail){
        $("#name_page").text("{{ __('test/lang.actiondetail') }} "+num_page_detail);
    }
</script>