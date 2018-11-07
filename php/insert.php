<?php
  $HOST = 'localhost';
  $USER = 'root';
  $PSW = '';
  $DB_NAME = 'biblio1';
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
        $CodAutore = $_POST['CodAutore'];
        $Nome = $_POST['Nome'];
        $Nazione = $_POST['Nazione'];
        $connection = mysqli_connect($HOST,$USER,$PSW,$DB_NAME) or die ('impossibile connettersi'.mysqli_error());
        $query="INSERT INTO autori (CodAutore, Nome, Nazione) VALUES ('$CodAutore','$Nome','$Nazione')";
        if ($connection->query($query) === TRUE) {
          echo "New record created successfully";
          echo "<form action='../index.html'><input type='submit' value='Menu'/></form>";
        } else {
          echo "Error: " . $query . "<br>" . $connection->error;
        }
       ?>
    </div>
  </body>
</html>
