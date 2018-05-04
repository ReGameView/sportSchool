<?php
include '../database.php';
$db = new database();
if($_GET['submit'] == 'Отправить')
{
	$data = "`name` = '".$_GET['name']."', `id_group` = '".$_GET['id_group']."', `address` = '".$_GET['address']."', 
			 `year` = '".$_GET['year']."', `sport_rank` = '".$_GET['sport_rank']."'";
	$db->query("UPDATE `students` SET ".$data." WHERE id = ".$_GET['id']);
	header("Location: /admin");
}
include '../header.php';
$query = "SELECT * FROM `students` WHERE id = ". $_GET['id']. " LIMIT 1";
$result = $db->query($query);
$row;
while($row = $result->fetch_assoc()):
?>
<form method="GET">
	<input type="hidden" name="id" value="<?=$_GET['id']?>">
<table>
	<tr>
		<td>
			Имя
		</td>
		<td>
			<input type="text" name="name" value="<?=$row['name'] ?>">
		</td>
	</tr>
	<tr>
		<td>
			Номер группы
		</td>
		<td>
			<input type="numeric" name="id_group" value="<?=$row['id_group'] ?>">
		</td>
	</tr>
	<tr>
		<td>
			Адрес
		</td>
		<td>
			<input type="text" name="address" value="<?=$row['address'] ?>">
		</td>
	</tr>
	<tr>
		<td>
			День рождения
		</td>
		<td>
			<input type="text" name="year" value="<?=$row['year'] ?>">
		</td>
	</tr>
		<tr>
		<td>
			Спортивный ранг
		</td>
		<td>
			<input type="text" name="sport_rank" value="<?=$row['sport_rank'] ?>">
		</td>
	</tr>
</table>
<input type="submit" name="submit">
</form>





<?php endwhile; include '../footer.php';