<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'ltw';
		$pw = '1234';
		$dbName = 'movie';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

	    $email = $_POST['email'];
	    $password = $_POST['password'];
		$nickname = $_POST['nickname'];

		$sql = "insert into movielogin (
			email,
			password,
			nickname
		)";
		
		$sql = $sql. "values (
			'$email',
			'$password',
			'$nickname'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("회원가입 되었습니다.")</script>'; 
		}else{ 
		  echo '<script>alert("다시 시도해 주세요.")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "loginpagein.html";
</script>

</html>