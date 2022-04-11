<form action="" method="post" enctype="multipart/form-data">
	<table border="1" cellspacing="0" width="100%" class="table">
		<tr>
			<th colspan="2">Add new product</td>
		</tr>
		<tr>
			<td width="20%" class="col1">Id: </td>
			<td width="80%" class="col2"><input type="text" id="id" value="" name="id">
			</td>
		</tr>
		<tr>
			<td class="col1">Product name: </td>
			<td class="col2"><input type="text" name="name" id="fname" value=""></td>
		</tr>
		<tr>
			<td class="col1">Product image: </td>
			<td class="col2"><input type="file" name="image" id="image"></td>
		</tr>
		<tr>
			<td class="col1">Category:</td>
			<td class="col2">
				<select name="cat" id="cat">				
				<option>Smart Phone</option>
				<option>b</option>
				<option>c</option>
				<option>d</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="col1">Price: </td>
			<td class="col2"><input type="text" name="price" id="price" value=""></td>
		</tr>
		<tr>
			<td class="col1"></td>
			<td class="col2"><input type="submit" value="Save" name="add"></td>
		</tr>
	</table>
</form>