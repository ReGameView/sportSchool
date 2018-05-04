<?php include '../database.php'; 
$db = new database(); 
if($_GET['submit'] == "Отправить")
	{
		$db->query("INSERT INTO `students` values(null, '".$_GET['name']."', ".$_GET['id_group'].", '".$_GET['address']."', '".$_GET['year']."', '".$_GET['sport_rank']."', null, null)");
		header("Location: /admin");
	}else
	{
include '../header.php';
?>
<div class="content">
	<p style="font-size: 16px;">
		<form>
			<table>
				<tr>
					<td>
						ФИО:
					</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<td>
						Номер группы:
					</td>
					<td>
						<input type="numeric" name="id_group">
					</td>
				</tr>
				<tr>
					<td>
						Адрес:
					</td>
					<td>
						<input type="text" name="address">
					</td>
				</tr>
				<tr>
					<td>
						Дата рождения:
					</td>
					<td>
						<input type="text" name="year">
					</td>
				</tr>
				<tr>
					<td>
						Спортивный ранг:
					</td>
					<td>
						<input type="text" name="sport_rank">
					</td>
				</tr>
			</table>
				<input type="submit" name="submit">

		</form>
	</p>
</div>


<?php } include '../footer.php'; ?>