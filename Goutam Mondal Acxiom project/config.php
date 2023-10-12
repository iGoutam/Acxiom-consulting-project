<?php
 session_start();
$conn = mysqli_connect("localhost", "root", "", "Remainder Application");
if(!$conn)
{
    echo "not";
}
else{
    echo "connect";
}
?>