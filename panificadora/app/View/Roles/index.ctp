<div class="container">
<div class="roles index">
	<?php   echo $this->element('navtabs-role-consulta');?>
	<input type="text" class="form-control" placeholder="Buscar"><br>
	<div class="panel panel-default">
		<div class="panel-heading">
    		<h3 class="panel-title"><?php echo __('Roles'); ?></h3>
 		</div>
	
		<div class="table-responsive">
		<table class="table table-bordered table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('nombre'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($roles as $role): ?>
		<tr>
			<td><?php echo h($role['Role']['id']); ?>&nbsp;</td>
			<td><?php echo h($role['Role']['nombre']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link('',array('action'=>'view', $role['Role']['id']), array('class'=>'btn btn-default glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link(__(''), array('action' => 'edit', $role['Role']['id']), array('class'=>'btn btn-default glyphicon glyphicon-pencil')); ?>
		
				<?php echo $this->Form->postLink('', array('action' => 'delete', $role['Role']['id']), array('class' => 'btn btn-default glyphicon glyphicon-trash'), __('Estas seguro que deseas borrar el registro n°%s?', $role['Role']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table> </div>
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