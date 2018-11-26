<?php

require('session_start.php');


if(isset($_POST['submit'])){

	$_SESSION['user_name'] = $_POST['user_name'];
         
	header('Location: ./index.php');

     }
   

?>
