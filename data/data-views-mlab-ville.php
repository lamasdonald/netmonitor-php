<?php
    include('includes/connexion.php');
    
    
?>
<!DOCTYPE html>

<html lang="fr">
<!-- ici repose le header -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIM - Data Views</title>
    <meta name="description" content="Multipurpose HTML template.">
    <script src="../HTWF/scripts/jquery.min.js"></script>
    <link rel="stylesheet" href="../HTWF/scripts/bootstrap/css/bootstrap.css">
    <script src="../HTWF/scripts/script.js"></script>
    <!--les graphiques-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@1.24.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0-beta.3/dist/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@0.2.1"></script>
    <script src="includes/chartjs-chart-financial.js" type="text/javascript"></script>
    <!--les graphiques-->
    <link rel="stylesheet" href="../HTWF/style.css">
    <link rel="stylesheet" href="../HTWF/css/content-box.css">
    <link rel="stylesheet" href="../HTWF/css/image-box.css">
    <link rel="stylesheet" href="../HTWF/css/animations.css">
    <link rel="stylesheet" href="../HTWF/css/components.css">
    <link rel="stylesheet" href="../HTWF/scripts/flexslider/flexslider.css">
    <link rel="stylesheet" href="../HTWF/scripts/magnific-popup.css">
    <link rel="stylesheet" href="../HTWF/scripts/php/contact-form.css">
    <link rel="stylesheet" href="../HTWF/scripts/social.stream.css">
    <link rel="icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../skin.css">
</head>
<!-- fin repose le header -->

<body class="transparent-header">
<div id="preloader"></div>
    <header class="fixed-top scroll-change" data-menu-anima="fade-bottom">
        <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
            <div class="navbar navbar-main">
                <div class="container">
                    <!-- ici repose l'entete du site -->
                    <?php include('includes/entete.php'); ?>
                    <!-- fin entete du site -->
                </div>
            </div>
        </div>
    </header>
    <div class="header-base" style="padding-top:10px;padding-bottom:0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <h1>Visualisation des donn??es par ville </h1>
                        <p>Cette Visualisation des donn??es de mesure de l'??tat de la connexion au B??nin suivant chaque Ville est bas??e sur les donn??es de mesure collect??es par M-Labs et recup??r??es directement depuis BigQuery.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a href="index.php">Accueil</a></li>
                        <li href="data-views-mlab.php">mlab</li>
                        <li class="active">Villes</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-image bg-top" style="background-image:url(../images/bg-8.jpg);">
        <div class="container" style="padding-top:30px;">
            <div class="row">
                <div class="col-md-12 col-center text-center">  
                    <h2 style="font-family: 'Times New Roman', Times, serif;"> Graphique 2020</h2>
                    <hr class="space" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <canvas id="Downloads" height="150"></canvas>
                    <h4 style="font-family: 'Times New Roman', Times, serif;"> Download Speed (10 derni??res semaines)</h4>
                </div>
                <div class="col-md-6 text-center">
                    <canvas id="Uploads" height="150"></canvas>
                    <h4 style="font-family: 'Times New Roman', Times, serif;">Upload Speed (10 derni??res semaines)</h4>
                </div>
                <div class="col-md-6 text-center">
                    <canvas id="Drtt" height="150"></canvas>
                    <h4 style="font-family: 'Times New Roman', Times, serif;">Round Trip Time en milliseconde (10 derni??res semaines)</h4>
                </div>
                <div class="col-md-6 text-center">
                    <canvas id="lost" height="150"></canvas>
                    <h4 style="font-family: 'Times New Roman', Times, serif;">Taux de Perte en % (10 derni??res semaines)</h4>
                </div>
            </div>
        </div><br/>
    </div>
    <div class="section-bg-image bg-top" style="background-image:url(../images/bg-9.jpg);">
        <div class="container" style="padding-top:30px;">
            <div class="row">
                <div class="col-md-12 col-center text-center">  
                    <h3 style="font-family: 'Times New Roman', Times, serif;"> Evolution du Nombre de Test de l'ann??e 2020</h3>
                    <hr class="space" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <canvas id="chart" height="80"></canvas>
                    <h4 style="font-family: 'Times New Roman', Times, serif;">Abscisse : en semaine  || Ordonn??e : en Nombre de test</h4>
                </div>
            </div>
        </div>
    </div>
    <!--fin du graphique-->
    
    
    <!-- ici repose le footer.. Ameen-->
    <?php include('includes/footer.php'); ?>
    <!-- ici repose le footer.. Ameen-->


    
    <!--fin script graphe-->
</body>
</html>