<div class="venues index">
	<h2><?php echo __('Venues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('postcode'); ?></th>
			<th><?php echo $this->Paginator->sort('average_price'); ?></th>
			<th><?php echo $this->Paginator->sort('nearest_station'); ?></th>
			<th><?php echo $this->Paginator->sort('cuisine'); ?></th>
			<th><?php echo $this->Paginator->sort('dress_code'); ?></th>
			<th><?php echo $this->Paginator->sort('lat'); ?></th>
			<th><?php echo $this->Paginator->sort('lng'); ?></th>
			<th><?php echo $this->Paginator->sort('address_avail'); ?></th>
			<th><?php echo $this->Paginator->sort('featured'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bookable'); ?></th>
			<th><?php echo $this->Paginator->sort('take_away'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($venues as $venue): ?>
	<tr>
		<td><?php echo h($venue['Venue']['id']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['name']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['address']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['city']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['country']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['postcode']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['average_price']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['nearest_station']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['cuisine']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['dress_code']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['lat']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['lng']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['address_avail']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['featured']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($venue['User']['id'], array('controller' => 'users', 'action' => 'view', $venue['User']['id'])); ?>
		</td>
		<td><?php echo h($venue['Venue']['bookable']); ?>&nbsp;</td>
		<td><?php echo h($venue['Venue']['take_away']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $venue['Venue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $venue['Venue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $venue['Venue']['id']), null, __('Are you sure you want to delete # %s?', $venue['Venue']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Venue'), array('action' => 'add')); ?></li>
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
