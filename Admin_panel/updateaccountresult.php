<html>
<?php
require("../db.php");
session_start();
$username=$_GET['username'];
if(isset($_POST['UName']) && isset($_POST['UNameT'])){

$newName=$_POST['UNameT'];
$name_stmt="UPDATE users SET username = '$newName' WHERE username = '$username'";
$nameinpoststmt="UPDATE posts SET created_by='$newName' WHERE created_by= '$username'";
$runNS=mysqli_query($db, $name_stmt);
$runNIP=mysqli_query($db, $nameinpoststmt);

$_SESSION["username"] = $newName;
?>
<script>alert("Name is updated");</script>
<?php
    unset($_POST['UName']);
    unset($_POST['UNameT']);
    header("location: updateaccount.php?str=e");
}
if(isset($_POST['UAddress']) && isset($_POST['UAddressT'])){
    $newAddress=$_POST['UAddressT'];
    $address_stmt="UPDATE users SET address ='$newAddress' WHERE username = '$username'";
    $runAS=mysqli_query($db, $address_stmt);
    ?>
    <script>alert("Address is updated");</script>
    <?php
    unset($_POST['UAddress']);
    unset($_POST['UAddressT']);
    header("location: updateaccount.php?str=e");
}
if(isset($_POST['UPassword']) && isset($_POST['UPasswordT1']) && isset($_POST['UPasswordT2'])){
    $password_err="";
    if(empty(trim($_POST['UPasswordT1'])) || empty(trim($_POST['UPasswordT2']))){
        $password_err = "Password cannot be blank";
    }
    else if((strlen(trim($_POST['UPasswordT1'])) < 5) || (strlen(trim($_POST['UPasswordT2'])) < 5)){
        $password_err = "Password cannot be less than 5 characters";
    }
    else if(trim($_POST['UPasswordT1']) !=  trim($_POST['UPasswordT2'])){
        $password_err = "Passwords should match";    
    }
    else{
        $password = trim($_POST['UPasswordT1']);
    }
    if($password_err==""){
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $passStmt="UPDATE users SET password ='$param_password' WHERE username = '$username'";
        $runPS=mysqli_query($db, $passStmt);
        ?>
        <script>alert("Password is updated");</script>
        <?php
        unset($_POST['UPassword']);
        unset($_POST['UPasswordT1']);
        unset($_POST['UPasswordT']);
        header("location: updateaccount.php?str=e");
    }
}
?>
</html>