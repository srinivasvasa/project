<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$name = $_POST['name'];
$content = $_POST['comment'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO project_content (name, content)
VALUES ('$name', '$content')";

if ($conn->query($sql) === TRUE) {
  echo "THANK YOU";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
