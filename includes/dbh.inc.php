<!-- database handler -->
<?php
    $serverName = "localhost";
    $dBUsername = "root";
    $dBPassword = "root";
    $dBName = "phpproject01";

    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

    if(!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    };

?>