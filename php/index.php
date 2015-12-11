<!DOCTYPE html>
<html>
<div id="logo-container">
      <div id="logo"></div>
</div>
  <head>
    <?php include './head.php'; ?>
  </head>

  <body class="home">
  <!--
    <div id="splash-container">
      <div id="splash"></div>

      <img class="splash-content" id="desktop" src="./img/orangelogo.png">
      <img class="splash-content" id="mobile" src="./img/orangelogoleft.png">
     
    </div>
    -->

    <?php include './header.php'; ?>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./img/home1.jpg" alt="Caption1">
      <!--<div class="carousel-caption">
        <h3>Caption Title</h3>
        <p>Caption Text</p>
      </div>
      -->
    </div>

    <div class="item">
      <img src="./img/home2.jpg" alt="Caption2">
      <!--<div class="carousel-caption">
        <h3>Caption Title</h3>
        <p>Caption Text</p>
      </div>
      -->
    </div>

    <div class="item">
      <img src="./img/home3.jpg" alt="Caption3">
      <!--<div class="carousel-caption">
        <h3>Caption Title</h3>
        <p>Caption Text</p>
      </div>
      -->
    </div>

    <div class="item">
      <img src="./img/home4.jpg" alt="Caption4">
      <!--<div class="carousel-caption">
        <h3>Caption Title</h3>
        <p>Caption Text</p>
      </div>
      -->
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div id="content-wrapper" class="content container">
      <div id="main-content" class="row">
        <div class="col-md-8">

        <h4>
            Support our new Crowdfunding campaign.

            <a href="https://www.gofundme.com/fundillini">Donate to the team!</a>
          </h4>

          <h3>About Us</h3>

          <p>The collegiate chapter of the Society of Automotive Engineers (SAE) at the University of Illinois aims to provide its members with numerous educational, professional, and social opportunities related to vehicular design. As part of this initiative, UIUC fields the Formula SAE team.</p>

          <p>Each year, Formula SAE teams are challenged by a fictional manufacturing company to design and develop a small formula-style racing car targeted at the nonprofessional weekend autocross enthusiast. Based on a predetermined set of templates and rules, teams must design the fastest, most effective racing machine possible while minimizing costs, maximizing reliability, and utilizing the latest technologies in racing today. Competitions are held annually in various places all over the world (Michigan, Nebraska, Australia, Brazil, Italy, Germany, etc.) where these design teams bring their car and compete against some of the best engineering students worldwide.</p>

          <h4>
            Have something awesome to contribute?

            <a href="./join.php">Join the Team</a>
          </h4>

          
          <img src="./img/rendered_five.jpg">
        </div>

        <div class="col-md-4">
          <div id="likebox-wrapper">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fillinimotorsports&amp;width=400&amp;height=569&amp;colorscheme=light&amp;show_faces=false&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=143039425897009" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:593px; margin-top: 30px;" allowTransparency="true"></iframe>
          </div>
        </div>
      </div>
    </div>

    <?php include './footer.php'; ?>
  </body>
</html>
