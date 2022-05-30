<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ever Growing Company Limited</title>
  <link rel="shortcut icon" type="image/icon" href="assets/images/logo.png"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

</head>

<body>
<!-- site header -->
<header id="site-header" class="fixed-top">
  <?php
   include 'navigation.php';
  ?>
</header>
<!-- //site header -->

<!-- about page breadcrumns -->
<section class="inner-banner">

</section>

<!-- //about page breadcrumns -->

<!-- about page section1-->
<section class="w3l-about">
    <div class="container">
        <div class="row about-content">
            <div class="col-lg-6 info mb-lg-0 mb-5 align-center">
                <span><h4 style="color: blue;">Welcome Ever Growing Company Limited</h4></span><br>
                <p style="color: black;">Ever Growing Company Limited is located at Dar es Salaam, a beautiful harbour city. It is founded in the summer of 2017 and develops rapidly. We devote ourself to the construction and development of this city all the time, especially in the aspect of building and fishery. At first, the main products are foam boxes. As the growth of the market demand, the foam boards are put into production soon. Currently, it covers almost all kinds of foam products including foam box, foam board, foam lined-in and composite board and so on. In the future, our products will be more various.</p><br>
                <h4 style="color: blue;">Our product</h4>
                <ul> 
                  <li>Foam Board</li>
                  <li>Foam Box</li>
                  <li>Float</li>
                  <li>Foam composite board</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="assets/images/about.png" class="img-fluid img-shadow" alt="about"><br>
                
            </div>
        </div>
    </div>
</section>
<!-- /contact -->
<div class="mapouter"><div class="gmap_canvas"><iframe width="1400" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=6%C2%B054'28.2%22S%2039%C2%B020'48.9%22E&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1400px;}</style>
</div>



      <div class="copy">
            <p style="text-align: center;color: #0f2453;">© 2020 Ever Growing Company Limited . All Rights Reserved </a> </p>
        </div>
<!-- //about page section1-->

<!-- /mobile section --->

<!-- //mobile section -->

<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- //move top -->

<!-- javascript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- libhtbox -->
<script src="assets/js/lightbox-plus-jquery.min.js"></script>

<!-- particles -->
<script src='assets/js/particles.min.js'></script>
<script src="assets/js/script.js"></script>
<!-- //particles -->

<!-- owl carousel -->
<script src="assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      margin: 10,
      nav: true,
      loop: false,
      responsive: {
        0: {
          items: 1
        },
        767: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>