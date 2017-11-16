<div class="container">
	<div class="formulas view">
		<div class="panel panel-default">
			<div class="panel-heading">
	    		<h3 class="panel-title"><?php echo __('Detalle de Formula #'),h($formula['Formula']['id']); ?></h3>
	 		</div>	
	 		<div class="panel-body">
	
			<h4><?php echo __('Nombre'); ?></h4>
			<p>
				<?php echo h($formula['Formula']['nombre']); ?>
				&nbsp;
			</p>
			<h4><?php echo __('Descripcion'); ?></h4>
			<p>
				<?php echo h($formula['Formula']['descripcion']); ?>
				&nbsp;
			</p>
			</div>
		</div>
	<?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-default')); ?>
	</div>

	<!--div class="related">
		<h3><?php echo __('Related Insumos'); ?></h3>
		<?php if (!empty($formula['Insumo'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Estado Id'); ?></th>
			<th><?php echo __('Nombre'); ?></th>
			<th><?php echo __('Stock'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($formula['Insumo'] as $insumo): ?>
			<tr>
				<td><?php echo $insumo['id']; ?></td>
				<td><?php echo $insumo['estado_id']; ?></td>
				<td><?php echo $insumo['nombre']; ?></td>
				<td><?php echo $insumo['stock']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'insumos', 'action' => 'view', $insumo['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'insumos', 'action' => 'edit', $insumo['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'insumos', 'action' => 'delete', $insumo['id']), array(), __('Are you sure you want to delete # %s?', $insumo['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
		<?php endif; ?>
	</div-->
</div>
