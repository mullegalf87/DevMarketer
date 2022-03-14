<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>layout_3_2</title>
  <link rel="icon" type="image/x-icon" href="promotion_repo/category_2/layout_2/assets/favicon.ico" />
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
  <!-- carousel -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- fontawesom -->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  <!-- style css layout -->
  <link href="promotion_repo/category_2/layout_2/css/styles.css" rel="stylesheet" />
  <!-- script js layout -->
  <script src="promotion_repo/category_2/layout_2/js/scripts.js"></script>
  <!-- jquery 3.5 jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/e07be0b1c4.js"></script>
  <!-- imagecompressor -->
  <script type="text/javascript" src="js/bookmap/image-compressor.js"></script>
  <!-- bootstrap 5 per carousel -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<style type="text/css">
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
    background-image: url("promotion_repo/category_2/layout_2/assets/img/bg-masthead.jpg");
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
  /*end è sempre background image-2*/

  .image-3 {
    background-image: url("promotion_repo/category_2/layout_2/assets/img/portfolio/thumbnails/1.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 182.17px;
  }

  .image-4 {
    background-image: url("promotion_repo/category_2/layout_2/assets/img/portfolio/thumbnails/2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 182.17px;
  }

  .image-5 {
    background-image: url("promotion_repo/category_2/layout_2/assets/img/portfolio/thumbnails/3.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 182.17px;
  }

  .image-6 {
    background-image: url("promotion_repo/category_2/layout_2/assets/img/portfolio/thumbnails/4.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 182.17px;
  }

  .image-7 {
    background-image: url("promotion_repo/category_2/layout_2/assets/img/portfolio/thumbnails/5.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 182.17px;
  }

  .image-8 {
    background-image: url("promotion_repo/category_2/layout_2/assets/img/portfolio/thumbnails/6.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 182.17px;
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

</style>
<body id="page-top">
  <div id="layout_3_2">

    <header id="section_1" class="masthead image-2-reply">
      @if( auth()->guard('users_promotion')->check() )
      <input type='file' class='verborgen_file_1 block_edit_text' style="display: none;" />
      <div class="image-1 dashed-edit image_edit block_edit_text" role="group" aria-label="FAB Menu"></div>
      <input type='file' class='verborgen_file_2 block_edit_text' style="display: none;" />
      <div class="image-2 dashed-edit image_edit block_edit_text" role="group" aria-label="FAB Menu"></div>
      @else
      <div class="image-1" role="group" aria-label="FAB Menu"></div>
      @endif
      <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
          <div class="col-lg-8 align-self-end" style="z-index: 1">
            <h1 class="dashed-edit text_edit text-white font-weight-bold" id="sectionedit_1">Your Favorite Place for Free Bootstrap Themes</h1>
            <hr class="divider" />
          </div>
          <div class="col-lg-8 align-self-baseline" style="z-index: 1">
            <p class="dashed-edit text_edit text-white-75 mb-5" id="sectionedit_2">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
            @else
            <a class="btn btn-primary btn-xl" onclick="scroll_page_tag('section_3')">Find Out More</a>
          </div>
        </div>
      </div>
    </header>
    <section id="section_2" class="page-section">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="dashed-edit text_edit text-white mt-0" id="sectionedit_3">We've got what you need!</h2>
            <hr class="divider divider-light" />
            <p class="dashed-edit text_edit text-white-75 mb-4" id="sectionedit_4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
            <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <div id="portfolio">
      <div class="container-fluid p-0">
        
        @if( auth()->guard('users_promotion')->check() )
        <div id="type_image_0" class="row g-0 grid d-none">  
          <div class="col-lg-4 col-sm-6">
            <input type='file' class='verborgen_file_3 block_edit_text' style="display: none;" />
            <div class="image-3 dashed-edit image_edit block_edit_text" /></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <input type='file' class='verborgen_file_4 block_edit_text' style="display: none;" />
            <div class="image-4 dashed-edit image_edit block_edit_text" /></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <input type='file' class='verborgen_file_5 block_edit_text' style="display: none;" />
            <div class="image-5 dashed-edit image_edit block_edit_text" /></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <input type='file' class='verborgen_file_6 block_edit_text' style="display: none;" />
            <div class="image-6 dashed-edit image_edit block_edit_text" /></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <input type='file' class='verborgen_file_7 block_edit_text' style="display: none;" />
            <div class="image-7 dashed-edit image_edit block_edit_text" /></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <input type='file' class='verborgen_file_8 block_edit_text' style="display: none;" />
            <div class="image-8 dashed-edit image_edit block_edit_text" /></div>
          </div>
        </div>  
        @else
        <div id="type_image_0" class="row g-0 grid d-none"> 
          <div class="col-lg-4 col-sm-6">
            <div class="image-3" /></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="image-4" /></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="image-5" /></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="image-6" /></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="image-7" /></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="image-8" /></div>
          </div>
        </div>  
        @endif
        <div id="type_image_1" class="grid carousel slide d-none" data-bs-ride="carousel">
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
            <div class="carousel-item" style="height: 50vh">
              <div class="image-7" style="height: 100%"></div>
            </div>
            <div class="carousel-item" style="height: 50vh">
              <div class="image-8" style="height: 100%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="section_3" class="page-section">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 col-xl-6 text-center">
            <h2 class="dashed-edit text_edit mt-0" id="sectionedit_5">Let's Get In Touch!</h2>
            <hr class="divider" />
            <p class="dashed-edit text_edit text-muted mb-5" id="sectionedit_6">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
          <div class="col-lg-6">
            <div id="contactForm">
              <div class="form-floating mb-3">
                <input class="form-control"type="text" placeholder="Enter your name..." data-sb-validations="required" id="input_name" />
                <label for="name">Name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control"type="text" placeholder="Enter your lastname..." data-sb-validations="required" id="input_lastname" />
                <label for="name">Lastname</label>
                <div class="invalid-feedback" data-sb-feedback="lastname:required">A name is required.</div>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" type="email" placeholder="name@example.com" data-sb-validations="required,email" id="input_email"/>
                <label for="email">Email address</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" id="input_cellular"/>
                <label for="phone">Phone number</label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
              </div>
              <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                  <div class="fw-bolder">Form submission successful!</div>
                  To activate this form, sign up at
                  <br />
                  <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
              </div>
              <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
              <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" onclick="register_user()">Submit</button></div>
            </div>
          </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-4 text-center mb-5 mb-lg-0">
            <i class="fa fa-phone fs-2 text-muted" aria-hidden="true"></i>
            <div class="dashed-edit text_edit" id="sectionedit_7">+1 (555) 123-4567</div>
          </div>
          <div class="col-lg-4 text-center mb-5 mb-lg-0">
            <i class="fa fa-map-marker fs-2 text-muted" aria-hidden="true"></i>
            <div class="dashed-edit text_edit" id="sectionedit_8">Via giacomo 7</div>
          </div>
          <div class="col-lg-4 text-center mb-5 mb-lg-0">
            <i class="fa fa-envelope fs-2 text-muted" aria-hidden="true"></i>
            <div class="dashed-edit text_edit" id="sectionedit_9">test@test.it</div>
          </div>
        </div>
      </div>
    </section>
    <footer id="section_4">
      <div class="" style="">
        <ul class="list-inline mb-0" style="justify-content: center;">
          <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
          <li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-square fa-2x"></i></a></li>
          <li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
        </ul>
        <ul class="list-inline mb-0 text-center">
          <li class="list-inline-item">
            <p class="dashed-edit text_edit text-center" id="sectionedit_10" style="">© Copyright 2021 - PanemaLab.  All rights reserved. </p>
          </li>
        </ul>
      </div>
    </footer>
  </div>  
  @include("promotion.layout")
</body>
</html>
