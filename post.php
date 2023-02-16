<?php
  require('db.php');
  require('function.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="includes/all.css">
    <link rel="stylesheet" href="includes/style.css">
    <script src="includes/all.js"></script>
  </head>
  <body>
    <?php 
        include_once('navbar.php');
    
        $post_id=$_GET['id'];
        $postQuery="SELECT * FROM posts WHERE id = $post_id";
        $runPQ=mysqli_query($db,$postQuery);
        $post=mysqli_fetch_assoc($runPQ);
        $image_arr=getImageByPost($db,$post['id']);
        ?>
        <div class = "container">
          
            <div class = "blog-item">
              <div class = "blog-img">
                <br>
                <img src = "images/<?=$image_arr['image']?>" alt = "">
                <span><i class = "far fa-heart"></i></span>
              </div>
              <div class = "blog-text">
                <span><?=date('F jS, Y',strtotime($post['created_at']))?></span>
                <h2><?=$post['title']?></h2>
                <p><?php echo $post['content']; ?></p>
              </div>
            </div>
        </div>
      <?php
        include_once('footer.php');
      ?>
  </body>
</html>