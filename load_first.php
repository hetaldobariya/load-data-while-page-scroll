<?php
include 'db.php';
$sql = mysqli_query($db, "SELECT * FROM countries  ORDER BY id DESC LIMIT 45");
while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
	$id = $row['id'];
	$msg = $row['name'];
?>
	<div id="<?php echo $id; ?>" class="message_box" > 
	<?php echo $msg; ?>
	</div> 
<?php
} 
?>