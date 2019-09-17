<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">

    <title>Strona główna</title>
</head>
<body>
<div class="container-fluid menu-margin">
    <div class="row">
        <div class="col-xl-12">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: #523B28">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" width="60" height="60" class="d-inline-block align-content-center" alt="">
                    Toys-Master
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#prod_zabaw">Produkcja naszych zabawek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#eco_drewn">Eko zabawki drewniane</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#szop_cho">Szopki i choinki</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <br class="menu-margin" />
    <div class="row content-padding">
        <div class="col-xl-12" id="prod_zabaw">
            <h1 class="header-text">Kilka słów o produkcji naszych zabawek</h1>
        </div>
        <div class="col-xl-12 content-text inner-padding">
            <?php include 'php/content.php'; ?>
        </div>
        <div class="col-xl-12" id="eco_drewn">
            <h1 class="header-text">Ekologiczne zabawki drewniane</h1>
        </div>
    </div>

    <div class="row content-padding">

        <div class="col-xl-12 p-3 ">

            <div class="container-fluid inner-padding">

                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/dwuplatowiec.jpg" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center text-img-caption">
                            <img src="img/helikopter.jpg" class="img-thumbnail">
                            <?php include 'php/img_caption_1.php'; ?>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/kamper.jpg" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/kamper_otwarty.jpg" class="img-thumbnail">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/500x300.png" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/500x300.png" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/500x300.png" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/500x300.png" class="img-thumbnail">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/500x300.png" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/500x300.png" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/500x300.png" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2 border bg-light m-1 text-center">
                            <img src="img/500x300.png" class="img-thumbnail">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row content-padding">
        <div class="col-xl-12" id="szop_cho">
            <h1 class="header-text">Szopki Bożonarodzeniowe</h1>
        </div>
    </div>
    <div class="row content-padding">
        <div class="col-xl-12" id="contact">
            <h1 class="header-text">Kontakt</h1>
        </div>
    </div>
    <div class="row content-padding footer-style">
        <footer class="col-xl-12">
            Wszystkie prawa autorskie do zamieszczonych na stronie materiałów są zastrzeżone przez firmę Miriam - 2019
        </footer>
    </div>

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>