<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'ltw';
		$pw = '1234';
		$dbName = 'test';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

	    $name = $_POST['name'];
		$email = $_POST['email'];
	    $subject = $_POST['subject'];
		$message = $_POST['message'];

		$sql = "insert into loginphp (
				name,
				email,
				subject,
				message
		)";
		
		$sql = $sql. "values (
				'$name',
				'$email',
				'$subject',
				'$message'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("성공적으로 보냈습니다.")</script>'; 
		}else{ 
		  echo '<script>alert("다시 시도해주세요.")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "mainpage.php";
</script>

</html>