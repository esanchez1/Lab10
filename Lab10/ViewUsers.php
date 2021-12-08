<?php
   $mysqli = new mysqli("mysql.eecs.ku.edu", "e921s031", "nie7otai", "e921s031");

/* check connection */
/* fetch associative array */
/* free result set */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
  }
  echo"<table border = \"1\" style = 'border-collapse: collapse'>";
  $query = "SELECT * FROM Users"; 
  echo"Users: ";
  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
      echo("<tr><td>".$row['user_id']."</td></tr>");  
    }
  }
    $result->free();
    $mysqli->close();
    ?>