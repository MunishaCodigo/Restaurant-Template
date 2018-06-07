<?php
session_start();

require './connection.php';


if(isset($_POST['login'])) {

$user = $_POST['username'];
$pass = $_POST['password'];

if(empty($user) || empty($pass)) {
$message = 'All field are required';
} else {
$query = $pdo->prepare("SELECT username, pwd_hash FROM Restaurant_admin WHERE 
username=? AND pwd_hash=? ");
$query->execute(array($user,$pass));
$row = $query->fetch(PDO::FETCH_BOTH);

if($query->rowCount() > 0) {
  $_SESSION['username'] = $user;
  header('location:management.php');
} else {
  $message = "Username/Password is wrong";
}


}

}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Restaurant</title>
	<meta name="description" content="">  
	<meta name="Zerka" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
    
   <link rel="stylesheet" href="css/main.css">
       
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
   <!-- script
   ================================================== -->
	

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="images/logo.png">
<style>
  ::-webkit-input-placeholder { /* Chrome */
  color: #503D3F;
  transition: opacity 0ms ease-in-out;
}
</style>

</head>

<body>
  <div class="container">
    <div class="box">
      <img class="img-responsive" src="images/logo.png" width="140px" height="130px">
      </br></br>
      <i class="fa fa-sort-asc" style="color: white; font-size: 70px;" aria-hidden="true"></i>
      <form action="gb-login.php" method="POST">
        <fieldset>     
          <div class="wrapper">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type='text' name="username" placeholder="USERNAME" required="" />
          </div>    
         
          <div class="wrapper">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type='password' name="password" placeholder="PASSWORD" required="" />
          </div>

          <input type="submit" name="login" value="LOGIN">              
         
        </fieldset>
      </form>


      </div>

      <div>
         <p>globuzzer</p>
      </div>

</div>
  

</body>
</html>