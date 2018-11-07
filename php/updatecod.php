<?php
  $HOST = 'localhost';
  $USER = 'root';
  $PSW = '';
  $DB_NAME = 'biblio1';
  $oldCodAutore = $_POST['oldCodAutore'];
  $CodAutore = $_POST['CodAutore'];
  $Nome = $_POST['Nome'];
  $Nazione = $_POST['Nazione'];
 ?>
<!DOCTYPE html>
<html>
 <head>
   <title>DB Insert</title>
   <meta charset="utf-8"/>
   <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
 </head>

 <body>
   <div class="form-style-5">
     <?php
      $connection = mysqli_connect($HOST,$USER,$PSW,$DB_NAME) or die ('impossibile connettersi'.mysqli_error());
      $query = "UPDATE autori set '$oldCodAutore='$CodAutore'";
      if ($connection->query($query) === TRUE) {
        echo "Record updated successfully";
        echo "<form action='../index.html'><input type='submit' value='Menu'/></form>";
      } else {
        echo "Error updating record: " . $connection->error;
      }
      ?>
   </div>
 </body>
</html>
