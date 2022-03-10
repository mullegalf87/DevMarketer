<!DOCTYPE html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://developers.facebook.com/schema/">
<head>
  <title>Comiziamo</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- tag facebook -->
  <meta property="og:title" content="Comiziamo">
  <meta property="og:description" content="Comiziamo è il primo simulatore al mondo di comizi virtuali dove gli utenti dibattono su argomenti di vario genere e si contendono la vittoria...e guai a chi dice che si tratta di un semplice forum!">
   <!-- <meta property="og:description" content="Comiziamo is the first simulator in the world of virtual rallies where users debate on topics of various kinds and compete for victory ... and woe to those who say that it is a simple forum!"> -->
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://www.comiziamo.tk/comiziamo" />
  <meta property="og:image" content="http://www.comiziamo.tk/uploads/logo/logo_small_icon_only.png">
 <!-- tag twitter -->
  <!-- <meta name="twitter:card" content="summary"> -->
  <!-- <meta name="twitter:image" content="https://i.ibb.co/hZnWTGB/logo-small-icon-only.png"> -->
  <!-- <meta name="twitter:image" content="http://www.comiziamo.tk/uploads/logo/logo_small_icon_only_twitter.jpeg">
 -->



  <!-- favicon -->
  <link rel="icon" href="uploads/logo/favicon_small.png" type="image/png">
  <!-- jquery 3.5 jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <!-- cookie popup jquery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  
  <!-- countdown -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js'></script>





  <!-- bootstrap 4.5 bootstrap-->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  
  <!-- datatable bootstrap -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
  <link rel="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> -->
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script> -->
  <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
  
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
  <script src="https://use.fontawesome.com/e07be0b1c4.js"></script>
  
  <!-- highcharts -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <!-- <script src="https://code.highcharts.com/modules/drilldown.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script> -->

  <!-- imagecompressor -->
  <script type="text/javascript" src="js/bookmap/image-compressor.js"></script>
  
</head>

<style type="text/css">

body {
  padding-top: 3.5rem;
}

nav .btn-outline-light:hover {
  color: #333;
}

[onClick] {
cursor:pointer;
}

h1, h2, h3, h4{
  white-space: nowrap;
}

/*same height*/
.flex-container{
  margin: 0 auto;
  display: -webkit-flex; /* Safari */     
  display: flex; /* Standard syntax */
}
.flex-container .column{
  padding: 10px;
  -webkit-flex: 1; /* Safari */
  -ms-flex: 1; /* IE 10 */
  flex: 1; /* Standard syntax */
}

/*style language*/
/* -------------- CSS --------------- */

#lang-switch img {
  width: 25px;
  height: 25px;
  opacity: 0.5;
  transition: all .5s;
  margin: auto 3px;
  margin-left: 0;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

#lang-switch img:hover {
  cursor: pointer;
  opacity: 1;
}

.it_lang,
.en_lang {
  display: none;
  transition: display .5s;
}

/* Language */
.active-lang {
  display: flex !important;
  transition: display .5s;
}

.active-flag {
  transition: all .5s;
  opacity: 1 !important;
}

/*style nespaper*/
 #container_news h1, 
 #container_news h2, 
 #container_news h3, 
 #container_news h4, 
 #container_news h5, 
 #container_news h6 {
  
  display: block! important;
  font-size: 20px! important;
  white-space: normal! important;
}

.news {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  grid-auto-rows: 350px;
  grid-auto-flow: dense;
  grid-gap: 1em;
  max-width: 1600px;
  margin: 0 auto;
  padding: 1em;
}
.news .post {
  display: flex;
  flex-flow: column nowrap;
}
.news .post:nth-child(1) {
  grid-column-end: span 9;
}
.news .post:nth-child(2) {
  grid-column-end: span 3;
}
.news .post:nth-child(3) {
  grid-column-end: span 3;
}
.news .post:nth-child(4) {
  grid-column-end: span 6;
}
.news .post:nth-child(5) {
  grid-column-end: span 3;
}
.news .post:nth-child(6) {
  grid-column-end: span 6;
}
.news .post:nth-child(7) {
  grid-column-end: span 3;
}
.news .post:nth-child(8) {
  grid-column-end: span 3;
}
.news .post .media {
  display: block;
  flex: 1 1 auto;
  background-size: cover;
  background-position: center;
  background-color: #ddd;
}
.news .post .caption {
  padding: 0.5em 0 0;
}
.news .post .caption .title {
  margin: 0 0 0.5em;
}
.news .post .caption .author {
  font-style: italic;
}
.news .post.overlaid {
  position: relative;
}
.news .post.overlaid .caption {
  z-index: 2;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  color: #fff;
  padding: 1em;
}
.news .post.overlaid::after {
  z-index: 1;
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(to top, black 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.15) 65%, rgba(0, 0, 0, 0.075) 75.5%, rgba(0, 0, 0, 0.037) 82.85%, rgba(0, 0, 0, 0.019) 88%, rgba(0, 0, 0, 0) 100%);
}

