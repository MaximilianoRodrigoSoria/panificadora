<div class="container">
	<div class="clientes view">
		<div class="panel panel-default">
			<div class="panel-heading">
	    		<h3 class="panel-title"><?php echo __('Detalle de Cliente #'),h($cliente['Cliente']['id']); ?></h3>
	 		</div>	
			<div class="panel-body">
				<h4><?php echo __('Nombre'); ?></h4>
				<p>
					<?php echo h($cliente['Cliente']['nombre']); ?>
					&nbsp;
				</p>
				<h4><?php echo __('Apellido'); ?></h4>
				<p>
					<?php echo h($cliente['Cliente']['apellido']); ?>
					&nbsp;
				</p>
				<h4><?php echo __('Dni'); ?></h4>
				<p>
					<?php echo h($cliente['Cliente']['dni']); ?>
					&nbsp;
				</p>
				<h4><?php echo __('Telefono'); ?></h4>
				<p>
					<?php echo h($cliente['Cliente']['telefono']); ?>
					&nbsp;
				</p>
				<h4><?php echo __('Email'); ?></h4>
				<p>
					<?php echo h($cliente['Cliente']['email']); ?>
					&nbsp;
				</p>
			</div>
		</div>
		<?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-default')); ?>
	</div>
</div>