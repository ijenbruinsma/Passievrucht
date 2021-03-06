<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Passievrucht</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/portfoliostyle.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free-5.5.0-web/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='fonts/themix.css' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <img src="img/aventuslogo.png" style="max-height: 70px;" alt="">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Over ons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header carousel-->
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/aventus-bg.jpg" alt="" style="object-fit: cover;height:768px;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/aventus2-bg.jpg" alt="" style="object-fit: cover;height:768px;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Vorige</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Volgende</span>
    </a>


  </div>


  <!-- Portfolio section -->

  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">

       
        <div class="col-md-12 text-center">

         

          <div class="portfolio-menu text-center">

            <ul>
              <h2 class="section-heading text-uppercase">Portfolio</h2>
              Filteren op:
              <li class="active" data-filter="*">Alles</li>
              <li data-filter=".java">Java</li>
              <li data-filter=".web">Webdevelopment</li>           
             
            </ul>
          </div>
		  
		  <?php

function CallAPI()
{
  $url = "http://viggo.holidayrentcenter.com/project/get";

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_POST, true);
  //Used if $data is defined
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($curl);
  curl_close($curl);
  //Decode the given data from the api
  $data = json_decode($response, true);
  
  return $data;
}
?>

		  
         <div class="portfolio-item">
<?php
		$data = CallAPI();

 foreach ($data['records'] as $project) {   
	 ?>
	 <div class="portfolio-item">
		<div class="item java">
              <img src="img/about/1.jpg" alt="" style="width: 100%;">
              <p>Naam project:<?php echo "$project[project_title]"?> </p>
              <p>Vak: <?php echo "$project[course_id]"?></p>
              <p>Leerjaar: <?php echo "$project[project_year]"?> </p>
			  
            </div>
 <?php } ?>
           </div>
         </div>   
       </div>
     </div>
     
   </section>


   <!-- script portfolio -->
   <script src="js/jquery.min.js"></script>
   <script src="js/isotope.pkgd.min.js"></script>
   
   <script>
     $('.portfolio-item').isotope({
       itemSelector: 'item',
       layoutMode: 'fitRows'
     });
     $('.portfolio-menu ul li').click(function(){
       $('.portfolio-menu ul li').removeClass('active');
       $(this).addClass('active');

       var selector = $(this).attr('data-filter');
       $('.portfolio-item').isotope({
         filter: selector
       });
       return false;
     });
   </script>


   <!-- Over ons  -->
   <section id="about" style="background-color: #3EB1C8">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Over ons</h2>
        </div>
      </div>

      <div class="row" style="margin-top: 5%;">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/about/aventus1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Over Aventus</h5>
            <p class="card-text">De school waar jij 't maakt. Ontdek hier alle over Aventus.</p>
            <a target="_blank" href="https://www.aventus.nl/dit-aventus/over-aventus" class="btn btn-primary">Meer informatie</a>
          </div>
        </div>
        <div class="card" style="width: 18rem; margin-left: 12%;">
          <img class="card-img-top" src="img/about/aventus3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Onze visie op onderwijs</h5>
            <p class="card-text">Hoe werkt goed onderwijs? Zo pakken wij dat aan.</p>
            <a target="_blank" href="https://www.aventus.nl/dit-aventus/verder-komen-met-onze-kijk-op-onderwijs" class="btn btn-primary">Meer informatie</a>
          </div>
        </div>
        <div class="card" style="width: 18rem; margin-left: 12%;">
          <img class="card-img-top" src="img/about/aventus2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">De locaties</h5>
            <p class="card-text">Bekijk hier de locaties waar je een opleiding van Aventus kunt volgen.</p>
            <a target="_blank" href="https://www.aventus.nl/dit-aventus/locaties" class="btn btn-primary">Meer informatie</a>

          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Het team dat aan deze website heeft gewerkt</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Janberd Aydin</h4>
              <p class="text-dark">Webdesign</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>


          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Ijen Bruinsma</h4>
              <p class="text-dark">Webdesign</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Bas Bluemink</h4>
              <p class="text-dark">Website/Api</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>


          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Koen van der Heijden</h4>
              <p class="text-dark">Website/Api</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Viggo de Vries</h4>
              <p class="text-dark">Api</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Steward Drysdale</h4>
              <p class="text-dark">CMS</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Dylan Roubos</h4>
              <p class="text-dark">CMS</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>


          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Teun Ankersmit</h4>
              <p class="text-dark">Api</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </section>


      <!--  -->

      <!-- Footer -->
      <footer style="background-color:#7474C1 ;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <span class="copyright">Copyright &copy; Passievrucht 2018</span>
            </div>

          </div>
        </div>
      </footer>


      <!-- scripts -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Plugin -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Contactformulier -->
      <script src="js/jqBootstrapValidation.js"></script>
      <script src="js/contact_me.js"></script>

      <!-- custom -->
      <script src="js/agency.min.js"></script>

      <script src="js/isotope.pkgd.min.js"></script>


    </body>

    </html>

  </body>
  </html>