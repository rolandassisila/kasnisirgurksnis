<?php
    require __DIR__ . '/src/app.php';
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kąsnis ir Gurkšnis</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>
<body>
<!--Header start-->
<header class="site-header">
    <div class="container flex-container">
     <div class="logo">
         <img id="logotipas" src="images/logo.jpg" width="auto"
              alt="kasnisirgurknis">
         <p>Kąsnis ir Gurkšnis</p>
    </div>
            <nav class="main-nav">
                <ul class="nav_links">
                    <li><a href="index.php#apiemus">Apie</a></li>
                    <li><a href="index.php#slider1">Galerija</a></li>
                    <li><a href="index.php#slider1">Receptai</a></li>
                    <li><a class="contact" href="index.php#contact">Kontaktai</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container"> 
                    <li><a href="index.php#apiemus">Apie</a></li>
                    <li><a href="index.php#slider1">Galerija</a></li>
                    <li><a href="index.php#slider1">Receptai</a></li>
                    <li><a href="index.php#contact">Kontaktai</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </div>
</header>
<!--HERO section-->
<section id="home" class="slider">
      <div class="row">
                <div class="owl-carousel owl-theme">
                     <div class="item item-first">
                          <div class="caption">
                               <div class="container">
                                    <div class="col-lg-12 col-md-8 col-sm-12">
                                         <h3>SVEIKO IR SKANAUS MAISTO IDĖJOS</h3>
                                         <h1>Gaminame maistą namuose ir patiekiame jį spalvingu kampu</h1>
                                         <a href="https://www.instagram.com/kasnisirgurksnis/"  target="_blank" class="section-btn btn btn-default smoothScroll">MŪSŲ INSTAGRAM PUSLAPIS</a>
                                    </div>
                               </div>
                          </div>
                     </div>

                     <div class="item item-second">
                          <div class="caption">
                               <div class="container">
                                    <div class="col-lg-12 col-md-8 col-sm-12">
                                         <h3>VEGETARIŠKI RECEPTAI</h3>
                                         <h1>Kuriame maistą ir pateikiame detalią informaciją, kaip jį pasigaminti patiems.</h1>
                                         <a href="https://www.instagram.com/kasnisirgurksnis/" target="_blank" class="section-btn btn btn-default smoothScroll">MŪSŲ INSTAGRAM PUSLAPIS</a>
                                    </div>
                               </div>
                          </div>
                     </div>
                     <div class="item item-third">
                          <div class="caption">
                               <div class="container">
                                    <div class="col-lg-12 col-md-8 col-sm-12">
                                         <h3>SKONINGI GĖRIMAI</h3>
                                         <h1>Pateikiame lengvai paruošiamus ir skanius kokteilius.</h1>
                                         <a href="https://www.instagram.com/kasnisirgurksnis/" target="_blank" class="section-btn btn btn-default smoothScroll">MŪSŲ INSTAGRAM PUSLAPIS</a>
                                    </div>
                               </div>
                          </div>
                     </div>
                </div>

      </div>
 </section>

<!--PERFECTIONS aka second block-->
<section class="perfections">
        <div class="container">
            <div class="section-heading">
                <h2>Perfection</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipscing elit.</p>
            </div>
            <div class="section-content flex-container">
                <div class="picture">
                    <a href=""><img id="foto1" src="images/cocktail1.jpg" alt="Kokteilis" width="500px" height="640px">
                            <h3>Kokteiliai</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                    </a>
                </div>
                <div class="picture">
                    <a href="#"><img id="foto2" src="images/maindish1.jpg" alt="Patiekalai" width="500px" height="640px">
                            <h3 id="phototext1">Patiekalai</h3>
                            <p id="phototext2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                    </a>
                </div>
                <div class="picture">
                    <a href="#"><img id="foto3" src="images/dessert1.jpg" alt="Desertai" width="500px" height="640px">
                            <h3>Desertai</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.</p>
                    </a>
                </div>
            </div>
        </div>
</section>
<!--ABOUT US aka third block-->
<section class="apiemus" id="apiemus">
        <div class="container">
            <div class="whiteborder">
                <h1>Apie mus</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#">MŪSŲ ISTORIJA</a>
            </div>
        </div>
    </section>
<!-- SLIDER aka 4th block-->
<div class="container" id="slider1">
    <div class="slidertext">
			<h1>Galerija</h1>
            <p>Šiuo metu mūsų galėrijoje rasite <span class="count">75</span> unikalias nuotraukas ir receptus</p>
    </div>
		</div>
		<section class="slider1" >
			<div class="container">
				<div class="slider-container">
					<div class="">
						<img src="images/slider1.jpg" alt="maistonuotrauka">
					</div>
					<div class="">
						<img src="images/slider2.jpg" alt="maistonuotrauka">
					</div>
					<div class="">
						<img src="images/slider3.jpg" alt="maistonuotrauka">
					</div>
                    <div class="">
						<img src="images/slider4.jpg" alt="maistonuotrauka">
					</div>
					<div class="">
						<img src="images/slider5.jpg" alt="maistonuotrauka">
					</div>
					<div class="">
						<img src="images/slider6.jpg" alt="maistonuotrauka">
					</div>
                </div>
			</div>
		</section>
    
<!-- CONTACT 5th block -->
<section id="contact">
    <div class="container">
        <div class="row">
                 <div class="col-md-12 col-sm-12">
                      <div class="col-md-12 col-sm-12">
                          <div class="section-title">
                                 <h2>Susisiekite su mumis</h2>
                          </div>
                     </div>
                         <!-- CONTACT FORM -->
                <form action="#" method="post" id="contact-form">

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="Vardas ir Pavardė">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="El. paštas">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Tema">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Jūsų žinutė..."></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Siųsti žinutę</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>    
    <!-- FOOTER aka final block -->
    <footer class="footer">
        <div class="container">
            <nav class="nav footer-nav">
                <ul class="flex-container">
                    <li><a href="https://www.instagram.com/kasnisirgurksnis/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                    <li><a href="https://www.instagram.com/kasnisirgurksnis/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                    <li><a href="https://www.instagram.com/kasnisirgurksnis/" target="_blank"> <i class="fa fa-pinterest" aria-hidden="true"></i> Pinterest</a></li>
                    <li><a href="https://www.instagram.com/kasnisirgurksnis/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                    <li><p> <?= date('Y') ?> &copy;  Kąsnis ir Gurkšnis</p></li>
                </ul>
            </nav>
        </div>
    </footer>
    
    
		<script src="js/jquery.js"></script>
		<script src="js/tiny-slider.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/customowlslider.js"></script>
</body>
</html>