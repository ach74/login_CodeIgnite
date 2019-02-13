<?php if ($this->session->has_userdata("acces_error")):?>
	<div class='alert alert-danger' role="alert">
		<strong> <?php echo $this->session->acces_error;?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>




<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<div class="account-wall">
			<div id="my-tab-content" class="tab-content">
				<div class="tab-pane active" id="login">
					<form class="form-signin" action="post_login" method="post">
						<input type="text" name="email" class="form-control" placeholder="Email" required autofocus />
						<input type="password" name="password" class="form-control" placeholder="Password" required />
						<input type="submit" class="btn btn-lg btn-primary btn-block" value="Log In" />
					</form>
				</div>
				<div style="text-align:center;">
					<a href="<?php echo base_url("index.php/Login/sign_Up");?>">Sign up</a> • <a href="<?php echo base_url("index.php/Login/forgot_password");?>">Forgot password?</a>
				</div>

			</div>
		</div></div>
		<div class="col-sm-4"></div>
	</div>




<!----





---->