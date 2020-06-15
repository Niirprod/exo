<?php
	require_once('conn.php');
	require_once('user.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exo</title>
</head>
<body>

	<h1>Hello</h1>

	<h2>Users</h2>

	<?php

		$sql = "SELECT * FROM user;";
		$result = mysqli_query($conn $sql);
		$display = mysqli_num_rows($result);

		if ($display > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row[] . "<br>";
			}
		}

	 ?>
	 <form method="POST">
		 <input type="text" name="email" placeholder="email">
		 <input type="text" name="password" placeholder="password">
		 <input type="text" name="birthDate" placeholder="birthDate">
		 <button type="submit" name="submit">Create</button>
	 </form>


</body>
</html>