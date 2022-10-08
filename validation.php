<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "eventmanagement"

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validated</title>
</head>
<body>
    Hello you are loged in...

</body>
</html>

