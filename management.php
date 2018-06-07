<?php
include('./connection.php');  
  session_start();
  if(!isset($_SESSION['username']))
  {
    // not logged in
    header('Location: gb-login.php');
    exit();
  }

    $sql = $pdo->prepare("SELECT Name, Email, Phone FROM restaurant_registration") ; 
    
    $sql->execute() ;

 if(isset($_POST["export"]))  
 {  
      // output headers so that the file is downloaded rather than displayed  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  

      // create a file pointer connected to the output stream
      $output = fopen("php://output", "w");  

      // output the column headings
      fputcsv($output, array('Name', 'Email', 'Phone'));  

      // fetch the data
      $connect = mysqli_connect("mysql.netsons.com","bfsktnrn_restaurant","Qx?46^m10PDz","bfsktnrn_restaurant");
      $query = "SELECT Name,Email,Phone from restaurant_registration";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output); 
       exit();
 }

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Management</title>

    <!--Simple grid CSS -->
    <link rel="stylesheet" href="simple-grid/simple-grid.css">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">

    <!-- Custom styles for this webpage -->
    <link href="css/style.css" rel="stylesheet">
  
  </head>

  <body id="management-page">

    <!-- Navigation -->
    <nav class="navbar bg-rest-brown">
      <div class="container">
        <img src="images/logo.png" class="js-scroll-trigger restaurant-logo" alt="Restaurant">
        <div class="mr-4">
          <a href="logout.php" class="nav-link"><img src="icon/logout.svg" class="logout-btn" width="50px" height="50px" ><div class="restaurant_color">Logout</div></a>
        </div>
        
      </div>
    </nav>
    <section class="bg-white">
      <div class="container">
        <div id="management" class="container">
        <div class="manage-heading list-inline">Management Area</div>
           <form method="post" action="#" class="list-inline" align="right">  
                   <button type="submit" class="download-btn" name="export"><img src="icon/download.svg" width="50px" height="50px"></button>

                </form> 
       
       <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $sql->fetch()) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Phone']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>
      </div>

    </section>
  </body>
  </html>