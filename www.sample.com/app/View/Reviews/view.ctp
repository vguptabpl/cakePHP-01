<div class="reviews view">
<h2><?php  echo __('Review'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($review['Review']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['User']['id'], array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venue'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['Venue']['name'], array('controller' => 'venues', 'action' => 'view', $review['Venue']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heading'); ?></dt>
		<dd>
			<?php echo h($review['Review']['heading']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($review['Review']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Average'); ?></dt>
		<dd>
			<?php echo h($review['Review']['average']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food'); ?></dt>
		<dd>
			<?php echo h($review['Review']['food']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atmosphere'); ?></dt>
		<dd>
			<?php echo h($review['Review']['atmosphere']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo h($review['Review']['service']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($review['Review']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recommended'); ?></dt>
		<dd>
			<?php echo h($review['Review']['recommended']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Good For'); ?></dt>
		<dd>
			<?php echo h($review['Review']['good_for']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Stamp'); ?></dt>
		<dd>
			<?php echo h($review['Review']['date_stamp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review'), array('action' => 'edit', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Review'), array('action' => 'delete', $review['Review']['id']), null, __('Are you sure you want to delete # %s?', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Review Comments'); ?></h3>
	<?php if (!empty($review['ReviewComment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Review Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Review Like'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($review['ReviewComment'] as $reviewComment): ?>
		<tr>
			<td><?php echo $reviewComment['id']; ?></td>
			<td><?php echo $reviewComment['review_id']; ?></td>
			<td><?php echo $reviewComment['comment']; ?></td>
			<td><?php echo $reviewComment['review_like']; ?></td>
			<td><?php echo $reviewComment['ip_address']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'review_comments', 'action' => 'view', $reviewComment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'review_comments', 'action' => 'edit', $reviewComment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'review_comments', 'action' => 'delete', $reviewComment['id']), null, __('Are you sure you want to delete # %s?', $reviewComment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Review Comment'), array('controller' => 'review_comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Review Pictures'); ?></h3>
	<?php if (!empty($review['ReviewPicture'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Review Id'); ?></th>
		<th><?php echo __('File Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($review['ReviewPicture'] as $reviewPicture): ?>
		<tr>
			<td><?php echo $reviewPicture['id']; ?></td>
			<td><?php echo $reviewPicture['review_id']; ?></td>
			<td><?php echo $reviewPicture['file_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'review_pictures', 'action' => 'view', $reviewPicture['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'review_pictures', 'action' => 'edit', $reviewPicture['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'review_pictures', 'action' => 'delete', $reviewPicture['id']), null, __('Are you sure you want to delete # %s?', $reviewPicture['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Review Picture'), array('controller' => 'review_pictures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
