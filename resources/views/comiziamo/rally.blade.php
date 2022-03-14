<style type="text/css">
  img{
    max-width:100%
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.1);
  }

  .header {
    padding: 10px 0;
    background: #f5f5f5;
  }
  .button-email{
    margin:10px 0
  }
  h5, .fa-circle{
    color:#343a40;
  }

  .list-group {
    list-style: disc inside;

  }

  .list-group-item {
    display: list-item;
  }

  .find-more{
   text-align: right;
 }


 .label-theme{
  background: #343a40;
  font-size: 14px;
  padding: .3em .7em .3em;
  color: #fff;
  border-radius: .25em;
}

.label a{
  color: inherit;
}

/*style dropdown div*/
.slide-up, .slide-down {
  overflow:hidden
}
.slide-up > div, .slide-down > div {
  margin-top: -1000%;
  transition: margin-top 0.4s ease-in-out;
}
.slide-down > div {            
  margin-top: 0;
} 

.disabled_div{
  pointer-events: none;
  opacity: 0.7;
}

/*style upload image*/
.imagePreview {
  width: 100%;
  height: 180px;
  background-position: center center;
  background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
  background-color:#fff;
  background-size: cover;
  background-repeat:no-repeat;
  display: inline-block;
}

.imgUp
{
  margin-top: 15px;
}
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
.imgAdd
{
  width:30px;
  height:30px;
  border-radius:50%;
  background-color:#4bd7ef;
  color:#fff;

  text-align:center;
  line-height:30px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}

/*style carousel*/
.carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff0000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon{
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff0000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}


/*style zoom image*/
/* Styles the thumbnail */

a.lightbox img {
height: 150px;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
/*margin: 94px 20px 20px 20px;*/
object-fit: cover; 
}

video {
height: 150px;
width: 150px;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
/*margin: 94px 20px 20px 20px;*/
object-fit: cover; 
}

/* Styles the lightbox, removes it from sight and adds the fade-in transition */

.lightbox-target {
position: fixed;
top: -100%;
width: 100%;
background: rgba(0,0,0,.7);
width: 100%;
opacity: 0;
-webkit-transition: opacity .5s ease-in-out;
-moz-transition: opacity .5s ease-in-out;
-o-transition: opacity .5s ease-in-out;
transition: opacity .5s ease-in-out;
overflow: hidden;
}

/* Styles the lightbox image, centers it vertically and horizontally, adds the zoom-in transition and makes it responsive using a combination of margin and absolute positioning */

.lightbox-target img {
margin: auto;
position: absolute;
top: 0;
left:0;
right:0;
bottom: 0;
max-height: 0%;
max-width: 0%;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
box-sizing: border-box;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
}



/* Styles the close link, adds the slide down transition */

a.lightbox-close {
display: block;
width:50px;
height:50px;
box-sizing: border-box;
background: white;
color: black;
text-decoration: none;
position: absolute;
top: -80px;
right: 0;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
}

/* Provides part of the "X" to eliminate an image from the close link */

a.lightbox-close:before {
content: "";
display: block;
height: 30px;
width: 1px;
background: black;
position: absolute;
left: 26px;
top:10px;
-webkit-transform:rotate(45deg);
-moz-transform:rotate(45deg);
-o-transform:rotate(45deg);
transform:rotate(45deg);
}

/* Provides part of the "X" to eliminate an image from the close link */

a.lightbox-close:after {
content: "";
display: block;
height: 30px;
width: 1px;
background: black;
position: absolute;
left: 26px;
top:10px;
-webkit-transform:rotate(-45deg);
-moz-transform:rotate(-45deg);
-o-transform:rotate(-45deg);
transform:rotate(-45deg);
}

/* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */

.lightbox-target:target {
z-index: 100;
opacity: 1;
top: 56px;
bottom: 0;
left: 0;

}

.lightbox-target:target img {
max-height: 100%;
max-width: 100%;

}

.lightbox-target:target a.lightbox-close {
top: 0px;
}

