<?php
	require_once('../controller/sessionCheck.php');
	require_once('../model/userModel.php');
	$users = getAllUsers();
?>

<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Users</td></tr>
		<?php while($user = mysqli_fetch_assoc($users)) { ?>
			<tr>
				<td><?php echo $user['id'] ?></td>
				<td><?php echo $user['name'] ?></td>
				<td><?php echo $user['type'] ?></td>
			</tr>
		<?php  } ?>

		<tr>
			<td colspan="3" align="right">
				<a href="home.html">Go Home</a>
			</td>
		</tr>
	</table>			
</center>