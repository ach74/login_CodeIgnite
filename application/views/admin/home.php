
<?php echo $this->session->access_level;?>

<?php if ($this->session->has_userdata("acces_success")):?>
	<div class='alert alert-success' role="alert">
		<strong> <?php echo $this->session->acces_success;?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>

<a href="<?php echo base_url("index.php/Admin/logOut");?>" class="btn btn-primary">LogOut</a>