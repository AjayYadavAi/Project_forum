<?php
include_once("connect.php");
include_once("home.php");
$id = $_GET['id'];
$sql  = mysqli_query($con,"SELECT * FROM content where id='$id'");
$row = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.reply{background-color: #D4D6D7;padding: 3%; border-radius: 5px; margin:10px;}
		.reply input[type="text"]{border: none; border-bottom: 3px solid red;background-color: #D4D6D7;}
		.col-sm-1 p{background-color: #4BB8E7;color: white;font-size: 35px;text-align: center;border-radius: 50px;}
		.first{padding: 2%;margin:10px;background-color: #D4D6D7;border-radius: 5px;}
	</style>
</head>
<body>
<div class="container">
	<div class="card" style="padding: 2%;">
		<h4><?php echo $row['title']; ?></h4>
		<p> <?php echo $row['content']; ?></p>
		<?php echo '<a href="edit.php?id='.$id.'">Edit</a>';?>
		<?php
			if($row['email'] == "admin@gmail.com"){
				echo '<a href="delete.php?id='.$id.'">Eid</a>';
			}

		?>
		<span class="ml-auto"><?php echo $row['date'];?></span>
	</div>
</div>
<div class="container">
	<div class="com">
		<?php 
			$c = mysqli_query($con,"SELECT * FROM comments WHERE content_id='$id' order by content_id desc");
			while($co = mysqli_fetch_array($c)){;
		 echo '
		<div class="row first">
			<div class="col-sm-1">
				<p>U</p>
			</div>
			<div class="col-sm-11">
				<p>'.$co['message'].'</p>
				<p><b>'.$co['name']."</b> - ".$co['time'].'</p>
			</div>
		</div>
		';}?>
	</div>
</div>
<div class="container">
	<div class="reply">
	<div class="row">
		<div class="col-sm-1">
			<p>U</p>
		</div>
		<div class="col-sm-11">
			<p class="text-center">Comment..</p>
			<form method="POST">
				<div class="form-group">
					<input type="text" name="message" class="form-control" required="" placeholder="Write here...">
				</div>
				<div class="form-group">
					Posting as <input type="text" name="user" value="Unsubscribed" style="text-align: center;">
				</div>
				<button type="submit" class="btn btn-primary">Post</button>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$message = mysqli_real_escape_string($con,$_POST['message']);
	$user = mysqli_real_escape_string($con,$_POST['user']);
	$time = date("d/m/Y");
	$content_id = $id;
	$query = mysqli_query($con,"INSERT INTO comments(name,message,time,content_id)VALUES('$user','$message','$time','$content_id')");
	if($query){
		echo "<p style='color:#4BB8E7'>Posted....<p>";
	}else{
		die("Error : Something Wrong !!!!");
	}
}
?>