@media (max-width: 1200px) {
  .news .post:nth-child(1) {
    grid-column-end: span 12;
  }
  .news .post:nth-child(2) {
    grid-column-end: span 4;
  }
  .news .post:nth-child(3) {
    grid-column-end: span 4;
  }
  .news .post:nth-child(4) {
    grid-column-end: span 4;
  }
  .news .post:nth-child(5) {
    grid-column-end: span 12;
  }
  .news .post:nth-child(6) {
    grid-column-end: span 4;
  }
  .news .post:nth-child(7) {
    grid-column-end: span 4;
  }
  .news .post:nth-child(8) {
    grid-column-end: span 4;
  }
}
@media (max-width: 900px) {
  .news .post:nth-child(1) {
    grid-column-end: span 12;
  }
  .news .post:nth-child(2) {
    grid-column-end: span 6;
  }
  .news .post:nth-child(3) {
    grid-column-end: span 6;
  }
  .news .post:nth-child(4) {
    grid-column-end: span 12;
  }
  .news .post:nth-child(5) {
    grid-column-end: span 6;
  }
  .news .post:nth-child(6) {
    grid-column-end: span 6;
  }
  .news .post:nth-child(7) {
    grid-column-end: span 6;
  }
  .news .post:nth-child(8) {
    grid-column-end: span 6;
  }
}
@media (max-width: 600px) {
  .news .post {
    grid-column-end: span 12 !important;
  }
}

#home header{
    font-family: 'Playfair Display', serif;
    font-weight: 100;
    font-size: 50px;
    /*text-transform: uppercase;*/
    display: inline-block;
    line-height: 72px;
    /*margin-bottom: 20px;*/
}

#home .head{
    text-align: center;
    position: relative;
}

#home .subhead{
    text-transform: uppercase;
    border-bottom: 2px solid #2f2f2f;
    border-top: 2px solid #2f2f2f;
    padding: 12px 0 12px 0;
}


