<div class="reviewPictures form">
<?php echo $this->Form->create('ReviewPicture'); ?>
	<fieldset>
		<legend><?php echo __('Add Review Picture'); ?></legend>
	<?php
		echo $this->Form->input('review_id');
		echo $this->Form->input('file_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Review Pictures'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
