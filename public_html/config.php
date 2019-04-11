<?php
    $host = 'mysql';
    $user = 'root';
    $pass = '';
    $dbname = 'tokobuku';
    $conn = mysqli_connect( $host, $user, $pass, $dbname) or die('Could not connect to mysqli server.' );

    $baseurl="http://localhost/tokobuku-docker/";
?>