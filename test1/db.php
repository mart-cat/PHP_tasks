<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "televs";

    $con = new mysqli($servername, $username, $password,$dbname); 
    if ($con -> connect_error ) {
        die ("Error connecting to" . $con -> connect_error );
    }


?>