<h2 class="page-header" style="margin-top: 0;">Dishonor Reasons</h2>
<div class="col-md-12" style="padding: 0;">
	<?php if($this->session->flashdata('dishonor_reason_added')) : ?>
		<div class="alert alert-success alert-dismissable"><?php echo $this->session->flashdata('dishonor_reason_added'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('dishonor_reason_updated')) : ?>
		<div class="alert alert-success alert-dismissable"><?php echo $this->session->flashdata('dishonor_reason_updated'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('dishonor_reason_deleted')) : ?>
		<div class="alert alert-danger alert-dismissable"><?php echo $this->session->flashdata('dishonor_reason_deleted'); ?></div>
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
						<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>dishonor_reasons/add">Add Dishonor Reason</a>
					</div>
				</div>
				<div class="row">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Code</th>
								<th>Actions</th>
							</tr>
						</thead>
						<?php if( ! empty($dishonor_reasons)) : ?>
							<tbody>
							<?php foreach($dishonor_reasons as $dishonor_reason) : ?>
								<tr>
									<td><?php echo $dishonor_reason->name; ?></td>
								<td><?php echo $dishonor_reason->code; ?></td>
								<td>
									<a class="btn btn-primary" href="<?php echo base_url(); ?>dishonor_reasons/update/<?php echo $dishonor_reason->id ?>">Update</a>
									<a class="btn btn-danger confirm-btn" href="<?php echo base_url(); ?>dishonor_reasons/delete/<?php echo $dishonor_reason->id ?>">Delete</a>
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
