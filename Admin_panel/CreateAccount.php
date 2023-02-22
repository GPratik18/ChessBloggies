<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Account</title>
        <link rel="stylesheet" href="AdminStyle.css">  
    </head>
    <body>
        <div class="container">
            <center>
                <div class="top">
                    <div class="logo">
                        <img src="\ChessBloggies1\images\logo.jpg" alt="lskahh">
                        <h2>CHESS <span class="danger"> BLOGGIES</span></h2>
                    </div>
                    <div class="loginForm">
                        <form action="CreateAccountAction.php" method="post" id="LogForm">
                            <label for="FirstName">Enter your First Name </label>
                            <input type="text" id="FirstName" name="FirstName"><br>
                            <label for="LastName">Enter your Last Name </label>
                            <input type="text" id="LastName"><br>
                            <label for="UserPassword">Create Password </label>
                            <input type="password" id="UserPassword"><br>
                            <label for="UserCPassword">Confirm Password </label>
                            <input type="password" id="UserCPassword"><br><br>
                            <input type="submit" id="Register" name="submit" value="Register"><br>
                        </form>
                        <p>Already have an acoount? &nbsp <a href="MainAdmin.php"> Login</a></p>
                    </div>
                    <div class="close" id="close-btn">
                    </div>
                </div>
            </center>
        </div>
    </body>
</html>