/*style share*/
.heading-sizes {
  margin-top: 30px;
}
.divider {
  height: 5px;
}
@font-face {
  font-family: 'share-buttons';
  src: url('https://cdn.rawgit.com/sunnysingh/share-buttons/v1.0.0/build/fonts/share-buttons.eot?gpra60');
  src: url('https://cdn.rawgit.com/sunnysingh/share-buttons/v1.0.0/build/fonts/share-buttons.eot?#iefixgpra60') format('embedded-opentype'), url('https://cdn.rawgit.com/sunnysingh/share-buttons/v1.0.0/build/fonts/share-buttons.woff?gpra60') format('woff'), url('https://cdn.rawgit.com/sunnysingh/share-buttons/v1.0.0/build/fonts/share-buttons.ttf?gpra60') format('truetype'), url('https://cdn.rawgit.com/sunnysingh/share-buttons/v1.0.0/build/fonts/share-buttons.svg?gpra60#share-buttons') format('svg');
  font-weight: normal;
  font-style: normal;
}
.share-btn-icon {
  font-family: 'share-buttons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.share-btn-email .share-btn-icon:before {
  content: "\e945";
}
.share-btn-more .share-btn-icon:before {
  content: "\ea82";
}
.share-btn-googleplus .share-btn-icon:before {
  content: "\ea88";
}
.share-btn-facebook .share-btn-icon:before {
  content: "\ea8c";
}
.share-btn-twitter .share-btn-icon:before {
  content: "\ea91";
}
.share-btn-github .share-btn-icon:before {
  content: "\eab4";
}
.share-btn-tumblr .share-btn-icon:before {
  content: "\eabb";
}
.share-btn-reddit .share-btn-icon:before {
  content: "\eac7";
}
.share-btn-linkedin .share-btn-icon:before {
  content: "\eac8";
}
.share-btn-delicious .share-btn-icon:before {
  content: "\eacc";
}
.share-btn-stumbleupon .share-btn-icon:before {
  content: "\eace";
}
.share-btn-pinterest .share-btn-icon:before {
  content: "\ead0";
}
.share-btn,
.share-btn * {
  box-sizing: border-box;
}
.share-btn,
.share-btn *,
.share-btn *:before,
.share-btn *:after {
  box-sizing: border-box;
}
.share-btn {
  position: relative;
  display: inline-block;
  height: 24px;
  margin: 0;
  padding: 2px 8px;
  line-height: 1.53;
  letter-spacing: 0.04em;
  vertical-align: top;
  font-size: 12px;
  font-weight: bold;
  font-family: "Helvetica Neue", Arial, sans-serif;
  color: #111;
  background: #e0e0e0;
  border: 1px solid #c7c7c7;
  border-radius: 2px;
  text-decoration: none;
  transition: all 0.2s ease;
}
.share-btn:hover,
.share-btn:focus {
  background: #d3d3d3;
  border-color: #bababa;
  text-decoration: none;
  color: #111;
}
.share-btn:active {
  background: #c7c7c7;
  border-color: #adadad;
  text-decoration: none;
  color: #111;
}
.share-btn.share-btn-sm {
  height: 20px;
  font-size: 10px;
  padding: 0 8px;
  line-height: 1.6;
}
.share-btn.share-btn-lg {
  height: 28px;
  font-size: 16px;
  line-height: 1.4;
}
.share-btn .share-btn-text-sr {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.share-btn.share-btn-branded {
  color: #fff;
}
.share-btn.share-btn-branded.share-btn-twitter {
  background: #55acee;
  border-color: #3ea1ec;
}
.share-btn.share-btn-branded.share-btn-twitter:hover,
.share-btn.share-btn-branded.share-btn-twitter:focus {
  background: #3ea1ec;
  border-color: #2795e9;
}
.share-btn.share-btn-branded.share-btn-twitter:active {
  background: #2795e9;
  border-color: #1689e0;
}
.share-btn.share-btn-branded.share-btn-facebook {
  background: #3b5998;
  border-color: #344e86;
}
.share-btn.share-btn-branded.share-btn-facebook:hover,
.share-btn.share-btn-branded.share-btn-facebook:focus {
  background: #344e86;
  border-color: #2d4373;
}
.share-btn.share-btn-branded.share-btn-facebook:active {
  background: #2d4373;
  border-color: #263961;
}
.share-btn.share-btn-branded.share-btn-googleplus {
  background: #dd4b39;
  color: #fff;
  border-color: #d73925;
}
.share-btn.share-btn-branded.share-btn-googleplus:hover,
.share-btn.share-btn-branded.share-btn-googleplus:focus {
  background: #d73925;
  border-color: #c23321;
}
.share-btn.share-btn-branded.share-btn-googleplus:active {
  background: #c23321;
  border-color: #ac2d1e;
}
.share-btn.share-btn-branded.share-btn-tumblr {
  background: #35465c;
  color: #fff;
  border-color: #2c3a4c;
}
.share-btn.share-btn-branded.share-btn-tumblr:hover,
.share-btn.share-btn-branded.share-btn-tumblr:focus {
  background: #2c3a4c;
  border-color: #222d3c;
}
.share-btn.share-btn-branded.share-btn-tumblr:active {
  background: #222d3c;
  border-color: #19212b;
}
.share-btn.share-btn-branded.share-btn-reddit {
  background: #ff4500;
  color: #fff;
  border-color: #e63e00;
}
.share-btn.share-btn-branded.share-btn-reddit:hover,
.share-btn.share-btn-branded.share-btn-reddit:focus {
  background: #e63e00;
  border-color: #cc3700;
}
.share-btn.share-btn-branded.share-btn-reddit:active {
  background: #cc3700;
  border-color: #b33000;
}
.share-btn.share-btn-branded.share-btn-linkedin {
  background: #0976b4;
  color: #fff;
  border-color: #08669c;
}
.share-btn.share-btn-branded.share-btn-linkedin:hover,
.share-btn.share-btn-branded.share-btn-linkedin:focus {
  background: #08669c;
  border-color: #075683;
}
.share-btn.share-btn-branded.share-btn-linkedin:active {
  background: #075683;
  border-color: #05466b;
}
.share-btn.share-btn-branded.share-btn-delicious {
  background: #3399ff;
  color: #fff;
  border-color: #198cff;
}
.share-btn.share-btn-branded.share-btn-delicious:hover,
.share-btn.share-btn-branded.share-btn-delicious:focus {
  background: #198cff;
  border-color: #007fff;
}
.share-btn.share-btn-branded.share-btn-delicious:active {
  background: #007fff;
  border-color: #0073e5;
}
.share-btn.share-btn-branded.share-btn-stumbleupon {
  background: #eb4924;
  color: #fff;
  border-color: #e13b15;
}
.share-btn.share-btn-branded.share-btn-stumbleupon:hover,
.share-btn.share-btn-branded.share-btn-stumbleupon:focus {
  background: #e13b15;
  border-color: #ca3412;
}
.share-btn.share-btn-branded.share-btn-stumbleupon:active {
  background: #ca3412;
  border-color: #b22e10;
}
.share-btn.share-btn-branded.share-btn-pinterest {
  background: #cc2127;
  color: #fff;
  border-color: #b61d23;
}
.share-btn.share-btn-branded.share-btn-pinterest:hover,
.share-btn.share-btn-branded.share-btn-pinterest:focus {
  background: #b61d23;
  border-color: #a01a1f;
}
.share-btn.share-btn-branded.share-btn-pinterest:active {
  background: #a01a1f;
  border-color: #8a161a;
}
.share-btn.share-btn-inverse {
  color: #eeeeee;
  background: #1f1f1f;
  border-color: #050505;
}
.share-btn.share-btn-inverse:hover,
.share-btn.share-btn-inverse:focus {
  background: #121212;
  border-color: #000000;
  color: #eeeeee;
}
.share-btn.share-btn-inverse:active {
  background: #050505;
  border-color: #000000;
  color: #eeeeee;
}
.share-btn.share-btn-twitter .share-btn-icon,
.share-btn.share-btn-googleplus .share-btn-icon,
.share-btn.share-btn-tumblr .share-btn-icon,
.share-btn.share-btn-linkedin .share-btn-icon,
.share-btn.share-btn-pinterest .share-btn-icon,
.share-btn.share-btn-stumbleupon .share-btn-icon,
.share-btn.share-btn-delicious .share-btn-icon,
.share-btn.share-btn-more .share-btn-icon {
  position: relative;
  top: 1px;
}
@-moz-document url-prefix() {
  .share-btn.share-btn-twitter .share-btn-icon,
  .share-btn.share-btn-googleplus .share-btn-icon,
  .share-btn.share-btn-tumblr .share-btn-icon,
  .share-btn.share-btn-linkedin .share-btn-icon,
  .share-btn.share-btn-pinterest .share-btn-icon,
  .share-btn.share-btn-stumbleupon .share-btn-icon,
  .share-btn.share-btn-delicious .share-btn-icon,
  .share-btn.share-btn-more .share-btn-icon {
    top: 0;
  }
}
.share-btn.share-btn-more.share-btn-lg .share-btn-icon {
  top: 2px;
}
.share-btn .share-btn-text {
  padding-left: 2px;
}

/*style modal zoom image*/
.myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    display: block;
    margin-left: auto;
    margin-right: auto
}

.myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 50%;

}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

.out {
  animation-name: zoom-out;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(1)}
    to {-webkit-transform:scale(2)}
}

@keyframes zoom {
    from {transform:scale(0.4)}
    to {transform:scale(1)}
}

@keyframes zoom-out {
    from {transform:scale(1)}
    to {transform:scale(0)}
}

/* The Close Button */
.close_modal {
    position: absolute;
    top: 56px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close_modal:hover,
.close_modal:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 80%;
    }
}


.test{
  margin: auto;
position: absolute;
top: 0;
left:0;
right:0;
bottom: 0;
max-height: 100%;
max-width: 100%;
/*border: 3px solid white;*/
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
box-sizing: border-box;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;

}


/*style flipcard*/
.container_flip {
  
  height: 260px;
  position: relative;
  perspective: 800px;
  -webkit-perspective: 800px;
  -o-perspective: 800px;
  -moz-perspective: 800px;
}
#card_flip {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
  -webkit-transform-style: preserve-3d;
  -webkit-transition: -webkit-transform 1s;
  -o-transform-style: preserve-3d;
  -o-transition: -o-transform 1s;
  -moz-transform-style: preserve-3d;
  -moz-transition: -moz-transform 1s;
}
#card_flip figure {
  margin: 0;
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -o-backface-visibility: hidden;
}
#card_flip .front_flip {

 
}
#card_flip .back_flip {
  
  transform: rotateY(180deg);
  -moz-transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
}
#card_flip.flipped_flip {
  transform: rotateY(180deg);
  -moz-transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
}


