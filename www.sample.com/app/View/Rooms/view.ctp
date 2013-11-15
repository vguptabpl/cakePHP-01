<div class="rooms view">
<h2><?php  echo __('Room'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($room['Room']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venue'); ?></dt>
		<dd>
			<?php echo $this->Html->link($room['Venue']['name'], array('controller' => 'venues', 'action' => 'view', $room['Venue']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($room['Room']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seating'); ?></dt>
		<dd>
			<?php echo h($room['Room']['seating']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Room'), array('action' => 'edit', $room['Room']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Room'), array('action' => 'delete', $room['Room']['id']), null, __('Are you sure you want to delete # %s?', $room['Room']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rooms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Room'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Venues'), array('controller' => 'venues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venue'), array('controller' => 'venues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($room['Booking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Venue Id'); ?></th>
		<th><?php echo __('Booking Timestamp'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Number Of People'); ?></th>
		<th><?php echo __('Room Id'); ?></th>
		<th><?php echo __('Confirmed'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($room['Booking'] as $booking): ?>
		<tr>
			<td><?php echo $booking['id']; ?></td>
			<td><?php echo $booking['user_id']; ?></td>
			<td><?php echo $booking['venue_id']; ?></td>
			<td><?php echo $booking['booking_timestamp']; ?></td>
			<td><?php echo $booking['date']; ?></td>
			<td><?php echo $booking['time']; ?></td>
			<td><?php echo $booking['number_of_people']; ?></td>
			<td><?php echo $booking['room_id']; ?></td>
			<td><?php echo $booking['confirmed']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bookings', 'action' => 'view', $booking['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bookings', 'action' => 'edit', $booking['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bookings', 'action' => 'delete', $booking['id']), null, __('Are you sure you want to delete # %s?', $booking['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
