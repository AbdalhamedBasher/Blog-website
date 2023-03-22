<?php 
//$errors=array('writer'=>'','blog title'=>'','written at'=>'','blog image url'=>'','blog content'=>'');
$errors['blog title']= $errors['written at']=$errors['blog image url']= $errors['blog content']=$errors['writer']='';
$writer=$blogTitle=$writtenAt=$blogImageUrl=$blogContent='';
//include 'connect.php';
  if(isset($_POST['submit'])){
    if(empty($_POST['writer'])){
        $errors['writer']='The write field can not be empty';
    }else{
        $writer=$_POST['writer'];
    }
    if(empty($_POST['blog title'])){
        $errors['blog title']='The blog title field can not be empty';
    }else{
        $blogTitle=$_POST['blog title'];
    }
    if(empty($_POST['written at'])){
        $errors['written at']='The written at field can not be empty';
    }else{
        $writtenAt=$_POST['written at'];
    }
    if(empty($_POST['blog image url'])){
        $errors['blog image url']='The blog image url field can not be empty';
    }else{
        $blogImageUrl=$_POST['blog image url'];
    }
    if(empty($_POST['blog content'])){
        $errors['blog content']='The blog content field can not be empty';
    }else{
        $blogContent=$_POST['blog content'];
    }
    if(array_filter($errors)){
        echo 'hello';
     
    }
        
    
    // validate entries
    echo 'form submitted';
  }

?>

<html lang="en">
<head>
  <title>PHP OOP</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  
  <div class="new-user">
    <h2>Create a new user</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

      <label>Writer: </label>
      <input type="text" name="writer" value="<?php echo $writer;?>">
      <div><?php echo $errors['writer'];?></div>

      <label>Blog title: </label>
      <input type="text" name="blog title" value="<?php echo $blogTitle;?>">
      <div><?php echo $errors['blog title'];?></div>

       
      <label>Written at: </label>
      <input type="text" name="written at" value="<?php echo $writtenAt;?>">
      <div><?php echo $errors['written at'];?></div>

       
      <label>Blog image url: </label>
      <input type="text" name="blog image url" value="<?php echo $blogImageUrl;?>">
      <div><?php echo $errors['blog image url'];?></div>


       <label>Blog content: </label>
      <input type="text" id="blog-content" name="blog content" value="<?php echo $blogContent;?>">
      <div><?php echo $errors['blog content'];?></div>


      <input type="submit" value="submit" name="submit">

    </form>
  </div>

</body>
</html>