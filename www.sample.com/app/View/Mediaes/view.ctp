<div class="mediaes view">
<h2><?php  echo __('Mediae'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mediae['Mediae']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venue Id'); ?></dt>
		<dd>
			<?php echo h($mediae['Mediae']['venue_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Youtube Id'); ?></dt>
		<dd>
			<?php echo h($mediae['Mediae']['youtube_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flickr Username'); ?></dt>
		<dd>
			<?php echo h($mediae['Mediae']['flickr_username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter Username'); ?></dt>
		<dd>
			<?php echo h($mediae['Mediae']['twitter_username']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mediae'), array('action' => 'edit', $mediae['Mediae']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mediae'), array('action' => 'delete', $mediae['Mediae']['id']), null, __('Are you sure you want to delete # %s?', $mediae['Mediae']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mediaes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mediae'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Venues'), array('controller' => 'venues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venue'), array('controller' => 'venues', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Venues'); ?></h3>
	<?php if (!empty($mediae['venue'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['address']; ?>
&nbsp;</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['city']; ?>
&nbsp;</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['country']; ?>
&nbsp;</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['postcode']; ?>
&nbsp;</dd>
		<dt><?php echo __('Average Price'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['average_price']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nearest Station'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['nearest_station']; ?>
&nbsp;</dd>
		<dt><?php echo __('Cuisine'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['cuisine']; ?>
&nbsp;</dd>
		<dt><?php echo __('Dress Code'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['dress_code']; ?>
&nbsp;</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['lat']; ?>
&nbsp;</dd>
		<dt><?php echo __('Lng'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['lng']; ?>
&nbsp;</dd>
		<dt><?php echo __('Address Avail'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['address_avail']; ?>
&nbsp;</dd>
		<dt><?php echo __('Featured'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['featured']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Bookable'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['bookable']; ?>
&nbsp;</dd>
		<dt><?php echo __('Take Away'); ?></dt>
		<dd>
	<?php echo $mediae['venue']['take_away']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Venue'), array('controller' => 'venues', 'action' => 'edit', $mediae['venue']['id'])); ?></li>
			</ul>
		</div>
	</div>
	