<?php
//nhúng nó vào
// cái này nó sẽ nhảy ra folder lession06 rồi tới db và admin
require_once('../../db/dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>quản lý danh mục</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    //header
    ?>
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="#">Quản lý Danh mục </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../product/">Quản lý sản phẩm</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Disabled</a>
    </li>
    </ul>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản lý danh mục</h2>
			</div>
			<div class="panel-body">
            <a href=add.php>
            <button class="btn btn-success" style= "margin-bottom: 15px ">Thêm danh mục</button>
            </a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th width='50px'>STT</th>
            <th>Ten danh muc</th>
            <th width='50px'></th>
            <th width='50px'></th>
        </tr>
    </thead>
    <tbody>
    <?php
//Lay danh sach danh muc tu database
$sql          = 'select * from category';
$categoryList = executeResult($sql);

$index = 1;
foreach ($categoryList as $item) {
	echo '<tr>
				<td>'.($index++).'</td>
				<td>'.$item['name'].'</td>
				<td>
					<a href ="add.php?id='.$item['id'].'"<button class="btn btn-warning">Sửa</button></a>
				</td>
				<td>
					<button class="btn btn-danger" 
                    onclick="deleteCategory('.$item['id'].')">Xoá</button>
				</td>
			</tr>';
}
?>
      
    </tbody>
</table>
			</div>
		</div>
	</div> 

    <script type ="text/javascript">
        function deleteCategory(id){
            var option = confirm('bạn có muốn xóa hay không')
            //kiểm tra nếu như là không
            if(!option){
                return;

            }

            console.log(id)
            //ajax - lệnh post
            $.post('ajax.php',{
                'id': id,
                'action':'delete'
            },function(data) {
                location.reload()
            })
        }
    </script>
</body>
</html>