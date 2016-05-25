<div class="container">
<h2><?php echo __('Employee List'); ?></h2>
<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo __('no'); ?></th>
			<th><?php echo __('name'); ?></th>
			<th><?php echo __('mobile_no'); ?></th>
			<th><?php echo __('email'); ?></th>
			<th><?php echo __('dob'); ?></th>
			<th><?php echo __('address'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
		$count=1; 
		?>
		 <?php if(!empty($employees)): foreach($employees as $employee): ?>
		 <tr>
		<td><?php echo h($count); ?>&nbsp;</td>
		<td><?php echo h($employee->name); ?>&nbsp;</td>
		<td><?php echo h($employee->mobile_no); ?>&nbsp;</td>
		<td><?php echo h($employee->email); ?>&nbsp;</td>
		<td><?php echo h($employee->gender); ?>&nbsp;</td>
		<td><?php echo h($employee->dob); ?>&nbsp;</td>
		<td><?php echo h($employee->address); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employee['Employee']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $employee['Employee']['id']))); ?>
		</td>
	</tr>
	<?php
	$count++;
	?>
<?php endforeach;else: ?>
 <p class="no-record">No post(s) found......</p>
  <?php endif; ?>	
	</tbody>
	</table>
</div>