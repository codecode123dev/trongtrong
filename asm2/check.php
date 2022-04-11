<?php

session_start();
 
if (isset($_POST["user"]) && !isset($_SESSION["user"])) {

   $users = [
    "minh" => "123456",
    "nguyenminh" => "654321",
    "vanminh" => "987654"
  ];
 
 
  if (isset($users[$_POST["user"]])) {
    if ($users[$_POST["user"]] == $_POST["password"]) {
      $_SESSION["user"] = $_POST["user"];
    }
  }
 
 
  if (!isset($_SESSION["user"])) { $failed = true; }
 }
 

if (isset($_SESSION["user"])) {
  header("Location: /asm2/as/admin/product/index.php"); 
  exit();
}
?>