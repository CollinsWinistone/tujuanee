<?php

/**
 * Teams members that contributed to Cosaworld.com
 * @author Collins Simiyu
 */

    session_start();
    require 'includes/dbh.inc.php';

    define('TITLE',"Cosa Team");

    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }

    include 'includes/HTML-head.php';
?>


        <link href="css/creator-portfolio.min.css" rel="stylesheet">
    </head>

    <body style="background: #f1f1f1">

        <?php include 'includes/navbar.php'; ?>


        <div class="jumbotron text-white" style="background-image: url('img/team-cover.png')">
            <div class="container">
              <h1 class="display-3">The Cosa Creators</h1>
              <h4>The Brains and Brawns behind all this</h4>
              <h1><a href="https://github.com/CollinsWinistone">
                      <i class="fa fa-github" aria-hidden="true"></i>
                  </a> &raquo;</h1>
            </div>
        </div>


      <div class="container">

        <section class="content-section" id="portfolio">

          <div class="container">

            <div class="content-section-heading text-center">
              <h3 class="text-secondary mb-0">The Minds Behind Cosa</h3>
              <h2 class="mb-5">The Cosa Team</h2>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-6">
                  <a class="portfolio-item" href="#" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Collins Simiyu</h2>
                      <p class="mb-0 text-white">Elizabeth is everything</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="img/liz.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="#" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Elizabeth Omuga</h2>
                      <p class="mb-0 text-white">Software Engineer is my maan</p>
                    </span>
                  </span>
                    <img class="img-fluid" src="img/lizzy.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="#" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Elizabeth Amojong</h2>
                      <p class="mb-0 text-white">I love Collins Simiyu</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="img/liz.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="#" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Queen Lizzy</h2>
                      <p class="mb-0 text-white">You are my love</p>
                    </span>
                  </span>
                    <img class="img-fluid" src="img/lizzy.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
        </section>


      </div>

        <?php include 'includes/footer.php'; ?>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>
