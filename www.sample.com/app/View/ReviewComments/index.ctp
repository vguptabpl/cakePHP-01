<div class="reviewComments index">
	<h2><?php echo __('Review Comments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('review_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('review_like'); ?></th>
			<th><?php echo $this->Paginator->sort('ip_address'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($reviewComments as $reviewComment): ?>
	<tr>
		<td><?php echo h($reviewComment['ReviewComment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reviewComment['Review']['user_id'], array('controller' => 'reviews', 'action' => 'view', $reviewComment['Review']['id'])); ?>
		</td>
		<td><?php echo h($reviewComment['ReviewComment']['comment']); ?>&nbsp;</td>
		<td><?php echo h($reviewComment['ReviewComment']['review_like']); ?>&nbsp;</td>
		<td><?php echo h($reviewComment['ReviewComment']['ip_address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reviewComment['ReviewComment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reviewComment['ReviewComment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reviewComment['ReviewComment']['id']), null, __('Are you sure you want to delete # %s?', $reviewComment['ReviewComment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Review Comment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
