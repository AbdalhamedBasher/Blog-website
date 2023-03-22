<?php 
$errors=['writer'=>'','blog-title'=>'','written-at'=>'','blog-image-url'=>'','blog-content'=>''];
$writer=$blogTitle=$writtenAt=$blogImageUrl=$blogContent='';
include 'connect.php';
  if(isset($_POST['submit'])){
    if(empty($_POST['writer'])){
        $errors['writer']='The writer field can not be empty';
    }else{
        $writer=$_POST['writer'];
    }
    if(empty($_POST['blog-title'])){
        $errors['blog-title']='The blog title field can not be empty';
    }else{
        $blogTitle=$_POST['blog-title'];
    }
    if(empty($_POST['blog-image-url'])){
        $errors['blog-image-url']='The blog image url field can not be empty';
    }else{
        $blogImageUrl=$_POST['blog-image-url'];

    }if(empty($_POST['blog-content'])){
        $errors['blog-content']='The blog content field can not be empty';
    }else{
        $blogContent=$_POST['blog-content'];
    }
    if(array_filter($errors)){

    }else{
        $writer=mysqli_real_escape_string($con,$_POST['writer']);
        $blogTitle=mysqli_real_escape_string($con,$_POST['blog-title']);
        $blogImageUrl=mysqli_real_escape_string($con,$_POST['blog-image-url']);
        $blogContent=mysqli_real_escape_string($con,$_POST['blog-content']);
        $sql="INSERT INTO blogstable(writer,blogtitle,blogimageurl,blogcontent)VALUES ('$writer',' $blogTitle','$blogImageUrl','$blogContent')";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:blogs.php');
        }
    }
    }


?>

<html lang="en">
<head>
  <title>Admin page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  
  <div class="new-user">
    <h2>Create a new blog</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

      <label>Writer: </label>
      <input type="text" name="writer" value="<?php echo $writer;?>">
      <div class="error"><?php echo $errors['writer'];?> </div>
    
      <label>Blog title: </label>
      <input type="text" name="blog-title" value="<?php echo $blogTitle;?>">
      <div class="error"><?php echo $errors['blog-title'];?> </div>

      <label>Blog image url: </label>
      <input type="text" name="blog-image-url" value="<?php echo $blogImageUrl;?>">
      <div class="error"><?php echo $errors['blog-image-url'];?> </div>



       <label>Blog content: </label>
      <input type="text" id="blog-content" name="blog-content" value="<?php echo $blogContent;?>">
      <div class="error"><?php echo $errors['blog-content'];?> </div>



      <input type="submit" value="submit" name="submit">

    </form>
  </div>

</body>
</html>