<div class="itemTypes view">
<h2><?php echo __('Item Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemType['ItemType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($itemType['ItemType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($itemType['ItemType']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($itemType['ItemType']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Type'), array('action' => 'edit', $itemType['ItemType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Type'), array('action' => 'delete', $itemType['ItemType']['id']), array(), __('Are you sure you want to delete # %s?', $itemType['ItemType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($itemType['Item'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Type Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Stock Unit Type Id'); ?></th>
		<th><?php echo __('Detail'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itemType['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['item_type_id']; ?></td>
			<td><?php echo $item['name']; ?></td>
			<td><?php echo $item['stock_unit_type_id']; ?></td>
			<td><?php echo $item['detail']; ?></td>
			<td><?php echo $item['modified']; ?></td>
			<td><?php echo $item['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), array(), __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
