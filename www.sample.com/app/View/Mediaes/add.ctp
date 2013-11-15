<div class="mediaes form">
<?php echo $this->Form->create('Mediae'); ?>
	<fieldset>
		<legend><?php echo __('Add Mediae'); ?></legend>
	<?php
		echo $this->Form->input('venue_id');
		echo $this->Form->input('youtube_id');
		echo $this->Form->input('flickr_username');
		echo $this->Form->input('twitter_username');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mediaes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Venues'), array('controller' => 'venues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venue'), array('controller' => 'venues', 'action' => 'add')); ?> </li>
	</ul>
</div>
