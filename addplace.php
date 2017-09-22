
<!DOCTYPE html>
<html>
<head>
	<title>food</title>
</head>
<body>


<?php  

//database connection

  $servername = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name="tourist";

  $conn = mysqli_connect($servername, $db_username, $db_password,$db_name);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


?>

<?php session_start();?>



<?php
$target_file="";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//echo $target_file;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
     $name="";
        $price=""; 
        $rate="";

          $a=rand(1000,9999);
         if(isset($_POST['name']))
            $name=$_POST['name'];
         if(isset($_POST['type']))
           $type=$_POST['type'];
         if(isset($_POST['divition']))
           $division=$_POST['division'];
         if(isset($_POST['district']))
           $district=$_POST['district'];
         if(isset($_POST['description']))
           $description=$_POST['description'];

       echo $a;
    $sql = "INSERT INTO content VALUES ('$a','$division','$district','$type','$description','$target_file','$name')";
        $result = $conn->query($sql);
        if($result){
            echo "ok";
            //header('Location: index.php');
        }
        else{
            echo "sdadasdsad";
        }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>








<form action="addplace.php" method="post" enctype="multipart/form-data">

    <div >
        <label for="name" > Name</label>
                                    
        <input type="text"  name="name" placeholder="Name" />
    </div>
    <div >
        <label for="division" > Division</label>
                                    
        <input type="text"  name="division" placeholder="Division" />
    </div>
    <div >
        <label for="district" > District</label>
                                    
        <input type="text"  name="district" placeholder="District" />
    </div>
    <div >
        <label for="type" > Type</label>
                                    
        <input type="text"  name="type" placeholder="Type" />
    </div>
    <div >
        <label for="description" > Description</label>
                                    
        <input type="text"  name="description" placeholder="Description" />
    </div>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="submit" name="submit">


</form>

</body>
</html>
