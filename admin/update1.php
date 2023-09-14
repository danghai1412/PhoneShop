<?php
$id = $_GET['update1id'];
$sql = "Select * From Phone Where PhoneId = '" . $id . "'";
$rows = query($sql);
?>
<form action="index.php" method="post" enctype="multipart/form-data">
	<table border="1" cellspacing="0" width="100%" class="table">
		<tr>
			<th colspan="2" class="update" id="update1">Update Phone</td>
		</tr>
		<tr>
			<td width="20%" class="col1">Id: </td>
			<td width="80%" class="col2"><input type="text" id="idshow" value="<?= $rows[0][0] ?>" disabled>
				<input type="hidden" id="id" value="<?= $rows[0][0] ?>" name="id">
			</td>
		</tr>
		<tr>
			<td class="col1">Phone Name: </td>
			<td class="col2"><input type="text" name="name" id="fname" value="<?= $rows[0][1] ?>"></td>
		</tr>
		<tr>
			<td class="col1">Phone image: </td>
			<td class="col2">
				<input type="text" name="imageold" id="imageold" value="<?= $rows[0][2] ?>">
				<input type="file" name="image" id="image">
			</td>
		</tr>
		<tr>
			<td class="col1">Brand:</td>
			<td class="col2">
				<select name="brand" id="brand">
					<?php
					$sql = "Select * From brand";
					$rowbrands = query($sql);
					for ($i = 0; $i < count($rowbrands); $i++) {
						if ($rows[0][6] == $rowbrands[$i][0]) {
					?>
							<option value="<?= $rowbrands[$i][0] ?>" selected><?= $rowbrands[$i][1] ?></option>
						<?php
						} else {
						?>

							<option value="<?= $rowbrands[$i][0] ?>"><?= $rowbrands[$i][1] ?></option>
					<?php
						}
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="col1">Color: </td>
			<td class="col2"><input type="text" name="color" id="color" value="<?= $rows[0][7] ?>"></td>
		</tr>
		<tr>
			<td class="col1">Size: </td>
			<td class="col2"><input type="text" name="size" id="size" value="<?= $rows[0][5] ?>"></td>
		</tr>
		<tr>
			<td class="col1">Price: </td>
			<td class="col2"><input type="text" name="price" id="price" value="<?= $rows[0][4] ?>"></td>
		</tr>
		<tr>
			<td class="col1">Phone Details: </td>
			<td class="col2"><textarea name="phonedetail" id="phonedetail" style="width: 450px; height: 250px;"><?= $rows[0][3] ?></textarea></td>
		</tr>
		<tr>
			<td class="col1"></td>
			<td class="col2"><input class="btn btn-success" type="submit" value="Update" name="update1"></td>
		</tr>
	</table>
</form>