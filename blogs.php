<?php 
include 'connect.php';
$sql="SELECT * FROM  blogstable";
$result=mysqli_query($con,$sql);
$blogs=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($blogs);



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blogsstyles.css">
    <title>Blogs website </title>
</head>
<body>
    <div class='blog-container'>
        <?php foreach($blogs as $blog){?>
            <div class="blog-title"><h3><?php echo $blog['blogtitle'];?></h3></div>

    <div class="blog-writer">Written by :<?php echo $blog['writer'];?><span>Written at:<?php  echo $blog['writtenat'];?></span></div>
    <br/>
    <hr/>
    <img src="<?php echo $blog['blogimageurl'];?>">
    <div class="blog-content"><?php echo $blog['blogcontent'];?></div>
    <?php  }?>   

        
     

    <div>
    
</body>
</html>