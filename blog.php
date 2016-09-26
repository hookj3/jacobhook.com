<?php
include "header.php";
?>
</head>
<body class="mainContainer" id="home">
<div class="secondaryPages">
	<div class="navigation">
		<h1 class="altNav altTitle" alt="Jacob Hook" title="Jacob Hook"><a href="index.php">Jacob Hook</a></h1>
		<!--p style="color:white;font-family: 'Raleway', sans-serif;">Website Under Construction</p-->
		<div class="altNav"><a class="links" href="work.php">Work</a> | <a class="links" href="blog.php">Blog</a> | <a class="links" href="contact.php"> Contact</a></div>
	</div>
</div>
<br/>
<br/>
<div class="col-md-4"></div>
<div class="col-md-4 blogText">
	<h5 class="blogTitleInfo">Terry &amp; Jill</h5>
	<h6 class="blogTitleInfo">Sept 10, 2016</h6>
	<div id="loadImg">
		<?php
			$dirname = "img/terryandjill/";
			$images = glob($dirname."*.jpg");
			foreach($images as $image) {
				echo '<img style="width:100%;" src="'.$image.'" />';
			}
		?>
	</div>
	<nav aria-label="...">
	  <ul class="pager">
	    <!--li class="previous"><a href="#" style="color:black;"><span aria-hidden="true">&larr;</span> Older</a></li>
	    <li class="next"><a href="#" style="color:black;">Newer <span aria-hidden="true">&rarr;</span></a></li-->
	  </ul>
	</nav>
</div>
<div class="col-md-4"></div>
<!--script type="text/javascript">
$(function(){
	var folder = "img/terryandjill";
	$.ajax({
	    url : folder,
	    success: function (data) {
	        $(data).find("a").attr("href", function (i, val) {
	            if( val.match(/\.(jpe?g|png|gif)$/) ) { 
	                $("#loadImg").append( "<img src='"+ folder + val +"'>" );
	            } 
	        });
	    }
	});
});
</script-->
<?php
include "footer.php";
?>