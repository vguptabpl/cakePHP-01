<div class="reviewComments form">
<?php echo $this->Form->create('ReviewComment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Review Comment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('review_id');
		echo $this->Form->input('comment');
		echo $this->Form->input('review_like');
		echo $this->Form->input('ip_address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ReviewComment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ReviewComment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Review Comments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
