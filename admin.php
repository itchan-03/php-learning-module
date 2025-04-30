<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document </title>
</head>
<body>
    <h1>Welcome Admin!</h1>

<?php

    include('connection.php');
    $query = 'SELECT * FROM users_tbl';
        $result = mysqli_query($connect,$query) or die(mysqli_error($connect));

            while($row = mysqli_fetch_assoc($result)){

                echo '<h1>' .$row['l_name'] . '</h1>';
                echo '<h1>' .$row['m_name'] . '</h1>';
                echo '<h1>' .$row['f_name'] . '</h1>';
                echo '<h1>' .$row['username'] . '</h1>';
                echo '<h1>' .$row['password'] . '</h1>';
            }
    $connect->close();

    
?>
</body>
</html>