</style>


<div id="display_rally" style="display: none;">
  <header class="header">
    <div class="container">
      <div class="row" style="margin-top:20px;">
        <div class="col-sm-3" style="text-align: center;padding-bottom: 15px"> 
          <div id="append_switch"></div>
          <div class="social-icons">
            @if( auth()->guard('users_comiziamo')->check() )
            @if( auth()->guard('users_comiziamo')->user()->level<=3 )
            <a id="pencil">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x" ></i>
                <i class="fa fa-stack-1x fa-inverse bx bxs-pencil"></i>
              </span>
            </a>
            @elseif( auth()->guard('users_comiziamo')->user()->level<=6)
            <a id="pencil">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x" ></i>
                <i class="fa fa-stack-1x fa-inverse bx bxs-pencil"></i>
              </span>
            </a>
            <a id="image">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-stack-1x fa-inverse bx bx-image"></i>
              </span>
            </a>
            @elseif( auth()->guard('users_comiziamo')->user()->level<=8)
            <a id="pencil">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x" ></i>
                <i class="fa fa-stack-1x fa-inverse bx bxs-pencil"></i>
              </span>
            </a>
            <a id="image">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-stack-1x fa-inverse bx bx-image"></i>
              </span>
            </a>
            <a id="microphone">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-stack-1x fa-inverse bx bx-microphone"></i>
              </span>
            </a>
            @elseif( auth()->guard('users_comiziamo')->user()->level<=10)
            <a id="pencil">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x" ></i>
                <i class="fa fa-stack-1x fa-inverse bx bxs-pencil"></i>
              </span>
            </a>
             <a id="image">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-stack-1x fa-inverse bx bx-image"></i>
              </span>
            </a>
            <a id="microphone">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-stack-1x fa-inverse bx bx-microphone"></i>
              </span>
            </a>
            <a id="film">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-stack-1x fa-inverse bx bx-film"></i>
              </span>
            </a>
            @endif
            @else
            <a id="" onclick="change_vis('login')">
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x" ></i>
                <i class="fa fa-stack-1x fa-inverse bx bxs-pencil"></i>
              </span>
            </a>
            @endif
          </div>
        </div>
        <div class="col-sm-9">
          <div class="col mb-3 card column" style="">
            <div class="row g-0">
              <div class="col-md-4" style="padding: 0!important;">
                <img id="image_arg_rally" src="" alt="..." class="" style="height: 100%; width: 100%;object-fit: cover;" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5><i class="fa-fw" id="append_social_share_rally"></i>
                  </h5>
                  <p class="card-text" id="argument_rally">
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container" id="type_rally" style="">
    <div class="row" style="margin-top: 20px;">
      <div class="col-sm-12" id="" style="padding-bottom: 15px;">
        <div class="card card-block text-xs-left" style="padding: 15px">
          <div style="display: flex; flex-wrap: nowrap;">
            <h5 style="flex-grow: 1" id="rally_icon"></h5>
            <button id="close_type" type="button" class="close" aria-label="Close" style="text-align: right;margin-bottom: 0.5rem;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="rally_container">
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="container" id="info_rally" style="display: none;">
    <div class="row" style="margin-top: 20px;">
      <div class="col-sm-12" id="" style="padding-bottom: 15px;">
        <div class="card card-block text-xs-left" style="padding: 15px">
          <div style="display: flex; flex-wrap: nowrap;">
            <h5 style="flex-grow: 1">@lang("comiziamo/lang.please_note")</h5>
          </div>
          <div class="form-group">
            <p style="text-align: justify;text-justify: inter-word;">@lang("comiziamo/lang.sub_please_note_1")
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x" style="color: lightgrey;"></i>
              <i class="fa fa-stack-1x fa-inverse bx bxs-pencil"></i>
            </span>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x" style="color: lightgrey;"></i>
              <i class="fa fa-stack-1x fa-inverse bx bx-image"></i>
            </span>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x" style="color: lightgrey;"></i>
              <i class="fa fa-stack-1x fa-inverse bx bx-microphone"></i>
            </span>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x" style="color: lightgrey;"></i>
              <i class="fa fa-stack-1x fa-inverse bx bx-film"></i>
            </span>
           @lang("comiziamo/lang.sub_please_note_2")</p>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="container" id="preview_rally" style="display: none">
    <div class="row" style="margin-top: 20px;">
      <div class="col-sm-12" id="" style="padding-bottom: 15px;">
        <div class="card card-block text-xs-left" style="padding: 15px">
          <div style="display: flex; flex-wrap: nowrap;">
            <h5 style="flex-grow: 1">Preview Comizio</h5>
            <button id="close_preview" type="button" class="close" aria-label="Close" style="text-align: right;margin-bottom: 0.5rem;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="form-group">
            <div class="card" style="background-color: lightgrey;">
              <div class="row">
                <div id="card_preview_rally" style="display: flex;flex-wrap: nowrap; padding: 15px;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">


