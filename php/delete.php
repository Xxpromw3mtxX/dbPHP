<?php
  $HOST = "localhost";
  $USER = "root";
  $PSW = "";
  $DB_NAME = 'biblio1';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>DB Delete</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
  </head>

  <body>
    <div class='form-style-5'>
      <?php
        $CodAutore = $_POST['CodAutore'];
        $connection = mysqli_connect($HOST,$USER,$PSW,$DB_NAME) or die ('impossibile connettersi'.mysqli_error());
        $query = "DELETE FROM autori WHERE CodAutore='$CodAutore'";
        if ($connection->query($query) === TRUE) {
          echo "Record deleted successfully<br>";
          echo "<form action='../index.html'><input type='submit' value='Menu'/></form>";
        }  else {
          echo "Error deleting record: " . $connection->error;
        }
        ?>
      </div>
  </body>
</html>
