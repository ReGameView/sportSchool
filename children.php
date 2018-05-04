<?php include('database.php'); include("header.php");
$db = new database();
if(!isset($_GET['id'])):?>
	<div class="content">
		<p style="font-size: 16px;">
		<?php $result = $db->query('SELECT * FROM `students`');
		while ($row = $result->fetch_assoc()):?>
			<a href="http://sportschool<?=$_SERVER['REQUEST_URI'].'?id='.$row['id']?>"><?=$row['name']?></a><br>
		<?php endwhile;?>
		</p>
	</div>
<?php else: 
$result = $db->query('SELECT students.id, students.name as studname, students.address, students.year, students.sport_rank, `group`.name as `group`, trener.name as trenername FROM `students` LEFT JOIN `group` ON students.id_group = group.id LEFT JOIN `trener` ON group.id_trener = trener.id WHERE students.id = '.$_GET['id'].' LIMIT 1');
$row = $result->fetch_assoc()
	?>
	<div class="content">
		<h1><?=$row['studname']?></h1>
		<p style="font-size: 16px;">
			<strong>Группа:</strong> <?=$row['group']?><br/>
			<strong>Тренер:</strong> <?=$row['trenername']?><br/>
			<strong>День рождение:</strong> <?=$row['year']?><br/>
			<strong>Адрес:</strong> <?=$row['address']?><br/>
		</p>
	</div>
<?php endif; ?>
	

<?php include("footer.php");?>