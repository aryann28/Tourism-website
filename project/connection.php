<?php

	$db=mysqli_connect("localhost","root","","login");  
					/* server name, username, passwor, database name */
     if(!$db)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "connection successful";
    
?>