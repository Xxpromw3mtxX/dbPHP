<?php
  $HOST = 'localhost';
  $USER = 'root';
  $PSW = '';
  $DB_NAME = 'biblio1';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>DB Visualize</title>
    <meta charset="utf-8"/>
    <style>
    #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #109177;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #109177;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #109177;
        color: white;
    }
    </style>
  </head>

  <body>
    <div class="form-style-5">
      <?php
        $connection = mysqli_connect($HOST,$USER,$PSW,$DB_NAME) or die ('impossibile connettersi'.mysqli_error());
        $query="SELECT * from autori";
        $result = mysqli_query($connection, $query) or die("Errore nella query.");
        echo "<table id='customers'><tr><th>CodAutore</th><th>Nome</th><th>Nazione</th></tr>";
        while($row=mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td>" . $row['CodAutore'] . "</td>";
          echo "<td>" . $row['Nome'] . "</td>";
          echo "<td>" . $row['Nazione'] . "</td>";
          echo "</tr>";
        }
        echo "</table>";
       ?>
    </div>
  </body>
</html>
