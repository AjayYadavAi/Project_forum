<?php
require("connect.php");
include_once("home.php");
$sql = mysqli_query($con,"SELECT title,content,id,date FROM content order by title desc");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.over{height: 27px;overflow: hidden;}
		.card{margin-bottom: 10px;}
	</style>
</head>
<body>
<div class="container">
	<?php while($row = mysqli_fetch_array($sql)){ ?>
	<div class="card" style="padding: 5px;">
		<div class="row"></div>
		<?php echo "<h5>".$row['title']."</h5>"; ?>
		<div class="over">
			<p><?php echo $row['content'];?></p>
		</div>

		<?php echo '<span><a  style="margin-right:80%;" href="details.php?id='.$row['id'].'">details</a> Posted on :'.$row['date'].'</span>';?>
	</div>
<?php } ?>
</div>
</body>
</html>
