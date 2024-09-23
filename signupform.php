<!DOCTYPE html>
<head>
<title>Sign Up</title>
</head>
<body>
    <form method  = "post" action = "sign.php">
    <div class="main-container">
        <div class="sign-up-details">
                    <label for="Name">Full Name</label><br>
                    <input type="text" id="Name" name="Name" maxlength = "30" autofocus><br>

                    <label for="email">Email Address</label><br>
                    <input type="email" id="email" name="email"><br>

                    <label for="username">User Name</label><br>
                    <input type="text" id="username" name="username"><br>

                    <label for="password">Password</label><br>
                    <input type="text" id="password" name="password" maxlength = "10"><br>

                    <label for="Name">Created</label><br>
                    <input type="text" id="Name" name="Name"><br>

                    <label for="email">Gender</label><br>
                    <input type="email" id="email" name="email"><br>

                    <label for="username">Role</label><br>
                    <input type="text" id="username" name="username"><br>
        </div>
        <div class="btn">
          
        <button type="submit">Register</button>
        </div>
    </div>
    </form>
</body>