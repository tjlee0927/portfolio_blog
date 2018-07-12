<!DOCTYPE html>
<html>
<head>
<?php 
  SESSION_start();
  include("db.class.php");
  $db = new db();
  $db->register();

?>
	<!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS file -->
    <link href="../css/main.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">
	<title>Login Information</title>
</head>
<body>
   <header class="masthead"> 
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1 id="welcome">Developer's Blog</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
   
<!-- Page Header -->
     <div class="body-content">
        <div class="module">
        <h1>Sign In</h1>
        <form class="form" action="login.validate.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="alert alert-error"><?php // $_SESSION['message']; ?></div>
        <input type="text" placeholder="Username" name="username" required />
        <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
        <input type="submit" name="login" value="Sign In" class="btn btn-block btn-primary" />
        </form>
        </div>
     </div>
<!-- Register div-->
    <h1>Create an account</h1>
    <form class="form" action="db.class.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?php // $_SESSION['message']; ?></div>
      <input type="text" placeholder="UserName" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
     </div>

      

</body>
</html>