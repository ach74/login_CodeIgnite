<?php if ($this->session->has_userdata("exist_email")):?>
	<div class='alert alert-danger' role="alert">
		<strong> <?php echo $this->session->exist_email;?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>

	<form action='sign_Up' method='post' id='register'>

		<table class='table table-hover table-responsive table-bordered'>

			<tr>
				<td class='width-30-percent'>Firstname</td>
				<td><input type='text' name='firstname' class='form-control' required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" /></td>
			</tr>

			<tr>
				<td>Lastname</td>
				<td><input type='text' name='lastname' class='form-control' required value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], ENT_QUOTES) : "";  ?>" /></td>
			</tr>

			<tr>
				<td>Contact Number</td>
				<td><input type='text' name='contact_number' class='form-control' required value="<?php echo isset($_POST['contact_number']) ? htmlspecialchars($_POST['contact_number'], ENT_QUOTES) : "";  ?>" /></td>
			</tr>

			<tr>
				<td>Address</td>
				<td><textarea name='address' class='form-control' required><?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address'], ENT_QUOTES) : "";  ?></textarea></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type='email' name='email' class='form-control' required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" /></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type='password' name='password' class='form-control' required id='passwordInput'></td>
			</tr>

			<tr>
				<td>Confirm Password</td>
				<td>
					<input type='password' name='confirm_password' class='form-control' required id='confirmPasswordInput'>
					<p>
						<div class="" id="passwordStrength"></div>
					</p>
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-plus"></span> Register
					</button>
				</td>
			</tr>

		</table>
	</form>