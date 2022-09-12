<style>
    #requests a{
        font-family: 'Futura PT', sans-serif;
        font-size: 25px!important;
        white-space: normal!important;
        display: contents!important;
    }
</style>
<section class="container-fluid p-0" style="background-color: #dbd3d3;">
    <div class="d-flex flex-wrap" >
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <h4 class="text-center" style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;padding-top:10%">CONTATTAMI</h4>
            <img style="width: 40%!important;" class="img-corner m-auto" src="ileniadesign_repo/1.jpeg">
        </div>
        <h1 class="text-center" style="font-size: 25px!important;white-space: normal!important;padding:5%">Hai un'idea in mente e ti piacerebbe svilupparla dal mio tocco artistico? Mettiti in contatto con me.
            In alternativa, puoi scrivermi direttamente a <a href="mailto:ileniazitodesign@gmail.com"> ileniazitodesign@gmail.com</a>.
            Clicca <a href="ileniadesign_repo/portfolio.pdf" download=""> qui </a> per visualizzare il mio portfolio</h1>
        <div class="col-md-4">
        </div>
        <div class="w-100" style="padding: 4%;">
            <div class="d-flex flex-nowrap w-100">
                <div class="col-md-6">
                    <input class="form-control" placeholder="Name" id="name_request" style="float: right;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                </div>
                <div class="col-md-6">
                    <input class="form-control" placeholder="Email" id="email_request" style="float: left;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <textarea class="form-control" placeholder="Message" id="message_request" style="background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;"></textarea>
            </div>
            <div class="col-md-12 mt-3 mb-3">
                <button id="change_submit_button" onclick="send_request()" class="btn btn-primary text-left w-100">INVIA  </button>
            </div>
        </div>
    </div>
</section>

<script>

    function send_request(){

        var name = $("#name_request").val();
        var email = $("#email_request").val();
        var message = $("#message_request").val();
    
        if (email!="") {

            console.log(name);
    
            $.ajax({
                url: '/ileniadesign_repo/other_function/contact_ileniadesign.php',
                type: 'POST',
                data: {name: name, email: email, message:message},
                success: function(data){
                    console.log(data);
                    $("#name_request").val("");
                    $("#email_request").val("");
                    $("#message_request").val("");
                    $('#change_submit_button').text("Saved!");

                    setTimeout(function(){ 

                        $('#change_submit_button').text("Save");

                    }, 2000);
                }
            });
    
        } else{
    
          $("#email_request").focus();
          
        }
    
    }

</script>