</style>
<body onload="checkCookie()">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand text-hide" onclick="change_vis('home')" >
      <?xml version="1.0" standalone="no"?>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 169.735 29" width="169.735" height="29"><g fill="#ffffff" color="#ffffff" transform="translate(0, 0) scale(0.453125)"><svg width="64.0" height="64.0" x="0.0" y="0.0" viewBox="0 0 64 64"><title></title><path d="M3,62h7a.99974.99974,0,0,0,1-1V39H28a.99974.99974,0,0,0,1-1V34a.99974.99974,0,0,0-1-1H16V18.11816l1.07422.53711a2.00695,2.00695,0,0,0,1.90674-.06445L22,16.77057V20h2V18.316l16.73242,4.64789A1.00082,1.00082,0,0,0,42,22V16h1a3,3,0,0,0,0-6H42V4a1.00082,1.00082,0,0,0-1.26758-.96387L24,7.684V6H22v4.43378l-4.08057,2.44806-3.229-1.35157a4.00063,4.00063,0,1,0-7.3252.124A3.00319,3.00319,0,0,0,6,14.16992V33H3a.99974.99974,0,0,0-1,1V61A.99974.99974,0,0,0,3,62ZM42,12h1a1,1,0,0,1,0,2H42ZM38,5.871l2-.5556V20.68457l-2-.5556ZM24,15V9.76038L36,6.4267V19.5733L24,16.23962ZM9,51.27692,5.01562,49,9,46.72308Zm-1-37.107a1.00064,1.00064,0,0,1,.51025-.87207l.7583-.42676a.99919.99919,0,0,0,.25293-1.54,1.99461,1.99461,0,0,1,1.8379-3.30078,2.01325,2.01325,0,0,1,1.59423,1.53516,1.9751,1.9751,0,0,1-.47509,1.76562,1.00062,1.00062,0,0,0,.35693,1.5918l4.77832,2a.99867.99867,0,0,0,.90088-.06543L22,12.7666v1.66895l-4.03125,2.43066-2.52148-1.26074A1.00009,1.00009,0,0,0,14,16.5V33H12V24H10v9H8ZM4,35H27v2H4Zm0,4H9v4.27692L4,40.4198Zm0,3.72308L7.98438,45,4,47.27692Zm0,8L7.98438,53,4,55.27692ZM4,57.5802l5-2.85712V60H4Z"></path><rect x="47.79912" y="3.49991" width="11.40175" height="2.00019" transform="matrix(0.96475, -0.26316, 0.26316, 0.96475, 0.70152, 14.2376)"></rect><rect x="52.49991" y="15.79912" width="2.00019" height="11.40175" transform="translate(18.6808 67.45784) rotate(-74.74488)"></rect><rect x="49" y="12" width="13" height="2"></rect><path d="M60.15771,50.2666A4.99713,4.99713,0,1,0,51,47.5a4.94285,4.94285,0,0,0,.84668,2.76465A4.34787,4.34787,0,0,0,50,51.5907a4.34784,4.34784,0,0,0-1.84229-1.3241A4.99713,4.99713,0,1,0,39,47.5a4.94285,4.94285,0,0,0,.84668,2.76465A4.34787,4.34787,0,0,0,38,51.5907a4.34784,4.34784,0,0,0-1.84229-1.3241A4.99713,4.99713,0,1,0,27,47.5a4.94285,4.94285,0,0,0,.84668,2.76465A4.34787,4.34787,0,0,0,26,51.5907a4.34784,4.34784,0,0,0-1.84229-1.3241A4.99713,4.99713,0,1,0,15,47.5a4.94285,4.94285,0,0,0,.84668,2.76465A4.34806,4.34806,0,0,0,13,54.33984V61a.99974.99974,0,0,0,1,1H62a.99974.99974,0,0,0,1-1V54.33984A4.34693,4.34693,0,0,0,60.15771,50.2666ZM25,60H15V54.33984A2.34279,2.34279,0,0,1,17.34033,52h.76074a.99976.99976,0,0,0,.478-1.87793,3.00031,3.00031,0,1,1,2.84229-.001A1.00018,1.00018,0,0,0,21.89893,52h.76074A2.34279,2.34279,0,0,1,25,54.33984Zm12,0H27V54.33984A2.34279,2.34279,0,0,1,29.34033,52h.76074a.99976.99976,0,0,0,.478-1.87793,3.00031,3.00031,0,1,1,2.84229-.001A1.00018,1.00018,0,0,0,33.89893,52h.76074A2.34279,2.34279,0,0,1,37,54.33984Zm12,0H39V54.33984A2.34279,2.34279,0,0,1,41.34033,52h.76074a.99976.99976,0,0,0,.478-1.87793,3.00031,3.00031,0,1,1,2.84229-.001A1.00018,1.00018,0,0,0,45.89893,52h.76074A2.34279,2.34279,0,0,1,49,54.33984Zm12,0H51V54.33984A2.34279,2.34279,0,0,1,53.34033,52h.76074a.99976.99976,0,0,0,.478-1.87793,3.00031,3.00031,0,1,1,2.84229-.001A1.00018,1.00018,0,0,0,57.89893,52h.76074A2.34279,2.34279,0,0,1,61,54.33984Z"></path><rect x="37" y="38" width="2" height="2"></rect><rect x="49" y="35" width="2" height="2"></rect></svg></g><line x1="41" y1="1" x2="41" y2="28" stroke="#ffffff" stroke-linecap="round"></line><path fill="#ffffff" fill-rule="nonzero" d="M8.39 2.44L8.39 2.44Q10.58 2.44 12.13 3.20L12.13 3.20L12.13 6.79L12.11 6.81Q11.45 5.80 9.34 5.47L9.34 5.47Q8.72 5.37 7.77 5.37Q6.82 5.37 5.91 5.72Q4.99 6.08 4.41 6.74L4.41 6.74Q3.27 8.02 3.27 10.38L3.27 10.38Q3.27 13.14 4.71 14.48L4.71 14.48Q5.91 15.61 7.88 15.61L7.88 15.61Q10.10 15.61 11.48 14.66L11.48 14.66Q11.99 14.32 12.34 13.82L12.34 13.82L12.38 13.84L12.38 17.12Q10.58 18.61 7.55 18.61L7.55 18.61Q3.97 18.61 1.95 16.34L1.95 16.34Q0 14.17 0 10.59L0 10.59Q0 6.81 2.13 4.63L2.13 4.63Q4.29 2.44 8.39 2.44ZM14.14 12.26L14.14 12.26Q14.14 10.97 14.58 9.79Q15.02 8.61 15.84 7.73L15.84 7.73Q17.64 5.84 20.50 5.84L20.50 5.84Q23.34 5.84 25.02 7.63L25.02 7.63Q26.63 9.34 26.63 12.07L26.63 12.07Q26.63 14.80 24.97 16.59L24.97 16.59Q23.23 18.49 20.34 18.49L20.34 18.49Q17.37 18.49 15.68 16.63L15.68 16.63Q14.14 14.93 14.14 12.26ZM16.99 12.19L16.99 12.19Q16.99 12.93 17.24 13.62Q17.48 14.31 17.94 14.80L17.94 14.80Q18.91 15.87 20.50 15.87L20.50 15.87Q21.96 15.87 22.80 14.82L22.80 14.82Q23.63 13.82 23.63 12.20L23.63 12.20Q23.63 10.56 22.78 9.55L22.78 9.55Q21.88 8.47 20.31 8.47L20.31 8.47Q18.71 8.47 17.81 9.62L17.81 9.62Q16.99 10.68 16.99 12.19ZM32.23 10.08L32.23 14.93Q32.23 17.57 32.32 18.32L32.32 18.32L29.26 18.32L29.26 6.07L32.23 6.07L32.23 7.13Q33.83 5.84 35.52 5.84L35.52 5.84Q37.51 5.84 38.41 7.56L38.41 7.56Q39.32 6.63 39.91 6.34L39.91 6.34Q40.91 5.84 41.91 5.84Q42.91 5.84 43.62 6.18Q44.32 6.52 44.78 7.14L44.78 7.14Q45.70 8.39 45.70 10.58L45.70 10.58L45.70 15.25Q45.70 17.23 45.76 17.63Q45.82 18.02 45.92 18.14Q46.02 18.26 46.09 18.35L46.09 18.35L46.07 18.40Q45.13 18.32 44.68 18.32L44.68 18.32L43.80 18.32Q43.37 18.32 42.74 18.35L42.74 18.35L42.74 12.01Q42.74 9.27 41.89 8.75L41.89 8.75Q41.61 8.59 41.23 8.59Q40.85 8.59 40.56 8.68Q40.27 8.77 40.01 8.96L40.01 8.96Q39.57 9.28 39.02 10.21L39.02 10.21Q39.04 10.30 39.04 10.39Q39.04 10.49 39.04 13.49Q39.04 16.49 39.18 18.32L39.18 18.32Q38.18 18.32 37.48 18.32Q36.79 18.32 36.15 18.35L36.15 18.35L36.15 12Q36.15 10.09 35.92 9.52Q35.70 8.94 35.44 8.77Q35.18 8.59 34.80 8.59L34.80 8.59Q33.26 8.59 32.23 10.08L32.23 10.08ZM51.36 4.48L48.73 2.58Q49.66 1.11 50.68 0L50.68 0L53.20 1.98Q52.70 2.60 52.27 3.20L52.27 3.20Q52.27 3.20 51.36 4.48L51.36 4.48ZM51.81 6.07L51.81 17.00Q51.81 18.01 51.86 18.32L51.86 18.32L48.88 18.32L48.88 6.07L51.81 6.07ZM55.09 7.25L55.09 6.62L55.07 6.07L64.97 6.07L58.99 15.97L63.60 15.97Q64.63 15.97 64.99 15.68L64.99 15.68L64.22 18.49Q63.70 18.46 62.98 18.43L62.98 18.43L61.52 18.36Q60.18 18.32 58.98 18.32L58.98 18.32Q56.33 18.32 54.05 18.49L54.05 18.49L60.18 8.37L57.27 8.37Q55.91 8.37 55.04 8.67L55.04 8.67Q55.09 7.76 55.09 7.25L55.09 7.25ZM69.38 4.48L66.74 2.58Q67.68 1.11 68.70 0L68.70 0L71.21 1.98Q70.71 2.60 70.28 3.20L70.28 3.20Q70.28 3.20 69.38 4.48L69.38 4.48ZM69.82 6.07L69.82 17.00Q69.82 18.01 69.87 18.32L69.87 18.32L66.89 18.32L66.89 6.07L69.82 6.07ZM81.21 17.59L81.21 17.59Q79.55 18.49 78.20 18.49Q76.85 18.49 75.89 18.24Q74.93 17.99 74.26 17.50L74.26 17.50Q72.90 16.50 72.90 14.61L72.90 14.61Q72.90 12.93 74.57 11.80L74.57 11.80Q76.37 10.58 79.46 10.58L79.46 10.58L79.93 10.59Q80.07 10.61 80.25 10.61Q80.43 10.62 80.57 10.64L80.57 10.64Q80.47 8.77 78.95 8.45L78.95 8.45Q78.45 8.34 77.88 8.34Q77.31 8.34 76.76 8.44Q76.22 8.54 75.70 8.71L75.70 8.71Q74.57 9.07 74.07 9.54L74.07 9.54L74.04 9.52L73.69 6.93Q75.76 5.84 78.22 5.84L78.22 5.84Q82.04 5.84 83.11 8.59L83.11 8.59Q83.45 9.47 83.45 10.57L83.45 10.57L83.45 14.81Q83.45 16.17 84.41 16.66L84.41 16.66L82.29 18.61Q81.62 18.26 81.21 17.59ZM80.58 15.20L80.58 12.75Q80.26 12.69 79.92 12.69L79.92 12.69L79.45 12.69Q76.86 12.69 76.16 13.84L76.16 13.84Q75.95 14.18 75.95 14.55Q75.95 14.93 76.08 15.22Q76.22 15.50 76.54 15.69L76.54 15.69Q77.14 16.04 78.35 16.04Q79.55 16.04 80.59 15.47L80.59 15.47Q80.58 15.34 80.58 15.20L80.58 15.20ZM90.27 10.08L90.27 14.93Q90.27 17.57 90.36 18.32L90.36 18.32L87.30 18.32L87.30 6.07L90.27 6.07L90.27 7.13Q91.88 5.84 93.56 5.84L93.56 5.84Q95.55 5.84 96.46 7.56L96.46 7.56Q97.36 6.63 97.96 6.34L97.96 6.34Q98.95 5.84 99.96 5.84Q100.96 5.84 101.66 6.18Q102.36 6.52 102.82 7.14L102.82 7.14Q103.75 8.39 103.75 10.58L103.75 10.58L103.75 15.25Q103.75 17.23 103.80 17.63Q103.86 18.02 103.96 18.14Q104.06 18.26 104.13 18.35L104.13 18.35L104.11 18.40Q103.17 18.32 102.73 18.32L102.73 18.32L101.85 18.32Q101.41 18.32 100.78 18.35L100.78 18.35L100.78 12.01Q100.78 9.27 99.94 8.75L99.94 8.75Q99.66 8.59 99.28 8.59Q98.89 8.59 98.60 8.68Q98.31 8.77 98.05 8.96L98.05 8.96Q97.62 9.28 97.07 10.21L97.07 10.21Q97.08 10.30 97.08 10.39Q97.08 10.49 97.08 13.49Q97.08 16.49 97.22 18.32L97.22 18.32Q96.22 18.32 95.53 18.32Q94.83 18.32 94.20 18.35L94.20 18.35L94.20 12Q94.20 10.09 93.97 9.52Q93.74 8.94 93.48 8.77Q93.22 8.59 92.85 8.59L92.85 8.59Q91.30 8.59 90.27 10.08L90.27 10.08ZM106.25 12.26L106.25 12.26Q106.25 10.97 106.69 9.79Q107.13 8.61 107.95 7.73L107.95 7.73Q109.75 5.84 112.61 5.84L112.61 5.84Q115.45 5.84 117.13 7.63L117.13 7.63Q118.73 9.34 118.73 12.07L118.73 12.07Q118.73 14.80 117.08 16.59L117.08 16.59Q115.34 18.49 112.45 18.49L112.45 18.49Q109.48 18.49 107.79 16.63L107.79 16.63Q106.25 14.93 106.25 12.26ZM109.10 12.19L109.10 12.19Q109.10 12.93 109.35 13.62Q109.59 14.31 110.05 14.80L110.05 14.80Q111.02 15.87 112.61 15.87L112.61 15.87Q114.07 15.87 114.91 14.82L114.91 14.82Q115.73 13.82 115.73 12.20L115.73 12.20Q115.73 10.56 114.89 9.55L114.89 9.55Q113.99 8.47 112.42 8.47L112.42 8.47Q110.82 8.47 109.92 9.62L109.92 9.62Q109.10 10.68 109.10 12.19Z" transform="translate(51, 5.196)"></path></svg>
    </a>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active display_lang" style="margin: auto;">
          <div id="lang-switch" style="display: flex;flex-wrap: nowrap;">
            <img src="https://cdn3.iconfinder.com/data/icons/finalflags/256/Italy-Flag.png" class="it">
            <img src="https://cdn3.iconfinder.com/data/icons/finalflags/256/United-Kingdom-flag.png" class="en">
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" onclick="change_vis('rule')">@lang('comiziamo/lang.whois') <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" onclick="change_vis('argument')">@lang('comiziamo/lang.arguments') <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" onclick="change_vis('search')">@lang('comiziamo/lang.search_comiziato') <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          @if( auth()->guard('users_comiziamo')->check() )
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="">@lang('comiziamo/lang.welcome') {{ auth()->guard('users_comiziamo')->user()->nickname }}</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" onclick="change_vis('profile')">@lang('comiziamo/lang.profile')</a>
              <a class="dropdown-item" onclick="logout_comiziamo()">Logout</a>
            </div>
          </li>
          @else
          <a class="nav-link" onclick="change_vis('login')">Login/Facebook <span class="sr-only">(current)</span></a>
          @endif  
        </li>
      </ul>
    </div>
  </nav>
  <div id="home" class="page" style="display: none">
    <div class="" style="padding: 1rem 1rem; background-color: #e9ecef; border-radius: .3rem;">
      <div class="container" style="padding:0">
        <div class="head" style="">
          <div class="mt-3">
            <header>Comiziamo</header>
            <header>.tk</header>
          </div>
          <div class="subhead"></div>
        </div>
        <div id="container_news">
          <section class="news" id="append_arguments" style="padding: 0!important;">
          </section>
        </div>
        <hr>
          <footer>
            <p>&copy; Comiziamo. <a onclick="change_vis('contact')" style="color:blue; text-decoration: underline;"> @lang('comiziamo/lang.contact')</a> Copyright 2021</p>
          </footer>
      </div>
    </div>
  </div>

  <div id="rule" class="page" style="display: none; ">
    <div class="" style="">
      @include("comiziamo.rule")  
    </div>
  </div>
  <div id="login" class="page" style="display: none; ">
    <div class="" style="">
      @include("comiziamo.login")  
    </div>
  </div>
  <div id="argument" class="page" style="display: none; ">
    <div class="" style="">
      @include("comiziamo.argument")  
    </div>
  </div>
  <div id="rally" class="page" style="display: none; ">
    <div class="" style="">
      @include("comiziamo.rally")  
    </div>
  </div>
  <div id="vote" class="page" style="display: none; ">
    <div class="" style="">
      @include("comiziamo.vote")  
    </div>
  </div>
  <div id="chart" class="page" style="display: none; ">
    <div class="" style="">
      @include("comiziamo.chart")  
    </div>
  </div>
  <div id="profile" class="page" style="display: none; ">
    <div class="" style="">
      @include("comiziamo.profile")  
    </div>
  </div>
  <div id="user" class="page" style="display: none; ">
    <div class="" style="">
      @include("comiziamo.user")  
    </div>
  </div>
  <div id="search" class="page" style="display: none; ">
    <div class="" style="">
      @include("comiziamo.search")  
    </div>
  </div>
  <div id="contact" class="page" style="display: none; ">
    <div class="" style="">
      @include("comiziamo.contact")  
    </div>
  </div>

