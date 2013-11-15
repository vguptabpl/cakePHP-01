<div class="reviewPictures index">
	<h2><?php echo __('Review Pictures'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('review_id'); ?></th>
			<th><?php echo $this->Paginator->sort('file_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($reviewPictures as $reviewPicture): ?>
	<tr>
		<td><?php echo h($reviewPicture['ReviewPicture']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reviewPicture['Review']['user_id'], array('controller' => 'reviews', 'action' => 'view', $reviewPicture['Review']['id'])); ?>
		</td>
		<td><?php echo h($reviewPicture['ReviewPicture']['file_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reviewPicture['ReviewPicture']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reviewPicture['ReviewPicture']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reviewPicture['ReviewPicture']['id']), null, __('Are you sure you want to delete # %s?', $reviewPicture['ReviewPicture']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Review Picture'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
