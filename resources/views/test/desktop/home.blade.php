<style>

</style>
<div class="p-3">
    Home
</div>
<script>

    get_product_test();
    function get_product_test(){
        $.get("get_product_test",{},
        function(data){
            var res=jQuery.parseJSON(data);
            console.log(data)
            for (let i = 0; i < res.length; i++) {
                const element = res[i];                
            }
        });
    }

    // async function First(){
    //     console.log('Firts Func started');
    //     await Second();
    //     console.log('End');
    // }
    // function Second(){
    //     return new Promise(async (resolve,reject)=>{
    //         console.log('At Second Function');
    //         await Third();
    //         console.log('Second func end');
    //         resolve('Data From Second function');
    //     });
    // }
    // function Third(){
    //     return new Promise(async (resolve,reject)=>{
    //         console.log('At Third Function');
    //         await Fourth();
    //         console.log('Thidr func end');
    //         resolve('Data From Third function');
    //     });
    // }
    // function Fourth(){
    //     return new Promise((resolve,reject)=>{
    //         console.log('At Fourth Function');
    //         console.log('Fourth func end');
    //         resolve('Data From Fourth function');
    //     });
    // }
    // First();

</script>