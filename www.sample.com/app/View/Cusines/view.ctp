<div class="cusines view">
<h2><?php  echo __('Cusine'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cusine['Cusine']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cusine'); ?></dt>
		<dd>
			<?php echo h($cusine['Cusine']['cusine']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Name'); ?></dt>
		<dd>
			<?php echo h($cusine['Cusine']['display_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($cusine['Cusine']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cusine'), array('action' => 'edit', $cusine['Cusine']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cusine'), array('action' => 'delete', $cusine['Cusine']['id']), null, __('Are you sure you want to delete # %s?', $cusine['Cusine']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cusines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cusine'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Venues'), array('controller' => 'venues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venue'), array('controller' => 'venues', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Venues'); ?></h3>
	<?php if (!empty($cusine['Venue'])): ?>
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
		<th><?php echo __('Cuisine'); ?></th>
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
		foreach ($cusine['Venue'] as $venue): ?>
		<tr>
			<td><?php echo $venue['id']; ?></td>
			<td><?php echo $venue['name']; ?></td>
			<td><?php echo $venue['address']; ?></td>
			<td><?php echo $venue['city']; ?></td>
			<td><?php echo $venue['country']; ?></td>
			<td><?php echo $venue['postcode']; ?></td>
			<td><?php echo $venue['average_price']; ?></td>
			<td><?php echo $venue['nearest_station']; ?></td>
			<td><?php echo $venue['cuisine']; ?></td>
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
