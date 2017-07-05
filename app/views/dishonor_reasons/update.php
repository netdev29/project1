<h3 class="page-header">Add Dishonor Reason</h3>
<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-body">
			<?php echo form_open('dishonor_reasons/update/' . $dishonor_reason->id); ?>
				<div class="form-group col-md-12">
					<label class="form-label" for="name">Name</label>
					<input class="form-control" type="text" name="name" value="<?php echo $dishonor_reason->name; ?>">
					<?php if(form_error('name')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('name'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="code">Code</label>
					<input class="form-control" type="text" name="code" value="<?php echo $dishonor_reasondishonor_reason->code; ?>">
					<?php if(form_error('code')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('code'); ?></div>
					<?php endif; ?>
				</div>
				<div class="col-md-12">
					<input class="btn btn-primary confirm-btn" type="submit" name="submit" value="Submit">
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>