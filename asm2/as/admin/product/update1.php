<?php
require_once('../../db/dbhelper.php');

//add
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    
    //echo "Path:".$_FILES["fileToUpload"]["tmp_name"];
    copy($_FILES["fileToUpload"]["tmp_name"],$target_file);
    $uploadOk = 1;


    echo "<img src=\"$target_file\"></img>";

  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  $id = $_POST["id"];
  $title = $_POST["title"];
  $price = $_POST["price"];
  $thumbnail = $target_file;

  $sql = "update product set title = \"".$title."\",price=".$price.",thumbnail=\"".$thumbnail."\" where id=".$id;
  //echo $sql;

  execute($sql);
  
  echo "<a href=\"index.php\">back to home page </a>";


  $sql = "insert into product (title,price,thumbnail) values (\"".$title."\",".$price.",\"".$thumbnail."\")";

}
?>