function start_function_rally(res_id){

  var id_user="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";

  if (id_user=="") {

    get_argument_rally_no_user(res_id);

  }else{

    get_argument_rally(res_id);

  }

}

function get_argument_rally_no_user(res_id){

 $.get("/get_argument_rally_no_user_comiziamo",{res_id:res_id},
  function(data){

    var res=jQuery.parseJSON(data);

    $("#append_switch").html('<div class="col-sm-12" style="text-align: center;padding-bottom: 15px">'+ 
      '<a> <img  class="rounded-circle" src="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>" alt="Rick" style="width: 150px; height: 150px;"></a>'+
      '<div class="button-email">'+
      '<div class="teacher-name">'+
      '<div class="row">'+
      '<div class="col-sm-12" style="text-align: center;">'+
      '<h5><strong id="">@lang("comiziamo/lang.user")</strong></h5>'+
      '</div>'+
      '</div>'+
      '</div>'+
      '<span class="number">@lang("comiziamo/lang.level") <strong id=""></strong>Dormiente<div id=""></div></span>'+
      '</div>'+ 
      '</div>');

    $("#display_rally").show();
    $("#info_rally").show();
    $("#preview_rally").hide();
    $("#type_rally").hide(); 
    var pageUrl = encodeURIComponent(document.URL);
    $("#append_social_share_rally").after('<label id="arg_share_rally">'+res.get_argument_rally[0].title_argument+'</label> <a class="share-btn share-btn-more" href="https://www.addtoany.com/share_save?linkurl='+pageUrl+'" target="_blank" title="More share options">'+
      '<span class="share-btn-icon"></span>'+
      '<span class="share-btn-text-sr">More</span>'+
      '</a>');
    $("#argument_rally").text(res.get_argument_rally[0].argument);

    if (res.get_argument_rally[0].img_arg=="") {
      $("#image_arg_rally").attr("src","comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>");
    }else{
      $("#image_arg_rally").attr("src","comiziamo_repo/img_argument/"+res.get_argument_rally[0].img_arg);
    }
    
  });

}



