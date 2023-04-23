<?php
require("../db.php");
session_start();
$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="AdminStyle.css">
    <link rel="stylesheet" href="..\includes\all.css">
    <script src="..\includes/all.js"></script>
    <style>
        table{
            /* border: 1px solid; */
            width: 60%;
            
            border-collapse: collapse;
        }
        td{
            text-align: center;
            padding: 15px;
            text-align: left;
        }
        button{
            background-color:lightblue;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
<?php
if($_GET['str']=="d"){
    
    $delstmt="DELETE FROM users WHERE username='$username'";
    $rundelete=mysqli_query($db, $delstmt);
    ?>
    <script>alert("Your account is deleted");</script>
    <?php
    header("location: logout.php");
}
else if($_GET['str']=="e"){
    
    ?>
    <button> <a  href="login.php"> Back </a></button>
    <form action="updateaccountresult.php?username=<?=$username?>" method="post">
    <table>
            <tr><td>
        Enter New Name: </td><td><input type="text" name="UNameT" id="UNameT"></td><td>
        <button type="submit" name="UName" id="UName">Update Name</button></td>
        </tr>
        </table>
        <hr>
    </form>
    <br>
    <form action="updateaccountresult.php?username=<?=$username?>" method="post">
        <table>
            <tr><td>
        Enter New Address: </td><td><textarea name="UAddressT" id="UAddressT" cols="30" rows="10"></textarea></td><td>
        <button type="submit" name="UAddress" id="UAddress">Update Address</button></td>
        </tr>
        </table>
        <hr>
    </form>
    <br>
    <form action="updateaccountresult.php?username=<?=$username?>" method="post">
    <table>
            <tr><td>
        Enter New Password: </td><td><input type="password" name="UPasswordT1" id="UPasswordT1"></td><td>
        Re-enter New Password: </td><td><input type="password" name="UPasswordT2" id="UPasswordT2"></td><td>
        <button type="submit" name="UPassword" id="UPassword">Update Password</button></td>
        </tr>
        </table>
    </form>
    <?php
    // header("location : Dashboard.php");
}
?>
</body>
</html>