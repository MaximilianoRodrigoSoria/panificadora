<div class="container">
	<div class="usuarios view">
		<div class="panel panel-default">
			<div class="panel-heading">
	    		<h3 class="panel-title"><?php echo __('Detalle de Producto #'),h($producto['Producto']['id']); ?></h3>
	 		</div>	
	 		<div class="panel-body">
				<h4><?php echo __('Nombre'); ?></h4>
				<p>
					<?php echo h($producto['Producto']['nombre']); ?>
					&nbsp;
				</p>
			</div>
		</div>
		<?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-default')); ?>
	</div>
<!--div class="related">
	<h3><?php echo __('Related Cpedidos'); ?></h3>
	<?php if (!empty($producto['Cpedido'])): ?>
	<table cellpaping = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Cpedido'] as $cpedido): ?>
		<tr>
			<td><?php echo $cpedido['id']; ?></td>
			<td><?php echo $cpedido['cantidad']; ?></td>
			<td><?php echo $cpedido['producto_id']; ?></td>
			<td><?php echo $cpedido['tipo_id']; ?></td>
			<td><?php echo $cpedido['estado_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cpedidos', 'action' => 'view', $cpedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cpedidos', 'action' => 'edit', $cpedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cpedidos', 'action' => 'delete', $cpedido['id']), array(), __('Are you sure you want to delete # %s?', $cpedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Related Pedidos'); ?></h3>
	<?php if (!empty($producto['Pedido'])): ?>
	<table cellpaping = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Pedido'] as $pedido): ?>
		<tr>
			<td><?php echo $pedido['id']; ?></td>
			<td><?php echo $pedido['cantidad']; ?></td>
			<td><?php echo $pedido['producto_id']; ?></td>
			<td><?php echo $pedido['tipo_id']; ?></td>
			<td><?php echo $pedido['estado_id']; ?></td>
			<td><?php echo $pedido['fecha']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pedidos', 'action' => 'view', $pedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pedidos', 'action' => 'edit', $pedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pedidos', 'action' => 'delete', $pedido['id']), array(), __('Are you sure you want to delete # %s?', $pedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div-->
</div>