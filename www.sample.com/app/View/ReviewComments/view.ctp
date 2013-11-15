<div class="reviewComments view">
<h2><?php  echo __('Review Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reviewComment['ReviewComment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reviewComment['Review']['user_id'], array('controller' => 'reviews', 'action' => 'view', $reviewComment['Review']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($reviewComment['ReviewComment']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review Like'); ?></dt>
		<dd>
			<?php echo h($reviewComment['ReviewComment']['review_like']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip Address'); ?></dt>
		<dd>
			<?php echo h($reviewComment['ReviewComment']['ip_address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review Comment'), array('action' => 'edit', $reviewComment['ReviewComment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Review Comment'), array('action' => 'delete', $reviewComment['ReviewComment']['id']), null, __('Are you sure you want to delete # %s?', $reviewComment['ReviewComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Review Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
