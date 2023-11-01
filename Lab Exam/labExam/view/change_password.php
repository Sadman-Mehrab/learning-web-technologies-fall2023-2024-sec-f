<?php
	require_once('../controller/sessionCheck.php');
	
?>

<center>
	<form method="post" action="../controller/changePasswordCheck.php" enctype="">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="currentPassword"/><br />
						New Password<br />
						<input type="password" name="newPassword" /><br />
						Retype New Password<br />
						<input type="password" name="retypePassword" />								
						<hr />
						<input type="submit" name="name" value="Change" />     
						<a href="home.html">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>