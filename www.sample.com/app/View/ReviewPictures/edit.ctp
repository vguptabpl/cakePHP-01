<div class="reviewPictures form">
<?php echo $this->Form->create('ReviewPicture'); ?>
	<fieldset>
		<legend><?php echo __('Edit Review Picture'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('review_id');
		echo $this->Form->input('file_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ReviewPicture.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ReviewPicture.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Review Pictures'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
