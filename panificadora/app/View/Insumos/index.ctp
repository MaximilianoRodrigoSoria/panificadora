<div class="container">
<div class="insumos index">
	<?php   echo $this->element('navtabs-insumo-consulta');?>
	<input type="text" class="form-control" placeholder="Buscar"><br>
	<div class="panel panel-default">
		<div class="panel-heading">
    		<h3 class="panel-title"><?php echo __('Insumos'); ?></h3>
 		</div>
	
		<div class="table-responsive">
		<table class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
			<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('stock'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($insumos as $insumo): ?>
			<tr>
				<td><?php echo h($insumo['Insumo']['id']); ?>&nbsp;</td>
				<td><?php echo h($insumo['Insumo']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($insumo['Insumo']['stock']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link('',array('action'=>'view', $insumo['Insumo']['id']), array('class'=>'btn btn-default glyphicon glyphicon-search')); ?>
					<?php echo $this->Html->link(__(''), array('action' => 'edit', $insumo['Insumo']['id']), array('class'=>'btn btn-default glyphicon glyphicon-pencil')); ?>
			
					<?php echo $this->Form->postLink('', array('action' => 'delete', $insumo['Insumo']['id']), array('class' => 'btn btn-default glyphicon glyphicon-trash'), __('Estas seguro que deseas borrar el registro n°%s?', $insumo['Insumo']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
			</tbody>
			</table>
		</div>
	</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, Total {:count} ')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled btn btn-default'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled btn btn-default'));
	?>
	</div>
</div> </div>
