<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LoginPage</title>
        <link rel="stylesheet" href="AdminStyle.css">  
    </head>
    <body>
        <div class="container">
            <center>
                <div class="top">
                    <div class="logo">
                        <img src="\ChessBloggies1\images\logo.jpg" alt="lskahh">
                        <h2>CHESS<span class="danger">BLOGGIES</span></h2>
                    </div>
                    <div class="loginForm">
                        <form action="" method="post" id="LogForm">
                            <label for="UserName">Enter your username </label>
                            <input type="text" id="UserName"><br>
                            <label for="UserPassword">Enter your Password </label>
                            <input type="password" id="UserPassword"><br><br>
                            <input type="submit" id="submit" name="submit" value="Login"><br>
                        </form>
                        <p>Don't have acoount ?&nbsp <a href="CreateAccount.php"> Create New Account</a></p>
                    </div>
                    <div class="close" id="close-btn">
                    </div>
                </div>
            </center>
        </div>
    </body>
</html>