  <div class="right">
	<form action="">
		Search: <input type="text" name="key">
		<input type="submit" name="search" value="Search">
	</form>
	

	<?php
	//sửa một phần tử dùng array_splice();
	//xóa một phần tử dung array_push());
			$product = array(
				array(1,"Phone","images/phone1.PNG",1000,1),
				array(2,"Loudspeaker","images/Loa1.PNG",2000,1),
				array(3,"Camera","images/tablets31.jpg",3000,2),
				array(4,"Samsung","images/tivi1.png",4000,3),
				array(5,"TV","images/tablest71.jpg",5000,3),
				array(6,"Headphone","images/accessories1.jpg",6000,2),
				array(7,"Tablets","images/tablets1.PNG",7000,3),
				array(8,"Dell Laptop ","images/Laptop1.PNG",8000,4)
			);
			?>
	<table border="1" cellspacing="0" align="center" width="100%">
		<tr>
			<th width="150">Image</th>
			<th>Product name</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php
		foreach($product as $p)
				{
		?>
		<tr>
            <td><img src="<?= $p[2]?>"alt="" /></td>
            <td><?=$p[1] ?></td>
            <td><?=$p[3] ?></td>
			<td><a href="update.php">Update</a> <a href="update.php">delete</a></td>
			
        </tr>
		<?php
				}
			?>
	</table>

			
	<?php 
	if(isset($_GET['updateid']))
		require_once('update.php');
	else
		require_once('add.php');
	?>
</div>