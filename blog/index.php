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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.php">Portfolio</a>
	    </li>
<!--
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
	    </li>
-->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1 id="welcome">Hi There! <br> Welcome to my Blog/Portfolio</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <?php 
    try {

        $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
        while($row = $stmt->fetch()){
          
            echo '<div class="container blog_posts">';
            echo '<div class="row">';
            echo '<div class="col-lg-8 col-md-10 mx-auto">';
            echo '<div class="post-preview">';
            echo '<h2 class="post-title"><a href= "view_posts.php?id='.$row['postID']. '">'.$row['postTitle'].'</a></h2>';
            echo '<h6 class="post-subtitle">'.$row['postDesc'].'</h6>';  
            echo '</a>';     
            echo '<p class="post-meta">Posted by ' . $row['postDate'] .'</p>';       
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

        }

      } catch(PDOException $e) {
          echo $e->getMessage();
      }
    ?>
  
    <hr>

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
