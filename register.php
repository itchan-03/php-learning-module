<?php
include('connection.php');

if(isset($_POST['Fname']) && isset($_POST['Mname']) && isset($_POST['Lname']) && isset($_POST['birthdate']) 
&& isset($_POST['username'])&& isset($_POST['email'])&& isset($_POST['password'])){
    $f_name = $_POST['Fname'];
    $m_name = $_POST['Mname'];
    $l_name = $_POST['Lname'];
    $birthdate = $_POST['birthdate'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users_tbl ( log_in_ID, f_name, m_name, l_name, birthdate, username, email, password) 
    VALUES ('', '$f_name', '$m_name', '$l_name', '$birthdate', '$username', '$email', '$password')";

    if($connect->query($sql) == TRUE){
        echo
        
        "<script>
        alert('Registration Successful');
        window.location='login.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>
