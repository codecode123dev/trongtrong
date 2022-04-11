<?php
//nhúng nó vào
// cái này nó sẽ nhảy ra folder lession06 rồi tới db và admin
require_once('../../db/dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Management</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background: #FFF5EE;
        }
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            background-color:#FFF5EE;
        }
    </style>
</head>
<body>
    <?php
    //header
    ?>
    <ul class="nav nav-tabs">
  
    <li id="pp" class="nav-item ">
        <a class="nav-link active" href="#">Product Management</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"></a>
    </li>
   
    </ul>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Product Management</h2>
			</div>
			<div class="panel-body">
            <a href=add.php>
            <button class="btn btn-success" style= "margin-bottom: 15px ">Add product</button>
            </a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th width='50px'>ID</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Price</th>            
            <th width='50px'></th>
            <th width='50px'></th>
        </tr>
    </thead>
    <tbody>
    <?php
//Lay danh sach danh muc tu database
$sql          = 'select product.id,product.title,product.price,product.thumbnail,product.updated_at,category.name category_name from product left
                join category on product.id_category = category.id';
$productList = executeResult($sql);

$index = 1;
foreach ($productList as $item) {
	echo '<tr>
				<td>'.($index++).'</td>
				<td><img src="'.$item['thumbnail'].'"
                style="max-width :100px" /></td>
                <td>'.$item['title'].'</td>
                <td>'.$item['price'].'</td>
              
                
				<td>
					<a href ="add1.php?id='.$item['id'].'"<button class="btn btn-warning">Edit</button></a>
				</td>
				<td>
					<button class="btn btn-danger" 
                    onclick="deleteProduct('.$item['id'].')">Delete</button>
				</td>
			</tr>';
}
?>
      
    </tbody>
</table>
			</div>
		</div>
	</div> 
<!-- khi xóa sẽ có thông báo -->
    <script type ="text/javascript">
        function deleteProduct(id){
            var option = confirm('bạn có muốn xóa san phẩm hay không')
            //kiểm tra nếu như là không
            if(!option){
                return;
            }
            console.log(id)
            //ajax - lệnh post
            $.post('productajax.php',{
                'id': id,
                'action':'delete'
            },function(data) {
                location.reload()
            })
        }
    </script>
</body>
</html>