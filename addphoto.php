<?php
include "includes/connect.php";
session_start();
if(isset($_POST['submit'])){
    $photoname=$_POST['photoname'];
    $filetmp=$_FILES["image"]["tmp_name"];
    $filename=$_FILES["image"]["name"];
    move_uploaded_file($filetmp,"images/".$filename);
    $qry="INSERT INTO `photos` (`photoname`,`photo`) VALUES ('$photoname','$filename');";
    mysqli_query($conn,$qry) or die("connection failed: ". mysqli_error($conn));
    //echo "<img src='images/$filename'>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Memory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="main.css">
</head>

<body>

            <h1>Add Memory</h1>
			<hr>
			<div class="satya">
        <form class="form" method='post' action="" enctype="multipart/form-data">
                <input type="text" class="defaultTextBox" placeholder="Enter Photo Name" name="photoname"><p></p>       
                <input type="file"  name="image" ><p></p>        
                <input type="submit" class="button" name="submit" value="Add Photo" ><p></p>
            
			Welcome <?php echo $_SESSION['email']; ?>
              <a href="logout.php">logout</a>
			  <a href="image.php">display</a>
        </form>
    </div>
</body>

</html>