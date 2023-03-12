<?php
require('../db.php');
$folder="";
if(isset($_POST['submit'])){
  if(isset($_POST['blog-title'])){
    $BLOGTITLE=$_REQUEST['blog-title'];
  }
  if(isset($_POST['blog-content'])){
    $BLOGCONTENT=$_REQUEST['blog-content'];
  }
  
    $filename=$_FILES["imgupload"]["name"];
    $tempname=$_FILES["imgupload"]["tmp_name"];
    $folder="../images/".$filename;
    move_uploaded_file($tempname,$folder);
    

$sessionusername=$_GET['sessionusername'];
$blogQuery="INSERT INTO posts VALUES(NULL,'$BLOGTITLE','$BLOGCONTENT','current_timestamp()','$sessionusername')";
$getBlogQuery="SELECT max(id) FROM posts";
if($BLOGTITLE != null && $BLOGCONTENT != null){
  $runBQ=mysqli_query($db,$blogQuery);
  $runGBQ=mysqli_query($db,$getBlogQuery);
  $post=mysqli_fetch_array($runGBQ);
  $addedid=$post['max(id)'];
  $imgQuery="INSERT INTO images values(NULL,'$addedid','$filename')";
  mysqli_query($db,$imgQuery);
  $blogQuery="";
  $BLOGCONTENT=null;$BLOGTITLE=null;
  
  ?><script>
    history.go(-1);
  </script><?php
}}


if(isset($_POST['submit1'])){
  if(isset($_POST['blog-title1'])){
    $BLOGTITLE1=$_REQUEST['blog-title1'];
  }
  if(isset($_POST['blog-content1'])){
    $BLOGCONTENT1=$_REQUEST['blog-content1'];
  }
  
    $filename=$_FILES["imgupload1"]["name"];
    $tempname=$_FILES["imgupload1"]["tmp_name"];
    $folder="../images/".$filename;
    move_uploaded_file($tempname,$folder);
    

$sessionusername=$_GET['sessionusername'];
// $topicQuery="INSERT INTO topics VALUES(NULL,'$BLOGTITLE1','$BLOGCONTENT1','current_timestamp()','$sessionusername')";

if($BLOGTITLE1 != null && $BLOGCONTENT1 != null){
  // $runBQ=mysqli_query($db,$topicQuery);
  $topicQuery="INSERT INTO topics VALUES(NULL,'$BLOGTITLE1','$BLOGCONTENT1','images/".$filename."',NULL)";
  $runTQ=mysqli_query($db,$topicQuery);
  $topicQuery="";
  $BLOGCONTENT1=null;$BLOGTITLE1=null;
  ?><script>
    history.go(-1);
  </script><?php
}}
?>