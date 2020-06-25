<?php
$conn = mysqli_connect("localhost","root","","evenementkalender") ;

if (!$conn)
{
echo "Connectie geafaald: " . mysqli_connect_error();

//db details
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'evenementkalender';

//Connect and select the database
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

}
?>