function get_argument_rally(res_id){

  $.get("/get_argument_rally_comiziamo",{res_id:res_id},
    function(data){

      
      var res=jQuery.parseJSON(data);
      var src_user;
      var src_party;

      if (res.get_argument_rally.length==0 || res.get_argument_rally[0].timer_start_rally=="0000-00-00"  ) {

        window.location.replace("/comiziamo");

      }else{

        // console.log(res.get_argument_rally[0].category_challenge)

        $("#arg_share_rally").empty();
        $(".share-btn-more").remove();
        var pageUrl = encodeURIComponent(document.URL);

        $("#append_social_share_rally").after('<label id="arg_share_rally">'+res.get_argument_rally[0].title_argument+'</label> <a class="share-btn share-btn-more" href="https://www.addtoany.com/share_save?linkurl='+pageUrl+'" target="_blank" title="More share options">'+
          '<span class="share-btn-icon"></span>'+
          '<span class="share-btn-text-sr">More</span>'+
          '</a>');


        if (res.get_user_party[0].img=="" || res.get_user_party[0].img==null) {

          src_user="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>";

        }else{

          src_user="comiziamo_repo/img_user/"+res.get_user_party[0].img;

        }



        if (res.get_user_party[0].img_party=="" || res.get_user_party[0].img_party==null) {

          src_party="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>";


        }else{

          src_party="comiziamo_repo/img_party/"+res.get_user_party[0].img_party;

        }




        $("#append_switch").html(
          '<section class="container_flip">'+
            '<div id="card_flip">'+
              '<figure class="front_flip">'+
                '<img style="width: 150px; height: 150px;" class="rounded-circle" src="'+src_user+'" alt="Rick">'+
                '<div class="button-email button_front">'+
                  '<div class="teacher-name">'+
                    '<div class="row">'+
                      '<div class="col-sm-12" style="text-align: center;">'+
                      '<h5><strong class="nickname_front" style="">'+res.get_user_party[0].nickname+'</strong></h5>'+
                      '<span class="number_front" style="color: black;">@lang("comiziamo/lang.level") <strong>'+res.get_user_party[0].level_char+'</strong></span>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</figure>'+
              '<figure class="back_flip">'+
                '<img style="width: 150px; height: 150px;" class="rounded-circle" src="'+src_party+'" alt="Rick">'+
                '<div class="button-email button_back">'+
                  '<div class="teacher-name">'+
                    '<div class="row">'+
                      '<div class="col-sm-12" style="text-align: center;">'+
                      '<h5><strong class="nickname_back" style="">'+res.get_user_party[0].name_party+'</strong></h5>'+
                      '<span class="number_back" style="color: black;">@lang("comiziamo/lang.level") <strong>'+res.get_user_party[0].level_char+'</strong></span>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</figure>'+
            '</div>'+
          '</section>'+
          '@if( auth()->guard("users_comiziamo")->check() )'+
          '@if( auth()->guard("users_comiziamo")->user()->creation_party==1 )'+
          '<span id="button_flip" class="fa-stack" style="position: absolute;top: 8px; right: 16px;" onclick="click_flip(\''+res.get_argument_rally[0].id
                  +'\',\''+res.get_user_party[0].creator_party+'\',\''+res.get_user_party[0].id_user+'\',\''+res.get_user_party[0].img_party+'\',\''+res.get_user_party[0].name_party+'\',\''+res.get_user_party[0].id+'\')">'+
            '<i class="fa fa-circle fa-stack-2x" style=""></i>'+
            '<i class="fa fa-stack-1x fa-inverse bx bx-transfer"></i>'+
          '</span>'+
          '@endif'+
          '@endif');
      

          var type_user=0;
          var id_user_party=res.get_user_party[0].id_user;
          var img_user_party;
          var type_user_party;
          var name_party;
          var id_party;

        $("#pencil").attr("onclick","trigger(pencil,"+res.get_argument_rally[0].id+",\""+type_user
          +"\",\""+id_user_party+"\",\""+img_user_party+"\",\""+name_party+"\",\""+id_party+"\")");
        $("#image").attr("onclick","trigger(image,"+res.get_argument_rally[0].id+",\""+type_user
          +"\",\""+id_user_party+"\",\""+img_user_party+"\",\""+name_party+"\",\""+id_party+"\")");
        $("#microphone").attr("onclick","trigger(microphone,"+res.get_argument_rally[0].id+",\""+type_user
          +"\",\""+id_user_party+"\",\""+img_user_party+"\",\""+name_party+"\",\""+id_party+"\")");
        $("#film").attr("onclick","trigger(film,"+res.get_argument_rally[0].id+",\""+type_user
          +"\",\""+id_user_party+"\",\""+img_user_party+"\",\""+name_party+"\",\""+id_party+"\")");
          

        $("#display_rally").show();
        $("#argument_rally").text(res.get_argument_rally[0].argument);

        if (res.get_argument_rally[0].img_arg=="") {
          $("#image_arg_rally").attr("src","comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>");
        }else{
          $("#image_arg_rally").attr("src","comiziamo_repo/img_argument/"+res.get_argument_rally[0].img_arg);
        }

        if (res.get_partecipant_vote_rally.length==0) {
          type_user_party="";
        }else{
          type_user_party=res.get_partecipant_vote_rally[0].type_user_party;
        }
        
        preview_rally(res_id, type_user_party, id_user_party);

      }

    });

}



function click_flip(res_id, creator_party, id_user, img_party, name_party, id_party) {

  var type_user=0;
  var id_user_party=id_user;
  var img_user_party;
  var type_user_party;
  var name_party;
  var id_party;

  $("#card_flip").toggleClass("flipped_flip");

  if ($("#card_flip").hasClass("flipped_flip")) {

    type_user=1; //party
    id_user_party=creator_party;
    img_user_party=img_party;
    name_party=name_party;
    id_party=id_party;
    
    $(".button_front").hide();
    $(".button_back").show();

  } else{

    type_user=0; //user
    id_user_party=id_user;
    $(".button_front").show();
    $(".button_back").hide();

  }


  $("#pencil").attr("onclick","trigger(pencil,"+res_id+",\""+type_user
    +"\",\""+id_user_party+"\",\""+img_user_party+"\",\""+name_party+"\",\""+id_party+"\")");
  $("#image").attr("onclick","trigger(image,"+res_id+",\""+type_user
    +"\",\""+id_user_party+"\",\""+img_user_party+"\",\""+name_party+"\",\""+id_party+"\")");
  $("#microphone").attr("onclick","trigger(microphone,"+res_id+",\""+type_user
    +"\",\""+id_user_party+"\",\""+img_user_party+"\",\""+name_party+"\",\""+id_party+"\")");
  $("#film").attr("onclick","trigger(film,"+res_id+",\""+type_user
    +"\",\""+id_user_party+"\",\""+img_user_party+"\",\""+name_party+"\",\""+id_party+"\")");

};



