<section class = "blog" id = "blog">
  <div class = "container">

    <div class = "blog-content">
      <!-- item -->
        <?php
          $postQuery="SELECT * FROM posts ORDER BY id DESC";
          $runPQ=mysqli_query($db,$postQuery);
          while($post=mysqli_fetch_assoc($runPQ)){
            ?>
              <div class = "blog-item">
                <div class = "blog-img">
                  <img src = "projectchess6.jpg" alt = "">
                  <span><i class = "far fa-heart"></i></span>
                </div>
                <div class = "blog-text">
                  <span><?=date('F jS, Y',strtotime($post['created_at']))?></span>
                  <h2><?=$post['title']?></h2>
                  <p><?php echo substr($post['content'],0,150); ?>....</p>
                  <a href = "post.php?id=<?php echo $post['id']; ?>">Read More</a>
                </div>
              </div>
            <?php
          }
        ?>
    </div>
  </div>
</section>