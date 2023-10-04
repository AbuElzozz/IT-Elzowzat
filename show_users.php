<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "it_project";
    $conn = mysqli_connect($host, $username, $password, $dbname);


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT id, fullname FROM regesteration_info";
    $result = mysqli_query($conn, $sql);


    echo "<table>";
    echo "<tr><th>ID</th><th>FULLNAME</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fullname"] . "</td></tr>";
    }
    echo "</table>";
    mysqli_close($conn);

  ?>



