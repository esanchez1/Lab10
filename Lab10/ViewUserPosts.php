<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "e921s031", "nie7otai", "e921s031");
    if ($mysqli->connect_errno) {
       printf("Connect failed: %s\n", $mysqli->connect_error);
        
    }
     $userID = $_POST['pickUsersPost'];
     $usersPost = "SELECT content FROM Posts where author_id = '$userID'";
    
    echo"<table border = \"2\" style = 'border-collapse: collapse'>";
    echo"<tr><th>Posts</th></tr>";
    if($result = $mysqli->query($usersPost))
    {
        while($row = $result->fetch_assoc())
        {
            echo"<tr><td>".$row["content"]."</td></tr>";
        }
        $result->free();
    }
    else{
        echo"Error! There are no users";
    }
    $mysqli->close();
?>