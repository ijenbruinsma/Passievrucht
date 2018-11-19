<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link href="Styling/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'menu.php';?>

<header id="page-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <img class="headerLogo" src="images/headerlogo.png">
                    <p class="skills"></p>
                    <p class="skills"></p>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="content-wrapper">

    <section class="primary" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-4">
                    <img src="http://lorempixel.com/360/260/nature/">
                </div>
                <div class="col-sm-4">
                    <img src="http://lorempixel.com/360/260/animals/">
                </div>
                <div class="col-sm-4">
                    <img src="http://lorempixel.com/360/260/abstract/">
                </div>
            </div>
        </div>
    </section>
    
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Content</h2>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.</p>
                </div>
                <div class="col-lg-4">
                    <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.</p>
                </div>
            </div>
        </div>
    </section>
    


    
<?php include 'footer.php';?>




</body>
</html>