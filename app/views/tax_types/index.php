<h2 class="page-header" style="margin-top: 0;">Tax Types</h2>
<div class="col-md-12" style="padding: 0;">
	<?php if($this->session->flashdata('tax_type_added')) : ?>
		<div class="alert alert-success alert-dismissable"><?php echo $this->session->flashdata('tax_type_added'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('tax_type_updated')) : ?>
		<div class="alert alert-success alert-dismissable"><?php echo $this->session->flashdata('tax_type_updated'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('tax_type_deleted')) : ?>
		<div class="alert alert-danger alert-dismissable"><?php echo $this->session->flashdata('tax_type_deleted'); ?></div>
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
						<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>tax_types/add">Add Tax Type</a>
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
						<?php if( ! empty($tax_types)) : ?>
							<tbody>
							<?php foreach($tax_types as $tax_type) : ?>
								<tr>
									<td><?php echo $tax_type->name; ?></td>
								<td><?php echo $tax_type->code; ?></td>
								<td>
									<a class="btn btn-primary" href="<?php echo base_url(); ?>tax_types/update/<?php echo $tax_type->id ?>">Update</a>
									<a class="btn btn-danger confirm-btn" href="<?php echo base_url(); ?>tax_types/delete/<?php echo $tax_type->id ?>">Delete</a>
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
