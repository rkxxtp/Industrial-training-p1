<!-- <?php

// echo "hello world";

?> -->


<?php

$name = $_POST["name"];
$dob = $_POST["dob"];

// echo "Name: " . $name . "<br>";
echo "Date of Birth: " . $dob . "<br>";


echo "NAME: " . $_POST["name"];
?>

<!-- // Database credentials
$servername = "localhost";
$database = "form_db";
$username = "root";
$password = ""

// Try connection to the database.
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() );
}
echo "Connection established successfully!"; -->

<!-- $sql = "INSERT INTO Students (name, lastName, email) VALUES ('Tom', 'Jackson', 'tom@jackson.tld')"; -->




<!-- $t=time();
$curr_timestamp = date("Y-m-d H:m:s",$t));
$sql = "INSERT INTO htmlform(name,age,gender,createt_at) VALUES($name,$age,$gender,$curr_timestamp)";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} -->