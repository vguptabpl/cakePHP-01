<div class="bookings view">
<h2><?php  echo __('Booking'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['User']['id'], array('controller' => 'users', 'action' => 'view', $booking['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venue'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Venue']['name'], array('controller' => 'venues', 'action' => 'view', $booking['Venue']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Booking Timestamp'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['booking_timestamp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of People'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['number_of_people']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Room']['name'], array('controller' => 'rooms', 'action' => 'view', $booking['Room']['room_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Confirmed'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['confirmed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Booking'), array('action' => 'edit', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Booking'), array('action' => 'delete', $booking['Booking']['id']), null, __('Are you sure you want to delete # %s?', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Venues'), array('controller' => 'venues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venue'), array('controller' => 'venues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rooms'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
	</ul>
</div>
