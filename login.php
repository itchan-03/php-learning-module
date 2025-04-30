<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
    <div id="sheeet">

        <h1>Log In</h1>

        <form action="main.php" method="Post"></form>
            
            <div class="container">
                <input type = "text" name="username" id="username" class="input" placeholder="Username" required> <br>
                <input type="password" name="password" id="password" class="input" placeholder="Password" required> <br>
            </div>
                <button type="submit" class="submit">Log In</button>
            
            <center>Don't have an Account?<a href="index.php">Regsiter</a></center>

            
        </form>
    </div>
</body>
</html>