var array_file=[];
function trigger(type, res_id, type_user, id_user_party, img_user_party, name_party, id_party) {

  $("html, body").animate({ scrollTop: $(document).height() }, 1000);
  
  type=type.id;
  var file_ext_allow=[];
  var comment_arg;
  var type_arg;
  var maxlength;
  //show/hide  
  $("#type_rally").show();  
  $("#info_rally").hide(); 
  $("#preview_rally").hide(); 
  
  
  switch(type) {
      case "pencil":
      type_arg=1;  
      break;

      case "image":
      comment_arg=`<label for="comment">@lang("comiziamo/lang.title_image")</label>`;
      type_arg=2;
      file_ext_allow=['jpg', 'gif', 'png', "jpeg"];
      break;

      case "microphone":
      comment_arg=`<label for="comment">@lang("comiziamo/lang.title_audio")</label>`;
      type_arg=3;
      file_ext_allow=['mp3', 'wav', 'm4a', 'amr'];
      break;

      case "film":
      comment_arg=`<label for="comment">@lang("comiziamo/lang.title_video")</label>`;
      type_arg=4;
      file_ext_allow=['avi', 'mpg', 'mkv', 'mov', 'mp4', '3gp', 'webm', 'wmv'];
      break;

      default:

    }
  
  get_type_item(res_id,comment_arg,type_arg,file_ext_allow, type_user, id_user_party, img_user_party, name_party, id_party);
    
};

function dismiss(res_id, type_arg) {
  $("html, body").animate({ scrollTop: $(document).height() }, 1000);
  $.get("/clean_directory_comiziamo",{res_id:res_id, type_arg:type_arg},
    function(data){

      //show/hide type
      $("#info_rally").show();
      $("#preview_rally").hide();
      $("#type_rally").hide(); 

      $(".social-icons").removeClass("disabled_div");
      $("#button_flip").css("pointer-events", "");
      $("#button_flip").removeClass("disabled_div");
     
      add_partecipant(res_id);

    });

};


function get_type_item(res_id,comment_arg,type_arg,file_ext_allow,type_user, id_user_party, img_user_party, name_party, id_party){

  var input;

  $.get("/get_level_comiziamo",{type_arg:type_arg},
      function(data){
        $("#close_type").attr("onclick","dismiss(\""+res_id+"\",\""+type_arg+"\")");
        var res=jQuery.parseJSON(data);
        $(".social-icons").addClass("disabled_div");
        $("#button_flip").css("pointer-events", "none");
        $("#button_flip").addClass("disabled_div");
        
        if (type_arg==1) {

          input=
            '<div class="form-group">'+
              '<label for="comment">@lang("comiziamo/lang.title_pencil_1") '+res.privilege+' @lang("comiziamo/lang.title_pencil_2") <span class="comment_text_area"></span></label>'+
              '<textarea maxlength="'+res.privilege+'" class="form-control sam_notes" rows="5" id="comment_text_area"></textarea>'+
              '<p style="float: right; padding-top: 15px;">'+
              '<a class="btn btn-secondary send_data" target="_blank" role="button" onclick="send_data_arg(\''+res_id+'\',\''+type_arg+'\',\''+type_user+'\',\''+id_user_party+'\',\''+img_user_party+'\',\''+name_party+'\',\''+id_party+'\')">@lang("comiziamo/lang.send") <i class="fa fa-chevron-right" aria-hidden="true"></i>'+
              '</a>'+
              '</p>'+
            '</div>';

          $("#rally_container").html(input);

        }else{

          input=
          '<div class="container">'+
          '<label for="comment">'+comment_arg+'</label>'+
          '<div class="text-center">'+  
          '<div class="file-loading">'+
          '<input id="input-705" name="kartik-input-705[]" type="file" multiple>'+
          '</div>'+
          '</div>'+
          '</div>';

          $("#rally_container").html(input);
          $("#input-705").fileinput({
            uploadUrl: "file_upload_batch_comiziamo/"+res_id+"/"+type_arg,
            uploadAsync: false,
            allowedFileExtensions: file_ext_allow,
            maxFileSize: res.privilege,   
            layoutTemplates: {
              actionDelete: '<button type="button" class="kv-file-remove btn btn-sm btn-kv btn-default btn-outline-secondary delete_button_2" title="Remove file"><i class="bx bx-trash"></i></button>',
              actionUpload: '',
              actionZoom: '',
            },
            maxFileCount:res.limit_file,
            initialPreviewAsData: true,
          }).on('filebatchuploadsuccess', function(event, data, previewId, index) {
            for (var i = 0; i < data.response.length; i++) {
              array_file.push(data.response[i])
            }
            for (var i = 0; i < array_file.length; i++) {
              $(".delete_button_2").eq(i).attr("onclick", "delete_type_item("+res_id+",\""+type_arg+"\",\""+array_file[i]+"\")");
            }
            send_data_arg(res_id, type_arg, type_user, id_user_party, img_user_party, name_party, id_party);
          });
          $(".fileinput-remove").remove();
          $(".file-drop-zone").css("border","0");
          $(".fa-file-image").remove();

        }

      });

}

