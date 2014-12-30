<div class="signup-container">
	<?= $this->session->flashdata('pesan'); ?>
<div class="signupleft">
	<?= validation_errors(); ?>
	<h2>Create an Account</h2><hr>
	<table>
		<?= form_open(base_url()."sign/sign_up")?>
		<tr>
			<td>Fullname</td>
		</tr>
		<tr>
			<td><input type="text" name='display_name'></td>
		</tr>
		<tr>
			<td>Username</td>
		</tr>
		<tr>
			<td><input type="text" name='username'></td>
		</tr>
		<tr>
			<td>Password</td>
		</tr>
		<tr>
			<td><input type="password" name='password1'></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
		</tr>
		<tr>
			<td><input type="password" name='password2'></td>
		</tr>
		<tr>
			<td><input type="submit" value="SIGN UP"></td>
		</tr>
	</table>
	<?= form_close()?>
</div>

<div class="signupright">
	<h3>Have an Account?</h3>
	<table>
		<?= form_open(base_url()."sign/sign_in")?>
		<tr>
			<td>Username</td>
		</tr>
		<tr>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
		</tr>
		<tr>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" value="LOGIN"></td>
		</tr>
		<?= form_close()?>
	</table>
</div></div>