<?php
header("content-type: text");
$host = "db"; // hostname from docker-compose.yml
$username = "root";
$pw = "my!!!root!!!pw";

$conn = new mysqli($host,$username,$pw);

if($conn->connect_errno > 0) {
    echo $db->connect_error;
} else {
    echo "DB Connection successful\n\n";

    $result = mysqli_query($conn, "SHOW DATABASES");
    while( $row =mysqli_fetch_row( $result ) ) {
        echo $row[0]. "\n";
    }
}