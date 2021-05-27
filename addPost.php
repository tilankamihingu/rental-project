
<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php
//create array for storing errors
$errors=array();
$title = '';
$cate = '';
$img = '';
$cont = '';
$descrip = '';
$add = '';



if (isset($_POST['submit'])){

  $errors=array();
  $title = $_POST['title'];
  $cate =$_POST['cate'] ;
  $img = $_FILES['img']['name'];
  $cont = $_POST['cont'];
  $descrip =$_POST['descrip'] ;
  $add =$_POST['add'] ;




  if(empty(trim($_POST['title']))){

    $errors[]='Title is required';
  } 
  if(empty($_POST['cate'])){

    $errors[]='please Select category';
  }
  if(empty($_FILES['img']['name'])){

    $errors[]='please upload images';
  }
  if(empty($_POST['cont'])){

    $errors[]='Contact is required';
  }
  if(empty($_POST['descrip'])){

    $errors[]='Description is required';
  }
  if(empty($_POST['add'])){

    $errors[]='Address is required';
  }
if (empty($errors)){
// if no any errors adding data to database
$title = mysqli_real_escape_string($connection, $_POST['title']);
$cate = mysqli_real_escape_string($connection, $_POST['cate']);
$img = mysqli_real_escape_string($connection, $_FILES['img']['name']);
$cont = mysqli_real_escape_string($connection, $_POST['cont']);
$descrip = mysqli_real_escape_string($connection, $_POST['descrip']);
$add = mysqli_real_escape_string($connection, $_POST['add']);

$query = "INSERT INTO product (";
$query .= "title, category, image , contact, description , address";
$query .= ") VALUES (";
$query .= "'{$title}','{$cate}','{$img}','{$cont}', '{$descrip}','{$add}'";
$query .=")";

$result = mysqli_query($connection, $query);
 if ($result){
// if successful
header('Location: successful.php?user_added=true');
 }else {

  $errors[]='failed add post';
 }

}

}
//image upload part
if(isset($_POST['submit'])){

//button clicked
$file_name = $_FILES['img']['name'];
$file_type = $_FILES['img']['type'];
$file_size = $_FILES['img']['size'];
$temp_name = $_FILES['img']['tmp_name'];

$upload_to = 'uploadedimg/';
move_uploaded_file($temp_name, $upload_to . $file_name);
}

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Add</title>
    <link rel="stylesheet" href="./adpost.css">
    <link rel="stylesheet" href="./login.css">
   
</head>
<body>
<div class="header">
		<div class="container">
		<div class="navbar">
            <div class="logo">
               <a href="./index.php">EVENT PLANER</a>
            </div>
            <nav>
            <ul id="MenuItems">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="./login.php">Account</a></li>
            </ul>
            </nav>
        </div>
</div>
</div>

  <div class ="adform"><h2>Enter your post details.. </h2></div>
  <div class="Pane">
    <form method="post" action="addPost.php" class="add-Post" enctype="multipart/form-data">
    <!-- Title -->

      <h3 class="name">Title</h3> 
      <input class="title" type="text" name="title" <?php echo 'value="' .$title . '"';?>><br>
    <!-- category -->

    <h3 class="name">Select Category</h3> 
    <select id="inputState" class="form-control" name="cate"<?php echo 'value="' .$cate . '"';?>>
        <option selected>select...</option>
        <option>wedding items</option>
        <option>Cars</option>
    </select>
    <!-- images -->

    <h3 class="name">upload Images</h3> 
    <input type="file" class="inputfile" id=" " name="img" <?php echo 'value="' .$img . '"';?> >

    <!-- Contact -->

    <h3 class="name">Contact</h3>
    <input class="contact" type="text" name="cont"<?php echo 'value="' .$cont . '"';?>>

    <!-- Description -->
    <h3 class="name">Description</h3>
    <textarea class="description" id="description" rows="3" name=descrip></textarea>
    <!-- Address -->
    <h3 class="name">Address</h3>
    <textarea class="address" id="address" rows="2" name="add"<?php echo 'value="' .$add . '"';?>></textarea>
    
      <!-- error massage area -->
  
      <?php
      if(!empty($errors)){
        echo'<div class="errmsg">';
       echo'<b>There were error(s) on your form.</b> <br>';
       foreach($errors as $error){
         echo $error . '<br>';
       }
       echo'</div>';
      }


      ?>

      <!-- buttons -->
    <button type="submit" name="submit">Post</button>







</form>
</div>
</body>
</html>