<?php
include_once("connect.php");
include_once("home.php");
$id = $_GET['id'];
$sql  = mysqli_query($con,"SELECT title,content,category FROM content where id='$id'");
$row = mysqli_fetch_array($sql);
$title = $row['title'];
$content = $row['content'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<?php echo '<a class="btn btn-primary" href="details.php?id='.$id.'">Back</a>';?>
	<h4>Edit...</h4>

	<form method="POST">
		<div class="form-group row">
			<label for="Title" class="col-sm-2 col-form-label">Title</label>
			<div class="col-sm-10">
				<input type="text" name="title" class="form-control" value="<?php echo $title ?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="content" class="col-sm-2 col-form-label">Content</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="6" name="content"><?php echo $content; ?></textarea>
			</div>
		</div>
		<div class="from-group row">
			<label for="category" class="col-sm-2 col-form-label">Category</label>
			<div class="col-sm-10">
				<select name="category" class="form-control">
					<option value="tech">Technology</option>
					<option value="news">News</option>
					<option value="computer">Computer</option>
					<option value="programming">Programming</option>
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary" style="margin-left: 17%;margin-top: 5px;">Update</button>
	</form>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$title = mysqli_real_escape_string($con,$_POST['title']);
	$content = mysqli_real_escape_string($con,$_POST['content']);
	$category = $_POST['category'];
	$sql = mysqli_query($con,"UPDATE content set title='$title', content='$content', category = '$category' where id = '$id'");
	if($sql){
		echo "<h3 style='color:green;margin-left:5%'>Update Successfully !!</h3>";
	}else{
		echo "Try again !!!";
	}
}
?>