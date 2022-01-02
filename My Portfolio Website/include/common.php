<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "mp_user";
 $dbpass = "mp2021";
 $db = "MP";
 $conn = new Mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 function CloseCon($conn)
 {
 $conn -> close();
 }

?>


