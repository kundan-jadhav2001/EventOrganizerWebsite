<?php
session_start();

    $DB_SERVER = 'localhost';
    $DB_USERNAME = 'root';
    $DB_PASSWORD = '';
    $DB_NAME = 'eventmanagement';

    $conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

    if(!$conn){
        die('Connection failed: '. mysqli_connect_error());
    }

    $username = $password = $err = '';

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = '';

        if(!(empty(trim($username)) || empty(trim($password)))){
            try{
                $query = "select username, password from logininfo where username = '$username'";
                $result = mysqli_query($conn, $query);
            }
            catch (Exception){
                echo("Error occured..");
            }
            
            if(mysqli_num_rows($result) > 0 ){
                $row = $result->fetch_array();
                $checkusername = $row['username'];
                $checkpassword = $row['password'];

                if($checkusername==$username && $checkpassword==$password){
                    header('Location: index.php');
                }
                else{
                    echo("Username or Password is incorrect...");
                }


            }
            else{
                echo("You Don't have account please Create one...");
            }
        }
}

$conn->close();
?>

