<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
		×</button>
	<span class="glyphicon glyphicon-ok"></span>
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php elseif($this->session->flashdata('error')): ?>
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
		×</button>
	<span class="glyphicon glyphicon-exclamation-sign"></span>

	<?php echo $this->session->flashdata('error'); ?>
</div>
<?php endif; ?>