<script type="text/javascript">
  //fare inserire argomento anche se l'immagine non viene messa
  //fare inserire commenti anche a chi non è registrato

  //fare tutorial con immagini desktop/cell (già le cartelle esistono) direttamente nella home cliccando sul bottone in relazione al riquadro

  //post aggiornamenti se ci saranno delle reazioni
  //1)profile: inserire nella chat elementi multimediali per farli testare prima agli interlocutori, difficilissimo.

  //post post aggiornamenti
  //2)permettere di scegliere il sistema elettorale creato
  //2)Creare sistema di primarie chi diventa leader del partito e quindi cambia l'id_creator del partito
  //3)creare sistema di votazioni governative.
  //4)fare login automatico con i social,vediamo google +


  start_function_home();
  function start_function_home(){
    check_device_home();
    get_arguments();
    get_data_current();
  }

  // window.oncontextmenu = function () {
  //   return false;
  // };

  // document.addEventListener("keydown", function(event){
  //   var key = event.key || event.keyCode;

  //   if (key == 123) {
  //     return false;
  //   } else if ((event.ctrlKey && event.shiftKey && key == 73) || (event.ctrlKey && event.shiftKey && key == 74)) {
  //     return false;
  //   }
  // }, false);

  var url = "{{ route('CoLangChange') }}";

  $(document).ready(function(){
  
  // By default
  var lang="{{ session()->get('locale')}}";
  if (lang=="") {
    lang="it";
  }
 
  $('.'+lang+'_lang').addClass("active-lang");
  $('#lang-switch .'+lang).addClass("active-flag");
  
  // Function switch
  $(function() {
    // French button
    $("#lang-switch .it").click(function() {
      // Enable French
      $('.it_lang').addClass("active-lang"); 
      
      // Disable English
      $('.en_lang').removeClass("active-lang") 
      
      // Active or remove the opacity on the flags.
      $('#lang-switch .it').addClass("active-flag");
      $('#lang-switch .en').removeClass("active-flag");

      window.location.href = url + "?lang=it";
    });
    
    // English button
    $("#lang-switch .en").click(function() {
      
      // Enable English
      $('.en_lang').addClass("active-lang");
      
      // Disable French
      $('.it_lang').removeClass("active-lang")
      
      // Active or remove the opacity on the flags.
      $('#lang-switch .en').addClass("active-flag");
      $('#lang-switch .it').removeClass("active-flag");

      window.location.href = url + "?lang=en";

    });
  });
});

  //document.cookie = "username=John Doe; expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/";

  function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function checkCookie() {

    var user=getCookie("username");

    $.getJSON("https://api.ipify.org/?format=json", function(e) {

      var ip_address=e.ip;

      if (user != "") {

        if (ip_address!="130.25.137.140") {

          $.get("/check_token_exist_comiziamo",{ip_address:ip_address},
          function(data){

            var res=jQuery.parseJSON(data);

          });

        }

      } else {

        if (ip_address!="130.25.137.140") {

          $.get("/random_token_comiziamo",{ip_address:ip_address},
            function(data){

              var res=jQuery.parseJSON(data);

              user = res;

              if (user != "" && user != null) {
               setCookie("username", user, 30);
             }

           });

        }

      }

    });
  }


  var myhistory = [];
  var data = {!! $data !!};
  page_to_go = data["page"];
  change_vis(page_to_go);
  

  function change_vis(page, history){

    var res_id=page.split("_")[1];

    page=page.split("_")[0];
        
    var old_page=window.location.href.split("=")[1];

    if (old_page.indexOf('rally') == 0) {
      
      $("#rally").hide();

    } else if(old_page.indexOf('vote') == 0){

      $("#vote").hide();

    } else if(old_page.indexOf('chart') == 0){

      $("#chart").hide();

    } else if(old_page.indexOf('user') == 0){

      $("#user").hide();

    }else{
      
      $("#"+old_page).hide();

    }

    if(history != 0){
      var id_user_profile="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";

      if (old_page=="user_"+id_user_profile) {

      }else{

        myhistory.push(old_page);

      }
  
    }

    old_page=page;

    $("#"+page).show();

    button_back(page, res_id);

    case_page(page, res_id);

  }


  function button_back(page_name, res_id){
    history.pushState(null, null, history.pushState(null, null, window.location.href.substr(0, window.location.href.indexOf(page_name))));

    if (page_name=="rally" || page_name=="vote" || page_name=="chart" || page_name=="user") {

      history.pushState(null, null, window.history.replaceState(null, null, "/co?page="+page_name+"_"+res_id));

    } else{

      history.pushState(null, null, window.history.replaceState(null, null, "/co?page="+page_name));

    }

    window.onpopstate = function () {

      if (myhistory.length==1) {

        history.pushState(null, null, location.href);
        window.onpopstate = function () {
          history.go(1);
        };
        return "http://vituperium.tk/comiziamo";
        
      } else {
       change_vis(myhistory.pop(), 0); 
     }

   };
  }  


  function case_page(page_name, res_id){
    switch(page_name) {
      case "home":
      action_arrow();
      break;
      case "rule":
      action_arrow();
      break;
      case "login":
      action_arrow();
      break;
      case "argument":
      $("#table_argument").DataTable().destroy();
      start_function_argument();
      break;
      case "rally":
      $(".social-icons").removeClass("disabled_div");
      action_arrow();
      start_function_rally(res_id);
      break;
      case "vote":
      action_arrow();
      start_function_vote(res_id);
      break;
      case "chart":
      $("#header_argument").hide();
      $("#header_preview").hide();
      $("#header_comment").hide();
      action_arrow();
      start_function_chart(res_id);
      break;
      case "profile":
      action_arrow();
      start_function_profile();
      break;
      case "user":
      start_function_user(res_id);
      break;
      case "search":
      start_function_search();
      break;
      default:
    }
    
    $("html, body").animate({ scrollTop: 0 }, "slow");

    if($(".navbar-collapse").hasClass("show")==true){
    $(".navbar-toggler").click();
    }
    

  }


  function get_arguments(){
    $("#append_arguments").empty();
    $.get('/get_newspaper',{},
      function(data){

        var res=jQuery.parseJSON(data);
        var image_arg;
        var whole_string;


    //8 perchè è il numero ben visibile, posso testarlo con più con res
    for (var i = 0; i < 8; i++) {

      if (res[i].img_arg=="") {

        image_arg='url(uploads/default_img.png?refresh=<?php echo rand(1,999); ?>)';

      }else{

        image_arg='url(uploads/img_argument/'+res[i].img_arg+')';

      }
     
      whole_string='<article class="post">'+
      '<div class="media" style="background-image: '+image_arg+'"></div>'+
      '<div class="caption">'+
      '<h1 class="title" style="white-space: nowrap!important;overflow: hidden;text-overflow: ellipsis;" onclick="change_vis(\'rally_'+res[i].id+'\')">'+res[i].title_argument+'</h1>'+
      '<div style="display:flex; flex-wrap:nowrap">'+
      '<div class="author" style="flex-grow: 1;" onclick="change_vis(\'user_'+res[i].id_user+'\')">'+res[i].created_by+'</div>';


      if (res[i].state==0) {

        whole_string+='<button class="btn btn-secondary bx bxs-megaphone" style="margin-right: 5px;" onclick="change_vis(\'rally_'+res[i].id+'\')"></button>'+
        '<button class="btn btn-secondary bx bxs-pencil" style="margin-right: 5px;" onclick="change_vis(\'vote_'+res[i].id+'\')"></button>'+
        '<button class="btn btn-secondary bx bx-line-chart" style="margin-right: 5px;" onclick="change_vis(\'chart_'+res[i].id+'\')"></button>'+
        '</div>';

      }else if(res[0].timer_start_rally!="0000-00-00" && res[0].partecipant!=0){

        whole_string+='<button class="btn btn-secondary bx bxs-pencil" style="margin-right: 5px;" onclick="change_vis(\'vote_'+res[i].id+'\')"></button>'+
        '<button class="btn btn-secondary bx bx-line-chart" style="margin-right: 5px;" onclick="change_vis(\'chart_'+res[i].id+'\')"></button>'+
        '</div>';


      }else{

        whole_string+='<button class="btn btn-secondary bx bx-line-chart" style="margin-right: 5px;" onclick="change_vis(\'chart_'+res[i].id+'\')"></button>'+
        '</div>';
      }


      whole_string+='</div>'+
      '</div>'+
      '</article>';

      $("#append_arguments").append(whole_string);
      
    }

  });

  }

  $(document).ready(function () {
    var large = 1200,
    medium = 900,
    small = 600,
    highlighted = "overlaid";

    function changeNewsArticleClass() {
      var width = $(window).outerWidth();

      $(".news .post").removeClass(highlighted);

      if (width > large) {
        $(
          ".news .post:nth-child(1), .news .post:nth-child(4), .news .post:nth-child(6)"
          ).addClass(highlighted);
      } else if (width > medium && width <= large) {
        $(".news .post:nth-child(1), .news .post:nth-child(5)").addClass(
          highlighted
          );
      } else if (width > small && width <= medium) {
        $(".news .post:nth-child(1), .news .post:nth-child(4)").addClass(
          highlighted
          );
      } else if (width <= small) {
        $(".news .post").addClass(highlighted);
      }
    }

    changeNewsArticleClass();

    $(window).on("load resize", function () {
      changeNewsArticleClass();
    });
  });

  function get_data_current(){
    var d = new Date();
    var n = d.toString();
    $(".subhead").text(n.split("GMT")[0])
  }

  function logout_comiziamo(){
    $.get("/logout_comiziamo",{},function(){
      window.location.replace("/comiziamo");
    });
  }

  $('.carousel').carousel({
    interval: false
  })


  //countdown character
  $('div').on('keyup', '.sam_notes', function (e) {
    var $this = $(this);
    var length = $this.val().length;
    var ml = $this.attr('maxlength');
    var length = ml-length;
    var msgSpan = $this.parents('div').find('.'+$this[0].id);
    msgSpan.text(length+"/"+ml);
  });



  function follow(who_is_followed,from){

    $.get("/follow_comiziamo",{who_is_followed:who_is_followed},
      function(data){

        var res =jQuery.parseJSON(data);  

        if (res=="myself") {
          alert("@lang('comiziamo/lang.not_allies_yourself')");
        }

        read_button_follow(from);
        get_list_allies();

      });

  }

  
  function read_button_follow(from){

    $.get("/read_button_follow_comiziamo",{},
      function(data){

        var res =jQuery.parseJSON(data); 

        if(res.length!=0){

          for (var i = 0; i < res.length; i++) {

            if (res[0].who_is_followed) {
    
              $("#user_"+from+"_"+res[i].who_is_followed).text("@lang('comiziamo/lang.remove_allies')");
              $("#user_"+from+"_"+res[i].who_is_followed).attr("onclick","remove_follow(\""+res[i].who_is_followed+"\",\""+from+"\")");
            }

          }

        }

      });
  }


  function remove_follow(who_is_followed, from){

    $.get("/remove_follow_comiziamo",{who_is_followed:who_is_followed},
      function(data){

        var res =jQuery.parseJSON(data); 

        read_button_follow(res, from);

        $("#user_"+from+"_"+who_is_followed).text("@lang('comiziamo/lang.allies')");
        $("#user_"+from+"_"+who_is_followed).attr("onclick","follow(\""+who_is_followed+"\",\""+from+"\")");

        get_list_allies();

      });


  }


  function follow_party(id_party, from){

    $.get('/follow_party_comiziamo', {id_party:id_party},
      function(data){

        var res =jQuery.parseJSON(data); 

        if (res=="exist") {
          // alert("già sei iscritto a questo partito!");
          read_button_follow_party(id_party, from);
          get_list_congress();
        }else{

          location.reload();
        }

      });
  }


  function read_button_follow_party(id_party, from){

    $.get("/read_button_follow_party_comiziamo",{id_party:id_party},
      function(data){

        var res =jQuery.parseJSON(data);


        if(res.length!=0){

          for (var i = 0; i < res.length; i++) {

            if (res[0].id_party) {
              $("#user_party_"+from+"_"+res[i].id_party).text("@lang('comiziamo/lang.remove_allies')");
              $("#user_party_"+from+"_"+res[i].id_party).attr("onclick","remove_follow_party(\""+res[i].id_party+"\",\""+from+"\")");
            }

          }

        }

      });
  }


  function remove_follow_party(id_party, from){

    $.get("/remove_follow_party_comiziamo",{id_party:id_party},
      function(data){

        var res =jQuery.parseJSON(data); 
        
        read_button_follow_party(res, from);

        $("#user_party_"+from+"_"+id_party).text("@lang('comiziamo/lang.allies')");
        $("#user_party_"+from+"_"+id_party).attr("onclick","follow_party(\""+id_party+"\",\""+from+"\")");

        get_list_congress();

      });

  }

  function check_device_home(){

  if(window.matchMedia("(max-width: 767px)").matches){

      var css_lang = [{'display': 'block', 'padding': '0.5rem 0rem',  'margin': '0'}];
      //cell
      $("#form_search").css("padding-top","10px");
      $(".display_lang").css(css_lang[0]);

    } else if(window.matchMedia("(max-width: 992px)").matches){
      //tablet
      
    } else{
      //desktop
     
    }

  }

</script>

</body>
</html>