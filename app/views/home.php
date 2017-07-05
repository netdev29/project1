<?php if($this->session->flashdata('register_success')) : ?>
	<div class="alert alert-success alert-dismissable">
		<button class="close" type="button" data-dismiss="alert"><span>x</span></button>
		<?php echo $this->session->flashdata('register_success'); ?>
	</div>
<?php endif; ?>
<?php if($this->session->flashdata('login_success')) : ?>
	<div class="alert alert-success alert-dismissable">
		<button class="close" type="button" data-dismiss="alert"><span>x</span></button>
		<?php echo $this->session->flashdata('login_success'); ?>
	</div>
<?php endif; ?>
<?php if($this->session->flashdata('login_fail')) : ?>
	<div class="alert alert-danger alert-dismissable">
		<button class="close" type="button" data-dismiss="alert"><span>x</span></button>
		<?php echo $this->session->flashdata('login_fail'); ?>
	</div>
<?php endif; ?>
<h1 style="margin-top: 0;">Welcome to Project1</h1>
<p>This a Codeigniter application with CRUD functions. This a Codeigniter application with CRUD functions. This application with CRUD functions.</p>
 