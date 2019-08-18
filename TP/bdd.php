<html>
  <head>
    <title> Liste des utilisateurs </title>
  </head>
  <body>
  <?php
     $dbhost = 'localhost:<port mariadb>';
     $dbuser = '<utilisateur>';
     $dbpass = '<MDP>';
     $conn = mysql_connect($dbhost,$dbuser, $dbpass);
     if (! $conn){
         die('Could not connect : ' . mysql_error());
     }
     echo 'Connected successfully to DB <br>';
     $query = "SELECT * FROM db1.utilisateurs";
     echo "<br><b> Contenu table utilisateurs : </b><br>";
     $result = mysql_query($query,$conn);
     while ($row = mysql_fetch_array($result))
     {
     //echo "<p>".$row['username']. "</p>";
     echo $row['username']. "<br>";
     }
     mysql_close($conn);
  ?>
  </body>
</html>
