<div class="reviewPictures view">
<h2><?php  echo __('Review Picture'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reviewPicture['ReviewPicture']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reviewPicture['Review']['user_id'], array('controller' => 'reviews', 'action' => 'view', $reviewPicture['Review']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Name'); ?></dt>
		<dd>
			<?php echo h($reviewPicture['ReviewPicture']['file_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review Picture'), array('action' => 'edit', $reviewPicture['ReviewPicture']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Review Picture'), array('action' => 'delete', $reviewPicture['ReviewPicture']['id']), null, __('Are you sure you want to delete # %s?', $reviewPicture['ReviewPicture']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Review Pictures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Picture'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
