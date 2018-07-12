<?php 
class db {
  public function dbConnection() {
      $host = 'localhost';
  	  $dbname='blog';
  	  $user = 'root';
  	  $pass = '';

  	  try {
  	    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  	    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection was successful";
  	  	return $DBH; 
  	  }
  	  catch(PDOException $e) {
  		  echo 'ERROR:' . $e->getMessage();
  	  }
      dbConnection();

    } // dbConnection function ends

  public function register() {
      self::dbConnection();
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
         $confirm_pwd = $_POST['confirmpassword'];
         $username = $_POST['username'];
         $email = $_POST['email'];
         $pwd = $_POST['password'];
         $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

         if(isset($_POST['register'])) {

          if($_POST['password'] == $_POST['confirmpassword']) {

          $sql = "INSERT INTO blog_members (username, email, password) VALUES ('$username', '$email', '$hashedpwd')";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          header("Location: ../index.php");
          exit();
          } else {

            if($_POST['password'] != $_POST['confirmpassword']) {
            echo "password does not match confirmpassword";
             } 
            }
           }
          }
         } //register function ends
  } //class ends


?>