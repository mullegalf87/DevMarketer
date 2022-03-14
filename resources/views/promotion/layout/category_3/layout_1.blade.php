<!DOCTYPE html>
<html>
<head>
  <title>layout_3_1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <!-- favicon -->
  <link rel="icon" href="uploads/logo/favicon_small.png" type="image/png">
  <!-- jquery 3.5 jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- cookie popup jquery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <!-- bootstrap 4.5 bootstrap-->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- input file bootstrap-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/piexif.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/sortable.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
  <!-- boxicons -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css'>
  <!-- tether -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <!-- fontawesome -->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  <script src="https://use.fontawesome.com/e07be0b1c4.js"></script>
  <!-- imagecompressor -->
  <script type="text/javascript" src="js/image-compressor.js"></script>
</head>
<style id="style_layout_1" type="text/css">
   /* start layout Styles*/

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html {
    font-size: 16px;
    font-family: "Raleway", sans-serif;
    color: #555;
  }

  ul,
  nav {
    list-style: none;
  }

  a {
    text-decoration: none;
    opacity: 0.75;
    color: #fff;
  }

  a:hover {
    opacity: 1;
  }

  a.btn {
    border-radius: 4px;
    text-transform: uppercase;
    font-weight: bold;
    text-align: center;
    background-color: #e07e7b;
    opacity: 1;
    transition: all 400ms;
  }

  a.btn:hover {
    background-color: #ce5856;
  }

  section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 100px 80px;
  }

  section:not(.hero):nth-child(even) {
    background-color: #f5f5f5;
  }

  .grid {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  hr {
    width: 250px;
    height: 3px;
    background-color: #e07e7b;
    border: 0;
    margin-bottom: 50px;
    margin-top: 50px;
  }

  /*start è sempre il logo image-1*/
  .image-1 {
    position: absolute;
    top: 20px; left: 20px;
    background: #92c7eb;
    background-image: url("https://images.unsplash.com/photo-1505852903341-fc8d3db10436?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=900&fit=crop&s=e2f72e62d5f4f04256dd9305d5f51f3c");
    background-size: cover;
    background-position: center;
    border: none;
    padding: 20px;
    width: 100px;
    border-radius: 900px;
    height: 100px;
    transition: all 0.5s;
    cursor: pointer;
    z-index: 2;
  }
  /*end è sempre il logo image-1*/

  /*start è sempre background image-2*/
  .image-2 {
    position: absolute;
    top: 20px; right: 20px;
    background: #92c7eb;
    background-image: url("https://images.unsplash.com/photo-1505535162959-9bbcb4ab22d6?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=900&fit=crop&s=2feeaf89ad55829f92c4bbc6ca8e83ce");
    background-size: cover;
    background-position: center;
    border: none;
    padding: 20px;
    width: 100px;
    border-radius: 10px;
    height: 100px;
    transition: all 0.5s;
    cursor: pointer;
    z-index: 2;
  }

  .image-2-reply {
    background-image: url("https://images.unsplash.com/photo-1505535162959-9bbcb4ab22d6?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=900&fit=crop&s=2feeaf89ad55829f92c4bbc6ca8e83ce");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }

  /*end è sempre background image-2*/

  .image-3 {
    background-image: url("https://images.unsplash.com/photo-1475483768296-6163e08872a1?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=900&fit=crop&s=20b3b1c3caef8c619ac3c75c07a7eafb");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }

  .image-4 {
    background-image: url("https://images.unsplash.com/photo-1490576198307-6ff97609a0cc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=900&fit=crop&s=a0dbd168637edc2cfdac3715ab23d519");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }

  .image-5 {
    background-image: url("https://images.unsplash.com/photo-1505483531331-fc3cf89fd382?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=900&fit=crop&s=4f305bbc0243f81f1bf6053a62d76297");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }

  .image-6 {
    background-image: url("https://images.unsplash.com/photo-1505852903341-fc8d3db10436?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=900&fit=crop&s=e2f72e62d5f4f04256dd9305d5f51f3c");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }


  section h3.title {
    text-transform: capitalize;
    font: bold 48px "Amatic SC", sans-serif;
    margin-bottom: 30px;
    text-align: center;
  }

  section p {
    max-width: 775px;
    line-height: 2;
    padding: 0 20px;
    margin-bottom: 30px;
    text-align: center;
  }

  @media (max-width: 800px) {
    section {
      padding: 50px 20px;
    }
  }

  /*Header Styles*/

  header {
    position: absolute;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 35px 100px 0;
    animation: 1s fadein 0.5s forwards;
    opacity: 0;
    color: #fff;
    z-index: 2;
  }

  @keyframes fadein {
    100% {
      opacity: 1;
    }
  }

  header h2 {
    font-family: "Amatic SC", sans-serif;
  }

  header nav {
    display: flex;
    margin-right: -15px;
  }

  header nav li {
    margin: 0 15px;
  }

  @media (max-width: 800px) {
    header {
      padding: 20px 50px;
      flex-direction: column;
    }

    header h2 {
      margin-bottom: 15px;
    }
  }

  /*Hero Styles*/

  .hero {
    position: relative;
    justify-content: center;
    text-align: center;
    min-height: 100vh;
    color: #fff;
  }

  .hero h1 {
    font: 72px "Amatic SC", sans-serif;
    text-shadow: 2px 2px rgba(0, 0, 0, 0.3);
    margin-bottom: 15px;
  }

  .hero h3 {
    font: 28px "Raleway", sans-serif;
    font-weight: 300;
    text-shadow: 2px 2px rgba(0, 0, 0, 0.3);
    margin-bottom: 40px;
  }

  .hero a.btn {
    padding: 20px 46px;
  }

  .hero-content-area {
    opacity: 0;
    margin-top: 100px;
    animation: 1s slidefade 1s forwards;
    z-index: 3;
  }

  @keyframes slidefade {
    100% {
      opacity: 1;
      margin: 0;
    }
  }

  @media (max-width: 800px) {
    .hero {
      min-height: 600px;
    }

    .hero h1 {
      font-size: 48px;
    }

    .hero h3 {
      font-size: 24px;
    }

    .hero a.btn {
      padding: 15px 40px;
    }
  }

  /*Destinations Section*/

  .destinations .grid li {
    height: 350px;
    padding: 20px;
    background-clip: content-box;
    background-size: cover;
    background-position: center;
  }

  .destinations .grid li.small {
    flex-basis: 30%;
  }

  .destinations .grid li.large {
    flex-basis: 70%;
  }

  @media (max-width: 1100px) {
    .destinations .grid li.small,
    .destinations .grid li.large {
      flex-basis: 50%;
    }
  }

  @media (max-width: 800px) {
    .destinations .grid li.small,
    .destinations .grid li.large {
      flex-basis: 100%;
    }
  }

  /*Packages Section*/

  .packages .grid li {
    padding: 50px;
    flex-basis: 50%;
    text-align: center;
  }

  .packages .grid li i {
    color: #e07e7b;
  }

  .packages .grid li h4 {
    font-size: 30px;
    margin: 25px 0;
  }

  @media (max-width: 800px) {
    .packages .grid li {
      flex-basis: 100%;
      padding: 20px;
    }
  }

  /*Testimonials Section*/

  .testimonials .quote {
    font-size: 22px;
    font-weight: 300;
    line-height: 1.5;
    margin: 40px 0 25px;
  }

  @media (max-width: 800px) {
    .testimonials .quote {
      font-size: 18px;
      margin: 15px 0;
    }

    .testimonials .author {
      font-size: 14px;
    }
  }

  /*Contact Section*/

  .contact form {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    width: 60%;
  }

  .contact form .btn {
    padding: 18px 42px;
  }

  .contact form input {
    padding: 15px;
    font-size: 18px;
    color: #555;

  }

  @media (max-width: 1000px) {
    .contact form input {
      flex-basis: 100%;
      margin: 0 0 20px 0;
    }
  }

  /*Footer Section*/

  footer {
    display: flex;
    align-items: center;
    justify-content: space-around;
    background-color: #555;
    color: #fff;
    padding: 20px 20px;
  }

  footer ul {
    display: flex;
  }

  footer ul li {
    margin-left: 16px;
  }

  footer p {
    text-transform: uppercase;
    font-size: 14px;
    opacity: 0.6;
    align-self: center;
  }

  @media (max-width: 1100px) {
    footer {
      flex-direction: column;
    }

    footer p {
      text-align: center;
      margin-bottom: 20px;
    }

    footer ul li {
      margin: 0 8px;
    }
  }
  /* end layout Styles MI*/
</style>
<body>
<div id="layout_3_1">
  <section id="" class="hero image-2-reply">
    @if( auth()->guard('users_promotion')->check() )
    <input type='file' class='verborgen_file_1 block_edit_text' style="display: none;" />
    <div class="image-1 dashed-edit image_edit block_edit_text" role="group" aria-label="FAB Menu"></div>
    <input type='file' class='verborgen_file_2 block_edit_text' style="display: none;" />
    <div class="image-2 dashed-edit image_edit block_edit_text" role="group" aria-label="FAB Menu"></div>
    @else
    <div class="image-1" role="group" aria-label="FAB Menu"></div>
    @endif
    <div class="hero-content-area">
      @if( auth()->guard('users_promotion')->check() )
      <h1 class="dashed-edit text_edit" id="sectionedit_1">Life is a party!
      </h1>
      <h3 class="dashed-edit text_edit" id="sectionedit_2">Unmissable Adventure Tours With Your Friends
      </h3>
      @else
      <h1 id="sectionedit_1" class="text-center">Life is a party! s</h1>
      <h3 id="sectionedit_2" class="text-center">Unmissable Adventure Tours With Your Friends</h3>
      @endif
      <a class="btn" onclick="scroll_page_tag('section_3')">Contattaci</a>
    </div>
  </section>

  <section id="" class="destinations">
    @if( auth()->guard('users_promotion')->check() )
    <h4 class="dashed-edit text_edit" id="sectionedit_3">LA PROMO PREVEDE COLORE +COLOR GLOSS+PIEGA A SOLI 49 EURO!
    </h4>
    <h6 class="dashed-edit text_edit" id="sectionedit_4">E se vuoi aggiungere a questo un  servizio di schiaritura, potrai averlo con il 20% DI SCONTO.
    </h6>
    <div class="input-group mb-3" id="divedit_4" style="display: none;">
      <input type="text" class="form-control" id="input_4" value="E se vuoi aggiungere a questo un  servizio di schiaritura, potrai averlo con il 20% DI SCONTO.">
      <div class="input-group-append">
        <button class="btn btn-outline-danger" type="button" onclick="edit_element('4')">Modifca</button>
      </div>
    </div>
    <hr>
    <ul id="type_image_0" class="grid d-none">
      <input type='file' class='verborgen_file_3 block_edit_text' style="display: none;" />
      <li class="image-3 dashed-edit image_edit small block_edit_text">
      </li>
      <input type='file' class='verborgen_file_4 block_edit_text' style="display: none;" />
      <li class="image-4 dashed-edit image_edit block_edit_text large">
      </li>
      <input type='file' class='verborgen_file_5 block_edit_text' style="display: none;" />
      <li class="image-5 dashed-edit image_edit block_edit_text large">
      </li>
      <input type='file' class='verborgen_file_6 block_edit_text' style="display: none;" />
      <li class="image-6 dashed-edit image_edit block_edit_text small">
      </li>
    </ul>
    @else
    <h4 id="sectionedit_3" class="text-center">LA PROMO PREVEDE COLORE +COLOR GLOSS+PIEGA A SOLI 49 EURO!</h4>
    <h5 id="sectionedit_4" class="text-center">E se vuoi aggiungere a questo un  servizio di schiaritura, potrai averlo con il 20% DI SCONTO.
    </h5>
    <hr>
    <ul id="type_image_0" class="grid d-none">
      <li class="small image-3"></li>
      <li class="large image-4"></li>
      <li class="large image-5"></li>
      <li class="small image-6"></li>
    </ul>
    @endif
    <div id="type_image_1" class="grid carousel slide d-none" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="height: 50vh">
          <div class="image-3" style="height: 100%"></div>
        </div>
        <div class="carousel-item" style="height: 50vh">
          <div class="image-4" style="height: 100%"></div>
        </div>
        <div class="carousel-item" style="height: 50vh">
          <div class="image-5" style="height: 100%"></div>
        </div>
        <div class="carousel-item" style="height: 50vh">
          <div class="image-6" style="height: 100%"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="" class="contact">
    @if( auth()->guard('users_promotion')->check() )
    <h3 class="dashed-edit text_edit" id="sectionedit_5">COSA ASPETTI?
    </h3>
    <h5 class="dashed-edit text_edit" id="sectionedit_6">LASCIA I TUOI DATI, TI CONTATTEREMO ENTRO 48H PER FISSARE IL TUO APPUNTAMENTO.
    </h5>
    @else
    <h3 class="" id="sectionedit_5" class="text-center">COSA ASPETTI?</h3>
    <h5 id="sectionedit_6" class="text-center">LASCIA I TUOI DATI, TI CONTATTEREMO ENTRO 48H PER FISSARE IL TUO APPUNTAMENTO.</h5>
    @endif
    <hr>
    <form class="d-flex w-100" style="flex-wrap: wrap">
      <input class="w-100 mb-3" type="name" placeholder="Name" id="input_name">
      <input class="w-100 mb-3" type="lastname" placeholder="Lastname" id="input_lastname">
      <input class="w-100 mb-3" type="cellular" placeholder="Cellular" id="input_cellular">
      <input class="w-100 mb-3" type="email" placeholder="Email" id="input_email">
      <a class="btn" onclick="register_user()">Registrati</a>
    </form>
    <hr>
    <div class="row text-center d-flex w-100" style="flex-wrap: wrap;">
     <div class="col-md-4 col-sm-6 col-xs-12" style="">
        <div class="card border-0">
          <div class="card-body text-center">
            <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
            <h4 class="text-uppercase mb-5">contattaci</h4>
            @if( auth()->guard('users_promotion')->check() )
            <p class="dashed-edit text_edit" id="sectionedit_7">+8801683615582,+8801750603409</p>
            @else
            <p id="sectionedit_7" class="text-center">+8801683615582,+8801750603409</p>
            @endif
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12" style="">
        <div class="card border-0">
          <div class="card-body text-center">
            <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
            <h4 class="text-uppercase mb-5">puoi trovarci</h4>
            @if( auth()->guard('users_promotion')->check() )
            <address class="dashed-edit text_edit" id="sectionedit_8">Suite 02, Level 12, Sahera Tropical Center </address>
            @else
            <address id="sectionedit_8" class="text-center">Suite 02, Level 12, Sahera Tropical Center </address>
            @endif
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12" style="">
        <div class="card border-0">
          <div class="card-body text-center">
            <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
            <h4 class="text-uppercase mb-5">email</h4>
            @if( auth()->guard('users_promotion')->check() )
            <p class="dashed-edit text_edit" id="sectionedit_9">test@ciao.it - www.test.it</p>
            @else
            <p id="sectionedit_9" class="text-center">test@ciao.it - www.test.it</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer id="">
    <div class="" style="">
      <ul class="list-inline mb-0" style="justify-content: center;">
        <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-square fa-2x"></i></a></li>
        <li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
      </ul>
      <ul class="list-inline mb-0 text-center">
        <li class="list-inline-item">
          @if( auth()->guard('users_promotion')->check() )
          <p class="dashed-edit text_edit text-center" id="sectionedit_10" style="">© Copyright 2021 - PanemaLab.  All rights reserved. </p>
          @else
          <p id="sectionedit_10" class="text-center" style="margin-bottom:0;color: white">© Copyright 2021 - PanemaLab.  All rights reserved. </p>
          @endif
        </li>
      </ul>
    </div>
  </footer>
</div>

@include("promotion.layout")
</body>
</html>