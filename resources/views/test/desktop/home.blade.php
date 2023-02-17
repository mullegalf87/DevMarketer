<style>

</style>

<div class="p-3">
    Home
</div>
<div class="container">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Lastname</th>
            </tr>
        </thead>
        <tbody>
            @php
                $posts = $posts=DB::table("lesson_php")->get();
            @endphp
            @include('components.card', ['posts' => $posts])
        </tbody>
    </table>
</div>

<script>

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

    function get_data(){
        $.get("get_data",{},
            function(data){
                var res=jQuery.parseJson(data);
                console.log(res);
        });
    }

</script>