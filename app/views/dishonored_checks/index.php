<h2 class="page-header" style="margin-top: 0;">Dishonored Checks</h2>
<div class="col-md-12" style="padding: 0;">
	<?php if($this->session->flashdata('dishonored_check_added')) : ?>
		<div class="alert alert-success alert-dismissable"><?php echo $this->session->flashdata('dishonored_check_added'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('dishonored_check_updated')) : ?>
		<div class="alert alert-success alert-dismissable"><?php echo $this->session->flashdata('dishonored_check_updated'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('dishonored_check_deleted')) : ?>
		<div class="alert alert-danger alert-dismissable"><?php echo $this->session->flashdata('dishonored_check_deleted'); ?></div>
	<?php endif; ?>
	<div class="panel panel-default">
		<div class="panel-body">
			<div style="margin: 0 15px;">
				<div class="row"">
					<div class="form-group form-inline col-md-6" style="padding-left: 0;">
						<label class="form-label" for="search">Search:</label>
						<input class="form-control" type="text" name="search">
					</div>
					<div class="col-md-6">
						<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>dishonored_checks/add">Add Dishonored Check</a>
					</div>
				</div>
				<div class="row">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Taxpayer</th>
								<th>Bank Name</th>
								<th>Amount</th>
								<th>Date</th>
							</tr>
						</thead>
						<?php if( ! empty($dishonored_checks)) : ?>
							<tbody>
							<?php foreach($dishonored_checks as $dishonored_check) : ?>
								<tr>
									<td><?php echo $dishonored_check->taxpayer_id; ?></td>
									<td><?php echo $dishonored_check->bank_name; ?></td>
									<td><?php echo $dishonored_check->amount; ?></td>
									<td><?php echo $dishonored_check->date; ?></td>
									<td>
										<a class="btn btn-primary" href="<?php echo base_url(); ?>dishonored_checks/update/<?php echo $dishonored_check->id ?>">Update</a>
										<a class="btn btn-danger confirm-btn" href="<?php echo base_url(); ?>dishonored_checks/delete/<?php echo $dishonored_check->id ?>">Delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						<?php endif; ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
