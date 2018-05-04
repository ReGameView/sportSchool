<?php
session_start();
include('../header.php'); include '../database.php';
if(!isset($_SESSION['login'])):?>
	<div class="content">
		<p style="font-size: 16px;">
			<form action="login.php" method="POST">
				<input type="text" name="login"><br/>
				<input type="password" name="password"><br/>
				<input type="submit" name="submit">
			</form>
		</p>
	</div>
<?php else: 
$db = new database();
$result = $db->query("SELECT * FROM `students`")
?>
	<div class="content">
		<p style="font-size: 16px">
			<a href="create.php">Добавить нового студента</a>
			<table>
				<?php while ($row = $result->fetch_assoc()):?>
					<tr>
						<td>
							<?= $row['name']?>
						</td>
						<td>
							<a href="update.php?id=<?=$row['id']?>">Изменить</a>
						</td>
					</tr>
				<?php endwhile; ?>
				
			</table>
		</p>
	</div>

<?php endif; ?>
<h2><a href="logout.php">Выход</a></h2>
<?php include '../footer.php';