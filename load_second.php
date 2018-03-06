<?php
include 'db.php';
$last_msg_id = $_GET['last_msg_id'];

$sql = mysqli_query($db, "SELECT * FROM countries WHERE id < '$last_msg_id' ORDER BY id DESC LIMIT 5");
$last_msg_id = "";
while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
	$id = $row['id'];
	$msg= $row['name']; 
?>
	<div id="<?php echo $id; ?>" class="message_box" > 
<?php 	echo $msg;
?>
	</div>
<?php
} 
?>