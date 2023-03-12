<?php
require("..\db.php");
session_start();
$sessionusername=$_SESSION['username'];
// echo $sessionusername;
if(isset($_SESSION['username'])){
  $userquery="SELECT * FROM users WHERE username='$sessionusername'";
  $runUQ=mysqli_query($db,$userquery);
  $post=mysqli_fetch_assoc($runUQ);
  $idpost=$post['id'];
  $BLOGTITLE="";
  $BLOGCONTENT="";
?>
<script>clearInp();</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AdminStyle.css">
    <link rel="stylesheet" href="..\includes\all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="..\includes\style.css">
    <script src="..\includes/all.js"></script>
    <title>Dashboard</title>
</head>
<body class="dashboard-body" onload="document.addblogform.reset();">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav" type="none">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<center>
<div class="card" style="width: 18rem;">
  <img src="../images/userlogo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?=$post['username']?></h3>
    <p class="card-text"><?=$post['address']?></p>
    <p class="card-text"><?=$post['city']?></p>
    <p class="card-text"><?=$post['state']?></p>
  </div>
</div>
</center>
<hr>
<h2>Add your blog here<a id="dropButton"><i class="fa fa-sort-desc"></i></a></h2>
      <div class="form-a" id="addblog" style="display:none;">
      <form action="formactionresult.php?sessionusername=<?=$sessionusername?>" method="post" name="addblogform" id="addblogform" enctype="multipart/form-data">
        <label for="blog-title">Enter title</label><br>
        <textarea  id="blog-title" name="blog-title" cols="100" autocomplete="off"></textarea><br>
        <label for="blog-content">Content</label><br>
        <textarea  id="blog-content" name="blog-content" cols="100" rows="30" autocomplete="off"></textarea><br>
        <label for="blog-image">Select image</label>
        <input type="file" name="imgupload" value="image upload"><br>
        <input type="submit" name="submit" id="submit">
        <br>
        <h1><a id="upButton"><i class="fa fa-sort-asc"></i></a></h1>
      </form>
      </div>
<?php if($sessionusername=="Admin1" || $sessionusername=="Admin2" || $sessionusername=="Admin3" || $sessionusername=="Admin4" || $sessionusername=="Admin5"){?>
      <h2>Add topic here<a id="dropButton1"><i class="fa fa-sort-desc"></i></a></h2>
      <div class="form-a1" id="addblog1" style="display:none;">
      <form action="formactionresult.php?sessionusername=<?=$sessionusername?>" method="post" name="addblogform1" id="addblogform1" enctype="multipart/form-data">
        <label for="blog-title1">Enter title</label><br>
        <textarea  id="blog-title1" name="blog-title1" cols="100" autocomplete="off"></textarea><br>
        <label for="blog-content1">Content</label><br>
        <textarea  id="blog-content1" name="blog-content1" cols="100" rows="30" autocomplete="off"></textarea><br>
        <label for="blog-image1">Select image</label>
        <input type="file" name="imgupload1" value="image upload1"><br>
        <input type="submit" name="submit1" id="submit1">
        <br>
        <h1><a id="upButton1"><i class="fa fa-sort-asc"></i></a></h1>
      </form>
      </div>
      <?php }?>
      <script type="text/javascript">
        document.getElementById("dropButton").onclick = function() {
            document.getElementById("addblog").style.display="block";
            document.getElementById("dropButton").style.display = "none";    
        }
        document.getElementById("upButton").onclick = function() {
            document.getElementById("addblog").style.display = "none";
            document.getElementById("dropButton").style.display = "block";
        }
        function clearInp(){
          document.getElementByTagName('textarea').value="";
          document.getElementByTagName('input').value="";
          document.getElementById('addblogform').reset();
        }
        

        document.getElementById("dropButton1").onclick = function() {
            document.getElementById("addblog1").style.display="block";
            document.getElementById("dropButton1").style.display = "none";    
        }
        document.getElementById("upButton1").onclick = function() {
            document.getElementById("addblog1").style.display = "none";
            document.getElementById("dropButton1").style.display = "block";
        }
        function clearInp(){
          document.getElementByTagName('textarea').value="";
          document.getElementByTagName('input').value="";
          document.getElementById('addblogform1').reset();
        }
  </script>
<hr>
<div class="container">
<?php
$postQuery="SELECT * FROM posts WHERE created_by='$sessionusername' ORDER BY id DESC LIMIT 9";
$runPQ=mysqli_query($db,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){?>
<div class="blog-content">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h2><?php echo substr($post['title'],0,15); ?>.....</h2>
  <p><?php echo substr($post['content'],0,150); ?>....</p>
  </div>
</div>
</div>
<?php
}
?>
</div>
</body>
</html>
<script>clearInp();</script>
<?php }
else{
  header("location: login.php");
}
?>