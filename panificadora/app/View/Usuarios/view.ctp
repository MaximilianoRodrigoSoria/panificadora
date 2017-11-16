<div class="container">
	<div class="usuarios view">
		<div class="panel panel-default">
			<div class="panel-heading">
	    		<h3 class="panel-title"><?php echo __('Detalle de Usuario #'),h($usuario['Usuario']['id']); ?></h3>
	 		</div>	
	 		<div class="panel-body">
					<h4><?php echo __('Nombre de Usuario'); ?></h4>
					<p>
						<?php echo h($usuario['Usuario']['username']); ?>
						&nbsp;
					</p>
					<h4><?php echo __('Nombre'); ?></h4>
					<p>
						<?php echo h($usuario['Usuario']['nombre']); ?>
						&nbsp;
					</p>
					<h4><?php echo __('Apellido'); ?></h4>
					<p>
						<?php echo h($usuario['Usuario']['apellido']); ?>
						&nbsp;
					</p>
					<h4><?php echo __('Dni'); ?></h4>
					<p>
						<?php echo h($usuario['Usuario']['dni']); ?>
						&nbsp;
					</p>
					<h4><?php echo __('Telefono'); ?></h4>
					<p>
						<?php echo h($usuario['Usuario']['telefono']); ?>
						&nbsp;
					</p>
					<h4><?php echo __('Email'); ?></h4>
					<p>
						<?php echo h($usuario['Usuario']['email']); ?>
						&nbsp;
					</p>
			</div>
		</div>
		<?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-default')); ?>
	</div>
</div>