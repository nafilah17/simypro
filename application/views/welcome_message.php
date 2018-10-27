<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <title>HALAMAN UTAMA</title>
  <h1>HALAMAN LOGIN</h1></br>
  <form action="<?php echo base_url('index.php/home');?> method="post">
  	<table>
  		<tr>
  			<td>Username</td>
  			<td><input type="text" name="username"></td>
  		</tr>

  		<tr>
  			<td>Password</td>
  			<td><input type="text" name="password"></td>
  		</tr>

		<tr>
  			<td></td>
  			<td><input type="submit" value="Login"></td>
  		</tr>
  	</table>
</head>
<body>

</body>
</html>