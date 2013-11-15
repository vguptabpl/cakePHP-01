<div class="venues form">
<?php echo $this->Form->create('Venue'); ?>
	<fieldset>
		<legend><?php echo __('Add Venue'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('country');
		echo $this->Form->input('postcode');
		echo $this->Form->input('average_price');
		echo $this->Form->input('nearest_station');
		echo $this->Form->input('cuisine');
		echo $this->Form->input('dress_code');
		echo $this->Form->input('lat');
		echo $this->Form->input('lng');
		echo $this->Form->input('address_avail');
		echo $this->Form->input('featured');
		echo $this->Form->input('user_id');
		echo $this->Form->input('bookable');
		echo $this->Form->input('take_away');
		echo $this->Form->input('Cusine');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Venues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mediaes'), array('controller' => 'mediaes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mediae'), array('controller' => 'mediaes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rooms'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cusines'), array('controller' => 'cusines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cusine'), array('controller' => 'cusines', 'action' => 'add')); ?> </li>
	</ul>
</div>
