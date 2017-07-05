<h2 style="margin-top: 0;">Register</h2>
<p>Please fill out the form below to create an account</p>
<div class="col-md-8" style="padding: 0;">
	<div class="panel panel-default">
		<!--<div class="panel-heading">Sign Up Form</div>-->
		<div class="panel-body">
			<?php echo form_open('users/register'); ?>
				<div class="form-group">
					<label class="form-label" for="first_name">First Name</label>
					<input class="form-control" type="text" name="first_name" value="<?php echo set_value('first_name'); ?>">
					<?php if(form_error('first_name')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('first_name'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label class="form-label" for="last_name">Last Name</label>
					<input class="form-control" type="text" name="last_name" value="<?php echo set_value('last_name'); ?>">
					<?php if(form_error('last_name')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('last_name'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label class="form-label" for="username">Username</label>
					<input class="form-control" type="text" name="username" value="<?php echo set_value('username'); ?>">
					<?php if(form_error('username')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('username'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label class="form-label" for="password">Password</label>
					<input class="form-control" type="password" name="password" value="<?php echo set_value('password'); ?>">
					<?php if(form_error('password')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('password'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label class="form-label" for="password2">Confirm Password</label>
					<input class="form-control" type="password" name="password2" value="<?php echo set_value('password2'); ?>">
					<?php if(form_error('password2')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('password2'); ?></div>
					<?php endif; ?>
				</div>
				<input class="btn btn-primary confirm-btn" type="submit" name="submit" value="Register">
			<?php echo form_close(); ?>
		</div>
	</div>
</div>