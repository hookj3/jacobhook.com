<?php
include "header.php";
?>
</head>
<body class="loading mainContainer" id="home">
<div class="secondaryPages">
	<div class="navigation">
		<h1 class="altNav altTitle" alt="Jacob Hook" title="Jacob Hook"><a href="index.php">Jacob Hook</a></h1>
		<!--p style="color:white;font-family: 'Raleway', sans-serif;">Website Under Construction</p-->
		<div class="altNav" style="margin-bottom: 2%;">
      <a class="links" href="work.php">Work</a> | <a class="links" href="blog.php">Blog</a> | <a class="links" href="contact.php"> Contact</a>
    </div>
	</div>
</div>
<div class="row">
  <div class="col-md-2"></div>
	<div class="col-md-8">
    <?php
      $dirname = "img/work/";
      $images = glob($dirname."*.jpg");
      foreach($images as $image) {
        echo '<img alt="Jacob Hook" title="Jacob Hook" style="width:100%;padding:1px;" src="'.$image.'" />';
      }
    ?>
    <!--div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <!--li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/littlehouse.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/portfolio.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/beerz.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/laughing.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/reception.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/running.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/hair.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/butfirst.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/shotshotshots.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/meat.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/seester.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/blog.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/brooke2.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/brooke.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/kaylen2.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/Kaylen3.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/honolulu.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/honolulu2.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/sunrise2.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/silhouette.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/sunrise.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/flag.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/contact.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="img/motherandfather.jpg" style="width:100%">
          <div class="carousel-caption">
          </div>
        </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-menu-left" style="margin-top:200%;" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-menu-right" style="margin-top:200%;" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div-->
	</div>
  <div class="col-md-2"></div>
</div>
<?php
include "footer.php";
?>