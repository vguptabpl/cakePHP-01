<div class="reviews form">
<?php echo $this->Form->create('Review'); ?>
	<fieldset>
		<legend><?php echo __('Edit Review'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('venue_id');
		echo $this->Form->input('heading');
		echo $this->Form->input('detail');
		echo $this->Form->input('average');
		echo $this->Form->input('food');
		echo $this->Form->input('atmosphere');
		echo $this->Form->input('service');
		echo $this->Form->input('value');
		echo $this->Form->input('recommended');
		echo $this->Form->input('good_for');
		echo $this->Form->input('date_stamp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Review.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Review.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Venues'), array('controller' => 'venues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venue'), array('controller' => 'venues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Review Comments'), array('controller' => 'review_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Comment'), array('controller' => 'review_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Review Pictures'), array('controller' => 'review_pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Picture'), array('controller' => 'review_pictures', 'action' => 'add')); ?> </li>
	</ul>
</div>
