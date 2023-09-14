<form action="index.php" method="post" enctype="multipart/form-data" class="add" style="background-color: #6c7b8b">
	<table border="1" cellspacing="0" width="100%" class="table">
		<tr>
			<th colspan="2" style="text-align: center; text-transform: uppercase;">Add New Phone</td>
		</tr>
		<tr>
			<td width="20%" class="col1">Id: </td>
			<td width="80%" class="col2"><input type="text" id="id" value="" name="id">
			</td>
		</tr>
		<tr>
			<td class="col1">Phone name: </td>
			<td class="col2"><input type="text" name="name" id="fname" value=""></td>
		</tr>
		<tr>
			<td class="col1">Phone image: </td>
			<td class="col2"><input type="file" name="image" id="image"></td>
		</tr>
		<tr>
			<td class="col1">Brand:</td>
			<td class="col2">
				<select name="brand" id="brand">				
						<?php 
						$sql = "Select * From brand";
						$rows = query($sql);
						for($i=0; $i<count($rows); $i++)
						{
						?>
					<option value="<?=$rows[$i][0]?>"><?=$rows[$i][1]?></option>
						<?php
						}
						?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="col1">Size: </td>
			<td class="col2"><input type="text" name="size" id="size" value=""></td>
		</tr>
		<tr>
			<td class="col1">Color: </td>
			<td class="col2"><input type="text" name="color" id="color" value=""></td>
		</tr>
		<tr>
			<td class="col1">Price: </td>
			<td class="col2"><input type="text" name="price" id="price" value=""></td>
		</tr>
        <tr>
			<td class="col1">Phone Detail: </td>
			<td class="col2"><textarea name="phonedetail" id="phonedetail" value="" style="width: 450px; height: 250px;"></textarea></td>
		</tr>
		<tr>
			<td class="col1"></td>
			<td class="col2"><input class="btn btn-success" type="submit" value="Add" name="add1" id="add1"></td>
		</tr>
	</table>
</form>