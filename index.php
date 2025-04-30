<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration_form.css">
    <title>Cute AKO</title>
</head>
<body>

    <div id="sheet">
    <h1>Taytol</h1>
    <h2>Registration Form</h2>

        <form action="register.php" method="POST">

        <div id="basicbox">
            <label for="Fname">First Name:</label>
            <br>
            <input type="text" name="Fname" id="Fname" class="input" required>
            <br>
            <label for="Mname">Middle Name:</label>
            <br>
            <input type="text" name="Mname" id="Mname" class="input" required>
            <br>
            <label for="Lname">Last Name:</label>
            <br>
            <input type="text" name="Lname" id="Lname" class="input" required>
            <br>
            <label for="gender">Gender:</label>
                <div id="radio">
                    <input type="radio" id="male" name="gender" value="Male" class="radio" required>Male</input>   
                    <input type="radio" id="female" name="gender" value="Female" class="radio" required>Female</input>
                    <input type="radio" id="other" name="gender" value="Prefer not to say" class="radio" required>Prefer not to say</input>                
                </div>
        </div>

            <br>
            <label for="birthdate">Birth Date</label>
            <br>
            <input type="date" name="birthdate" id="birthdate" class="input" required>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="input" placeholder="Enter your Email" required> <br>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="input" placeholder="Enter your Username" required> <br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="input" placeholder="Enter your Password" required> <br>

            <label for="username">Confirm Password</label>
            <input type="password" name="confirm_password" id="comfirm_password" class="input" placeholder="Retype Password" required> <br>
            
            <button type="submit" class="submit">Create Account</button>

            <center>Already have account?<a href="login.php">Log In</a></center>
        </form>
    </div>
</body>
</html>