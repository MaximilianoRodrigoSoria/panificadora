<div class="container">
	<div class="insumos view">
		<div class="panel panel-default">
			<div class="panel-heading">
	    		<h3 class="panel-title"><?php echo __('Detalle de Insumo #'),h($insumo['Insumo']['id']); ?></h3>
	 		</div>	
	 		<div class="panel-body">
				<h4><?php echo __('Nombre'); ?></h4>
				<p>
					<?php echo h($insumo['Insumo']['nombre']); ?>
					&nbsp;
				</p>
				<h4><?php echo __('Stock'); ?></h4>
				<p>
					<?php echo h($insumo['Insumo']['stock']); ?>
					&nbsp;
				</p>
			</div>
		</div>
		<?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-default')); ?>
	</div>
</div>
<!--div class="related">
	<h3><?php echo __('Related Formulas'); ?></h3>
	<?php if (!empty($insumo['Formula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($insumo['Formula'] as $formula): ?>
		<tr>
			<td><?php echo $formula['id']; ?></td>
			<td><?php echo $formula['estado_id']; ?></td>
			<td><?php echo $formula['nombre']; ?></td>
			<td><?php echo $formula['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'formulas', 'action' => 'view', $formula['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'formulas', 'action' => 'edit', $formula['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'formulas', 'action' => 'delete', $formula['id']), array(), __('Are you sure you want to delete # %s?', $formula['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
