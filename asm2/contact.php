<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
  .loginuser{
    width:300px;
    border: 1px solid grey;
    background: #FFF5EE;
    text-align:center;
    height:250px;
    margin:150px 0 0 520px;
     
  }
div{
  text-align:center;
  color:red;
 
}
    
</style>
</head>
<body>

    <?php

    require "check.php";

   ?> 
     <!-- <form action="indexadmin.php" method="post"> 
          <h1>Login</h1>
        username:
        <input type="text" name="un" > <br>
        password:
        <input type="text" name = "pw" > <br>
        <input type="submit" value="submit">   -->

<form id="login-form" class="loginuser" method="post" target="_seft">
        <h1>Login</h1>
        <label for="user">username: <br></label>
        <input type="text" name="user" required/><br>
        <label for="password">password: <br></label>
        <input type="password" name="password" required/><br>
        <input type="submit" value ="sign in"/>


    </form>
  <?php
   if(isset($failed))
   {echo "<br>",
    "<div> Invalid user or password </div>",
    "<div> Please re-enter your name and password !  </div> <br>" ;}
  ?>
</body>
</html>