<div class="reviews index">
	<h2><?php echo __('Reviews'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('venue_id'); ?></th>
			<th><?php echo $this->Paginator->sort('heading'); ?></th>
			<th><?php echo $this->Paginator->sort('detail'); ?></th>
			<th><?php echo $this->Paginator->sort('average'); ?></th>
			<th><?php echo $this->Paginator->sort('food'); ?></th>
			<th><?php echo $this->Paginator->sort('atmosphere'); ?></th>
			<th><?php echo $this->Paginator->sort('service'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('recommended'); ?></th>
			<th><?php echo $this->Paginator->sort('good_for'); ?></th>
			<th><?php echo $this->Paginator->sort('date_stamp'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($reviews as $review): ?>
	<tr>
		<td><?php echo h($review['Review']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($review['User']['id'], array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($review['Venue']['name'], array('controller' => 'venues', 'action' => 'view', $review['Venue']['id'])); ?>
		</td>
		<td><?php echo h($review['Review']['heading']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['detail']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['average']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['food']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['atmosphere']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['service']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['value']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['recommended']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['good_for']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['date_stamp']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $review['Review']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $review['Review']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $review['Review']['id']), null, __('Are you sure you want to delete # %s?', $review['Review']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?></li>
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
