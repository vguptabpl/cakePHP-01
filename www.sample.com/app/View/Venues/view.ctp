<div class="venues view">
<h2><?php  echo __('Venue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Average Price'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['average_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nearest Station'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['nearest_station']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuisine'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['cuisine']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dress Code'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['dress_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lng'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['lng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Avail'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['address_avail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Featured'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['featured']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($venue['User']['id'], array('controller' => 'users', 'action' => 'view', $venue['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bookable'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['bookable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Take Away'); ?></dt>
		<dd>
			<?php echo h($venue['Venue']['take_away']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Venue'), array('action' => 'edit', $venue['Venue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Venue'), array('action' => 'delete', $venue['Venue']['id']), null, __('Are you sure you want to delete # %s?', $venue['Venue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Venues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venue'), array('action' => 'add')); ?> </li>
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
	<div class="related">
		<h3><?php echo __('Related Mediaes'); ?></h3>
	<?php if (!empty($venue['Mediae'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $venue['Mediae']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Venue Id'); ?></dt>
		<dd>
	<?php echo $venue['Mediae']['venue_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Youtube Id'); ?></dt>
		<dd>
	<?php echo $venue['Mediae']['youtube_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Flickr Username'); ?></dt>
		<dd>
	<?php echo $venue['Mediae']['flickr_username']; ?>
&nbsp;</dd>
		<dt><?php echo __('Twitter Username'); ?></dt>
		<dd>
	<?php echo $venue['Mediae']['twitter_username']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Mediae'), array('controller' => 'mediaes', 'action' => 'edit', $venue['Mediae']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Menus'); ?></h3>
	<?php if (!empty($venue['Menu'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $venue['Menu']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Venue Id'); ?></dt>
		<dd>
	<?php echo $venue['Menu']['venue_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
	<?php echo $venue['Menu']['detail']; ?>
&nbsp;</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
	<?php echo $venue['Menu']['type']; ?>
&nbsp;</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
	<?php echo $venue['Menu']['price']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Menu'), array('controller' => 'menus', 'action' => 'edit', $venue['Menu']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($venue['Booking'])): ?>
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
		foreach ($venue['Booking'] as $booking): ?>
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
<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($venue['Review'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Venue Id'); ?></th>
		<th><?php echo __('Heading'); ?></th>
		<th><?php echo __('Detail'); ?></th>
		<th><?php echo __('Average'); ?></th>
		<th><?php echo __('Food'); ?></th>
		<th><?php echo __('Atmosphere'); ?></th>
		<th><?php echo __('Service'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Recommended'); ?></th>
		<th><?php echo __('Good For'); ?></th>
		<th><?php echo __('Date Stamp'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($venue['Review'] as $review): ?>
		<tr>
			<td><?php echo $review['id']; ?></td>
			<td><?php echo $review['user_id']; ?></td>
			<td><?php echo $review['venue_id']; ?></td>
			<td><?php echo $review['heading']; ?></td>
			<td><?php echo $review['detail']; ?></td>
			<td><?php echo $review['average']; ?></td>
			<td><?php echo $review['food']; ?></td>
			<td><?php echo $review['atmosphere']; ?></td>
			<td><?php echo $review['service']; ?></td>
			<td><?php echo $review['value']; ?></td>
			<td><?php echo $review['recommended']; ?></td>
			<td><?php echo $review['good_for']; ?></td>
			<td><?php echo $review['date_stamp']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $review['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $review['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $review['id']), null, __('Are you sure you want to delete # %s?', $review['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Rooms'); ?></h3>
	<?php if (!empty($venue['Room'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Venue Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Seating'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($venue['Room'] as $room): ?>
		<tr>
			<td><?php echo $room['id']; ?></td>
			<td><?php echo $room['venue_id']; ?></td>
			<td><?php echo $room['name']; ?></td>
			<td><?php echo $room['seating']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rooms', 'action' => 'view', $room['room_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rooms', 'action' => 'edit', $room['room_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rooms', 'action' => 'delete', $room['room_id']), null, __('Are you sure you want to delete # %s?', $room['room_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cusines'); ?></h3>
	<?php if (!empty($venue['Cusine'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cuisine'); ?></th>
		<th><?php echo __('Display Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($venue['Cusine'] as $cusine): ?>
		<tr>
			<td><?php echo $cusine['id']; ?></td>
			<td><?php echo $cusine['cuisine']; ?></td>
			<td><?php echo $cusine['display_name']; ?></td>
			<td><?php echo $cusine['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cusines', 'action' => 'view', $cusine['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cusines', 'action' => 'edit', $cusine['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cusines', 'action' => 'delete', $cusine['id']), null, __('Are you sure you want to delete # %s?', $cusine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cusine'), array('controller' => 'cusines', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