function delete_type_item(res_id, type_arg, name_file){

  $.get("/delete_type_item_comiziamo",{res_id:res_id, type_arg:type_arg, name_file:name_file},
    function(data){

      array_file = jQuery.grep(array_file, function(value) {
        return value != name_file;

    });
      
  });

}


function send_data_arg(res_id, type_arg, type_user, id_user_party, img_user_party, name_party, id_party){


  $.get("/send_data_arg_comiziamo",{res_id:res_id, type_arg:type_arg, comment_text_area:$("#comment_text_area").val(), type_user:type_user, id_user_party:id_user_party, img_user_party:img_user_party, name_party:name_party, id_party:id_party},
    function(data){

      add_partecipant(res_id);
        
    });

}

function add_partecipant(res_id){

  $.get("/add_partecipant_comiziamo",{res_id:res_id},
    function(data){

      start_function_rally(res_id);      

    });

}

$('.carousel').carousel({
  interval: false
})



function preview_rally(res_id, type_user_party, id_user_party){


  var check_user="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id }}@endif";

  if (check_user=="") {

    $("#type_rally").hide();
    $("#info_rally").show();

  } else {

  $.get("/get_preview_rally_comiziamo",{res_id:res_id, id_user_party:id_user_party},
    function(data){

      if (type_user_party==1) {

        $("#button_flip").click();
        $("#button_flip").css("pointer-events", "none");

      }

      $("#card_preview_rally").empty();
      var res=jQuery.parseJSON(data); 
      var numb_img;   
      if (res!=0) {
        var directory=res.directory;
        //show/hide
        $("#info_rally").hide();
        $("#preview_rally").show();
        $("#type_rally").hide();
        $(".social-icons").addClass("disabled_div");
        $("#button_flip").attr("disabled",true);
        $("#button_flip").addClass("disabled_div");
        
        if (res.directory.split("_")[2]!=undefined) {
        var type_arg=res.directory.split("_")[2].replace("/","");
        $("#close_preview").attr("onclick","dismiss(\""+res_id+"\",\""+type_arg+"\")");
        }else{
        $("#close_preview").attr("onclick","dismiss(\""+res_id+"\")"); 

        }

        if (res.preview==2) {


          
          for (var i = 0; i < res.file.length; i++) {

            numb_img=i+1;    

            if(window.matchMedia("(max-width: 767px)").matches){
              //cell
              $("#card_preview_rally").css("flex-wrap","wrap")
               
            } else if(window.matchMedia("(max-width: 992px)").matches){
              //tablet
             
            } else{
           
              //desktop
            }       

            //immagini
            $("#card_preview_rally").append(
              '<div class="card-body" style="text-align:center">'+
              '<a class="lightbox" onclick="zoom_img(\''+directory+'\',\''+res.file[i]+'\',\'rally_'+numb_img+'\',\''+numb_img+'\',rally)">'+
              '<img class="myImg" id="myImg_rally_'+numb_img+'" src="'+directory+res.file[i]+'?refresh=<?php echo rand(1,999); ?>">'+
              '</a>'+ 
              '<div id="myModal_rally_'+numb_img+'" class="modal" style="">'+
              '<span class="close_modal" onclick="close_modal(\'rally_'+numb_img+'\',\''+numb_img+'\',rally)">&times;</span>'+
              '<img class="modal-content test" id="rally_'+numb_img+'">'+
              '</div>'+
              '</div>');


            
          }  

        }else if (res.preview==1){

          //scritto
          $("#card_preview_rally").html(
            '<div class="card-body">'+
              '<p class="card-text">'+res.preview_comment+'</p>'+
            '</div>');

        } else{

          $("#card_preview_rally").html(
            '<div class="card-body">'+
              '<video  controls >'+
                '<source src="'+directory+res.file[0]+'" type="video/ogg">'+
                '<source src="'+directory+res.file[0]+'" type="video/mp4">'+
                '<source src="'+directory+res.file[0]+'" type="audio/ogg">'+
                '<source src="'+directory+res.file[0]+'" type="audio/mpeg">'+
              '</video>'+
            '</div>');
          
        }

      }else{

        //show/hide
        $("#info_rally").show();
        $("#preview_rally").hide();
        $("#type_rally").hide();


      }

    });
  }
}

function zoom_img(directory, name_file, sub_img, numb_img, from){


$("#"+sub_img).removeClass("out");
$("#myModal_"+from.id+"_"+numb_img).css("display","block");
$("#"+sub_img).attr("src", directory+name_file);

}

function close_modal(sub_img, numb_img, from){

  $("#"+sub_img).addClass("out");
  setTimeout(function() {
       $("#myModal_"+from.id+"_"+numb_img).css("display","none");
       $("#"+sub_img).addClass("modal-content");
     }, 400);

}


</script>