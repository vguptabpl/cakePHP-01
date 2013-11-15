<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($user['User']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($user['User']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob Day'); ?></dt>
		<dd>
			<?php echo h($user['User']['dob_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob Month'); ?></dt>
		<dd>
			<?php echo h($user['User']['dob_month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob Year'); ?></dt>
		<dd>
			<?php echo h($user['User']['dob_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receive Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['receive_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address 1'); ?></dt>
		<dd>
			<?php echo h($user['User']['address_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address 2'); ?></dt>
		<dd>
			<?php echo h($user['User']['address_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address City'); ?></dt>
		<dd>
			<?php echo h($user['User']['address_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Postcode'); ?></dt>
		<dd>
			<?php echo h($user['User']['address_postcode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Venues'), array('controller' => 'venues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venue'), array('controller' => 'venues', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($user['Booking'])): ?>
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
		foreach ($user['Booking'] as $booking): ?>
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
	<?php if (!empty($user['Review'])): ?>
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
		foreach ($user['Review'] as $review): ?>
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
	<h3><?php echo __('Related Venues'); ?></h3>
	<?php if (!empty($user['Venue'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Postcode'); ?></th>
		<th><?php echo __('Average Price'); ?></th>
		<th><?php echo __('Nearest Station'); ?></th>
		<th><?php echo __('Cusine'); ?></th>
		<th><?php echo __('Dress Code'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Lng'); ?></th>
		<th><?php echo __('Address Avail'); ?></th>
		<th><?php echo __('Featured'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Bookable'); ?></th>
		<th><?php echo __('Take Away'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Venue'] as $venue): ?>
		<tr>
			<td><?php echo $venue['id']; ?></td>
			<td><?php echo $venue['name']; ?></td>
			<td><?php echo $venue['address']; ?></td>
			<td><?php echo $venue['city']; ?></td>
			<td><?php echo $venue['country']; ?></td>
			<td><?php echo $venue['postcode']; ?></td>
			<td><?php echo $venue['average_price']; ?></td>
			<td><?php echo $venue['nearest_station']; ?></td>
			<td><?php echo $venue['Cusine']; ?></td>
			<td><?php echo $venue['dress_code']; ?></td>
			<td><?php echo $venue['lat']; ?></td>
			<td><?php echo $venue['lng']; ?></td>
			<td><?php echo $venue['address_avail']; ?></td>
			<td><?php echo $venue['featured']; ?></td>
			<td><?php echo $venue['user_id']; ?></td>
			<td><?php echo $venue['bookable']; ?></td>
			<td><?php echo $venue['take_away']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'venues', 'action' => 'view', $venue['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'venues', 'action' => 'edit', $venue['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'venues', 'action' => 'delete', $venue['id']), null, __('Are you sure you want to delete # %s?', $venue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Venue'), array('controller' => 'venues', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
