<h2 class="page-header" style="margin-top: 0;">Taxpayers</h2>
<div class="col-md-12" style="padding: 0;">
	<?php if($this->session->flashdata('taxpayer_added')) : ?>
		<div class="alert alert-success alert-dismissable"><?php echo $this->session->flashdata('taxpayer_added'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('taxpayer_updated')) : ?>
		<div class="alert alert-success alert-dismissable"><?php echo $this->session->flashdata('taxpayer_updated'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('taxpayer_deleted')) : ?>
		<div class="alert alert-danger alert-dismissable"><?php echo $this->session->flashdata('taxpayer_deleted'); ?></div>
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
						<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>taxpayers/add">Add Taxpayer</a>
					</div>
				</div>
				<div class="row">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Tax Id Number</th>
								<th>Add Date</th>
								<th>Actions</th>
							</tr>
						</thead>
						<?php if( ! empty($taxpayers)) : ?>
							<tbody>
							<?php foreach($taxpayers as $taxpayer) : ?>
								<tr>
									<td><?php echo $taxpayer->name; ?></td>
									<td><?php echo $taxpayer->tax_id_number; ?></td>
									<td><?php echo $taxpayer->create_date; ?></td>
									<td>
										<a class="btn btn-primary" href="<?php echo base_url(); ?>taxpayers/update/<?php echo $taxpayer->id ?>">Update</a>
										<a class="btn btn-danger confirm-btn" href="<?php echo base_url(); ?>taxpayers/delete/<?php echo $taxpayer->id ?>">Delete</a>
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
