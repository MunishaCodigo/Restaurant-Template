 <?php  
ini_set('display_errors', 1);
error_reporting(E_ALL); 

      //export.php  
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
 }?>  