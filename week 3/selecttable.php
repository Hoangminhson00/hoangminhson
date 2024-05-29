<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "myDB";
  
  // create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to select data from table
$sql = "SELECT id, firstname, lastname FROM MyGuest";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo $row["id"] . "-" . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>