<h3 style="margin-top: 0;">Add Dishonored Check</h3>
<p>Please fill out the form below to add a dishonored check</p>
<div class="col-md-8" style="padding: 0;">
	<div class="panel panel-default">
		<div class="panel-body">
			<?php echo form_open('dishonor_checks/add'); ?>
				<div class="form-group col-md-12">
					<label class="form-label" for="taxpayer">Taxpayer</label>
					<select class="form-control" name="taxpayer">
						<?php if( ! empty($taxpayers)) : ?>
							<?php foreach($taxpayers as $taxpayer) : ?>
								<option value="<?php echo $taxpayer->id; ?>"><?php echo $taxpayer->name; ?></option>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
					<?php if(form_error('taxpayer')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('taxpayer'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="bank_name">Bank Name</label>
					<input class="form-control" type="text" name="bank_name" value="<?php echo set_value('bank_name'); ?>">
					<?php if(form_error('bank_name')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('bank_name'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="bank_account_number">Bank Account Number</label>
					<input class="form-control" type="text" name="bank_account_number" value="<?php echo set_value('bank_account_number'); ?>">
					<?php if(form_error('bank_account_number')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('bank_account_number'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="amount">Amount</label>
					<input class="form-control" type="text" name="amount" value="<?php echo set_value('amount'); ?>">
					<?php if(form_error('amount')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('amount'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="check_number">Check Number</label>
					<input class="form-control" type="text" name="check_number" value="<?php echo set_value('check_number'); ?>">
					<?php if(form_error('check_number')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('check_number'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="date">Check Date</label>
					<input class="form-control date" type="text" name="date" placeholder="MM/DD/YYYY" value="<?php echo set_value('date'); ?>">
					<?php if(form_error('date')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('date'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="return_period">Return Period</label>
					<input class="form-control" type="text" name="return_period" placeholder="MM/YYYY" value="<?php echo set_value('return_period'); ?>">
					<?php if(form_error('return_period')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('return_period'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="receiving_bank_name">Receiving Bank Name</label>
					<input class="form-control" type="text" name="receiving_bank_name" value="<?php echo set_value('receiving_bank_name'); ?>">
					<?php if(form_error('receiving_bank_name')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('receiving_bank_name'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="district">District</label>
					<select class="form-control" name="district">
						<?php if( ! empty($districts)) : ?>
							<?php foreach($districts as $district) : ?>
								<option value="<?php echo $district->id; ?>"><?php echo $district->name; ?></option>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
					<?php if(form_error('district')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('district'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="dishonor_reason">Dishonor Reason</label>
					<select class="form-control" name="dishonor_reason">
						<?php if( ! empty($dishonor_reasons)) : ?>
							<?php foreach($dishonor_reasons as $dishonor_reason) : ?>
								<option value="<?php echo $dishonor_reason->id; ?>"><?php echo $dishonor_reason->code; ?></option>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
					<?php if(form_error('dishonor_reason')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('dishonor_reason'); ?></div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-12">
					<label class="form-label" for="tax_type">Tax Type</label>
					<select class="form-control" name="tax_type">
						<?php if( ! empty($tax_types)) : ?>
							<?php foreach($tax_types as $tax_type) : ?>
								<option value="<?php echo $tax_type->id; ?>"><?php echo $tax_type->code; ?></option>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
					<?php if(form_error('tax_type')) : ?>
						<div class="alert alert-danger alert-dismissable"><?php echo form_error('tax_type'); ?></div>
					<?php endif; ?>
				</div>
				<div class="col-md-12">
					<input class="btn btn-primary confirm-btn" type="submit" name="submit" value="Submit">
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
