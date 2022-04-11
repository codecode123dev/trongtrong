<?php
//nhúng nó vào
// cái này nó sẽ nhảy ra folder as rồi tới db và admin
require_once ('../../db/dbhelper.php');
$id=$price =$title = $thumbnail =$content =$id_category='';
if(!empty($_POST))
{
    
    if(isset($_POST['title']))
    {
        $title = $_POST['title'];

    }
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];

    }
    if(isset($_POST['price']))
    {
        $price = $_POST['price'];

    }
    if(isset($_POST['thumbnail']))
    {
        $thumbnail = $_POST['thumbnail'];

    }
    // if(isset($_POST['content']))
    // {
    //     $content = $_POST['content'];

    // }
    // if(isset($_POST['id_category']))
    // {
    //     $id_category = $_POST['id_category'];

    // }


    if(!empty($title)){
        $created_at = $updated_at = date('Y-m-d H:s:i');
        //luu vao database
        if($id == ''){
            $sql ='insert into product(title,thumbnail,price,content,id_category,created_at,updated_at) 
            values("'.$title.'","'.$thumbnail.'","'.$price.'","'.$content.'","'.$id_category.'","'.$created_at.'","'.$updated_at.'")';
            
        }
        else{
            
            $sql='update product set title="'.$title.'" ,updated_at ="'.$updated_at.' ",thumbnail="'.$thumbnail.'" ,price="'.$price.'",content="'.$content.'",id_category="'.$id_category.'" where id ='.$id;
        }

      
        execute($sql);
       header('location: index.php');
        die();
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'select * from product where id = '.$id;
    $product = executeSingleResult($sql);
    if($product != null)
    {
        $title =$product['title'];
        $price =$product['price'];
        $thumbnail =$product['thumbnail'];
        // $id_category =$product['id_category'];
        // $content =$product['content'];
        
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add/Edit product</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        #add{
    width:700px;
    border: 1px solid grey;
    background: #FFF5EE;
    text-align:center;
    height:350px;
    margin:100px 0 0 320px;
    padding: 40px 60px 60px 60px;
    background: url(/asm2/images/nen12.PNG);
    color: #8B008B;
    
  }
    </style>
</head>
<body>
    <?php
    //header 
    //addddddd
    ?>
    <ul class="nav nav-tabs">  
    <li class="nav-item">
        <a class="nav-link" href="index.php">Product Management</a>
    </li>   
    </ul>
	<div id ="add" class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add</h2>
			</div>
			<div class="panel-body">
            <form action="update.php" method="post" enctype="multipart/form-data">

           <div class="form-group">
				  <label for="name">Product Name:</label>
                  <input type="text" name="id" value= "<?= $id?>" hidden="true">
				  <input required="true" type="text" class="form-control" id="title" name="title" value="<?=$title?>">
				</div>

                <!-- <div class="form-group">
				  <label for="price">Chon danh muc:</label>                 
				  <select class ="form-control" name="id_category"
                  id="id_category">
                  <option>--lua chon danh muc--</option>-->
<?php

                // $sql          = 'select * from category';
                // $categoryList = executeResult($sql);
                // foreach($categoryList as $item){
                //     if($item['id']== $id_category){
                //         echo '<option selected value="'.$item['id'].'">'.$item['name'].'</option>';
                //     }
                //     else{
                //         echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
                //     }
                // }
?> 
                </select>
                  
				</div>
					
                <div class="form-group">
				  <label for="price">Price:</label>
                  
				  <input required="true" type="number" class="form-control" id="price" name="price"value="<?=$price?>">
				</div>

                
                <!-- <div class="form-group">
				  <label for="content">Noi dung:</label>                 
				  <textarea class ="form-control" rows="5" name="content" id="content"><?=$content?></textarea>
				</div> -->
				<label >Image:</label>			  
                <input type="file" name="fileToUpload" id="fileToUpload">
				<!-- <button class="btn btn-success">Save</button> -->
                <input type="submit" value="Upload Image" name="submit">
           </form>
			</div>
			</div>
		</div>
	</div>
    <script type="text/javascript">
        function updateThumbnail(){
            $('#img_thumbnail').attr('src',$('#thumbnail').val())
        }
    </script>
</body>
</html>