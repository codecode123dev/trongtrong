<?php 
$id = $_GET['updateid'];
$sql = "Select * From Product Where ProductId = '" . $id . "'";

$rows = query($sql);
?>
<form action="" method="post" enctype="multipart/form-data">
	<table border="1" cellspacing="0" width="100%" class="table">
		<tr>
			<th colspan="2">Add new product</td>
		</tr>
		<tr>
			<td width="20%" class="col1">Id: </td>
			<td width="80%" class="col2"><input type="text" id="idshow" value="<?=$rows[0][0]?>" disabled>
				<input type="hidden" id="id" value="<?=$rows[0][0]?>" name="id">
			</td>
		</tr>
		<tr>
			<td class="col1">Product name: </td>
			<td class="col2"><input type="text" name="name" id="fname" value="<?=$rows[0][1]?>"></td>
		</tr>
		<tr>
			<td class="col1">Product image: </td>
			<td class="col2">
				<input type="text" name="imageold" id="imageold" value="<?=$rows[0][2]?>">
				<input type="file" name="image" id="image">
			</td>
		</tr>
		<tr>
			<td class="col1">Category:</td>
			<td class="col2">
				<select name="cat" id="cat">				
						<?php 
						$sql = "Select * From Category";
						$rowcats = query($sql);
						for($i=0; $i<count($rowcats); $i++)
						{
							if($rows[0][4]==$rowcats[$i][0])
							{
								?>
					<option value="<?=$rowcats[$i][0]?>" selected><?=$rowcats[$i][1]?></option>
								<?php
							}
							else
							{
								?>

					<option value="<?=$rowcats[$i][0]?>"><?=$rowcats[$i][1]?></option>
								<?php
							}
						}
						?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="col1">Price: </td>
			<td class="col2"><input type="text" name="price" id="price" value="<?=$rows[0][3]?>"></td>
		</tr>
		<tr>
			<td class="col1"></td>
			<td class="col2"><input type="submit" value="Update" name="update"></td>
		</tr>
	</table>
</form>