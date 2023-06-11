<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

	$host = 'localhost';
	$user = 'ltw';
	$pw = '1234';
	$dbName = 'movie';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$num = $_POST["num"];
	$title = $_POST["title"];
	$writer = $_POST["writer"];
	$date = $_POST["date"];
	$count = $_POST["count"];
	$content = $_POST["content"];
    

	$sql = "insert into notice_board (
			num,
			title,
			writer,
			date,
			count,
			content
	)";
	
	$sql = $sql. "values (
			'$num',
			'$title',
			'$writer',
			'$date',
			'$count',
			'$content'
	)";

	if($mysqli->query($sql)){ 
	  echo '<script>alert("등록되었습니다.")</script>'; 
	}else{ 
	  echo '<script>alert("등록에 실패했습니다.")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	location.href = "mainpage.php";
</script>
</html>