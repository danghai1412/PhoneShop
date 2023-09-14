<?php 
$id = $_GET['update2id'];
$sql = "Select * From brand Where BrandId = '" . $id . "'";
$rows = query($sql);
?>
<form action="" method="post" enctype="multipart/form-data">
	<table border="1" cellspacing="0" width="100%" class="table">
		<tr>
			<th colspan="2" class="update">Update Brand</td>
		</tr>
		<tr>
			<td width="20%" class="col1">Id: </td>
			<td width="80%" class="col2"><input type="text" id="idshow" value="<?=$rows[0][0]?>" disabled>
				<input type="hidden" id="id" value="<?=$rows[0][0]?>" name="id">
			</td>
		</tr>
		<tr>
			<td class="col1">Brand Name: </td>
			<td class="col2"><input type="text" name="name" id="fname" value="<?=$rows[0][1]?>"></td>
		</tr>
		<tr>
			<td class="col1">Brand Image: </td>
			<td class="col2">
				<input type="text" name="imageold" id="imageold" value="<?=$rows[0][2]?>">
				<input type="file" name="image" id="image">
			</td>
		</tr>
		<tr>
			<td class="col1"></td>
			<td class="col2"><input class="btn btn-success" type="submit" value="Update" name="update2" id="update2"></td>
		</tr>
	</table>
</form>