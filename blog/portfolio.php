<!DOCTYPE html>
<html lang="en">
<?php require("includes/config.php"); ?>
  <head>
    <style>
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS file -->
    <link href="css/main.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <style>
	#welcome_portfolio {
	    text-align: center;
	    margin-top: 90px;
	
	}
	#main-projects {
	    padding-top: 30px;
	}
	.project_images {
	    height: 300px;
	    width: 500px;
	    border: solid;
	    border-width: 1px;
	}
	</style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" style="color: black" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black" href="portfolio.php">Portfolio</a>
	    </li>
<!--
            <li class="nav-item">
              <a class="nav-link" style="color: black" href="contact.php">Contact</a>
	    </li>
-->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div id="welcome_portfolio"><h2> Portfolio: </h2>
				<p>Checkout my most recent work. Source code can be found through my Github </p>
    </div>

   <div id="main-projects">
	<div class="container">
	    <div class="row"> 
		<a href="./index.php"><div class="col-lg-6"><img class="project_images" src="projects/img/blog.png"></div></a>
		<a href="github_finder_app/index.html"><div class="col-lg-6"><img class="project_images" src="projects/img/github.png"></div></a>
	    </div>
	 </div>
   </div>
	
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/joosung.lee.756?ref=bookmarks">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/thomas-j-lee-765411a9/">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/tjlee0927">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Tlee 2018</p>
          </div>
        </div>
      </div>
    </footer>

  </body>

</html>
