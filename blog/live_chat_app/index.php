<!DOCTYPE html>
<?php require('session_start.php'); ?>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">

<title>LiveChat</title>
</head>
<body>
 <?php if($_SESSION['user_name'] == "") { ?>
  <div id="username-signup"><span class="signup_text">Enter Username</span> 
      <form action="username_signup.php" method="post">
	<div class="signup_text">
	  <input type="text" name="user_name">
	  <input type="submit" value="Submit" name="submit">
      </form>
        </div>
  </div>
  <?php } else {
	echo "<style>#username_signup.php { display: none; } </style>";
  } 
  ?>
  <h2>Live Chat Application</h2>
  <h3> Welcome <?php echo $_SESSION['user_name']; ?></h3>
  <div id="message_board"> </div>

  <button class="open-button">Chat</button>
  
  <div class="chat_popup" id="chat_form">
     <form action="./post_message.php" class="form-container">
       <h1>Chat</h1>
       <label for"msg"><b>Message</b></label>
       <textarea placeholder="Type Message.." name="msg" required></textarea>
       
       <button type="submit" class="btn">Send</button>
       <button type="button" class="btn_cancel">Close</button>
     </form>
  </div>
</body>
</html>

