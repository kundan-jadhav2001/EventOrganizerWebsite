<?php
session_start();

    if(isset($_SESSION['username'])){
        header("location: index.php");
        exit;
    }
    require_once "config.php";

    $username = $password = '';

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty(trim($_POST['username'])) || empty(trim($_POST['password']))){
            $err = "please enter the values...";
        }
    if(empty($err)){
        $sql = "select id, username, password from eventmanagement where username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;
    
                            //Redirect user to welcome page
                            header("location: welcome.php");
                                
                        }
                    }
    
            }
        }
    }
}
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

