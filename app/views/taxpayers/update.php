<h3>Add Taxpayer</h3>
<p>Please fill out the form below to update taxpayer</p>
<div class="col-md-8" style="padding: 0;">
	<div class="panel panel-default">
		<div class="panel-heading">Update Taxpayer Form</div>
		<div class="panel-body">
			<?php echo form_open('taxpayers/update/' . $taxpayer->id); ?>
				<div class="form-group col-md-12">
					<label class="form-label" for="name">Name:</label>
					<input class="form-control" type="text" name="name" value="<?php echo $taxpayer->name; ?>">
					<?php if(form_error('name')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('name'); ?></div>
					<?php endif; ?>
				</div>
				
				<div class="form-group col-md-12">
					<label class="form-label" for="tax_id_number">Tax ID Number</label>
					<input class="form-control" type="text" name="tax_id_number" value="<?php echo $taxpayer->tax_id_number; ?>">
					<?php if(form_error('tax_id_number')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('tax_id_number'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="address">Address</label>
					<textarea class="form-control" name="address"><?php echo $taxpayer->address; ?></textarea>
					<?php if(form_error('address')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('address'); ?></div>
					<?php endif; ?>
				</div>
				<div class="col-md-12">
					<input class="btn btn-primary confirm-btn" type="submit" name="submit" value="Submit">
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>