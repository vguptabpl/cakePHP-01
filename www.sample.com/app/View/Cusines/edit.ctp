<div class="cusines form">
<?php echo $this->Form->create('Cusine'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cusine'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cusine');
		echo $this->Form->input('display_name');
		echo $this->Form->input('description');
		echo $this->Form->input('Venue');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cusine.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cusine.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cusines'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Venues'), array('controller' => 'venues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venue'), array('controller' => 'venues', 'action' => 'add')); ?> </li>
	</ul>
</div>
