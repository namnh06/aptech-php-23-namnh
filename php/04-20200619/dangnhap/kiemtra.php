<?php
// var_dump($_GET);
// echo "<hr>";
// echo $_GET["dayLaTen"];
// echo "<hr>";
// echo $_GET["dayLaEmail"];
// echo "<hr>";
// $a = [1,3, "Nam"];
// var_dump($a);
// luu tru nguoi dung vao DB
// sau do hien thi thanh cong hoac that bai


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_23_04";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// lay gia tri ben input co name la dayLaTen va gan vao bien $ten
$ten = $_POST['dayLaTen'];
// lay gia tri ben input co name la dayLaEmail va gan vao bien $email
$email = $_POST['dayLaEmail'];
$sql = "INSERT INTO $dbname.users (name, email)
VALUES ('$ten', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);