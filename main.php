<?php

    include ('/connection.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql =  "SELECT * FROM users_tbl WHERE username = '$username' AND password = '$password'";
    $result = $connect->query($sql);

    if(mysqli_num_rows($result) > 0){
        session_start();

        $_SESSION['username'] = $username;
        echo '<script type = "text/javascript">
        alert("Welcome!");
        window.location = "/admin.php";
        </script>';
    } else {
        echo '<script type = "text/javascript">
        alert("Invalid Output!");
        window.location = "index.php";
        </script>';

    }

    $connect->close();

?>


