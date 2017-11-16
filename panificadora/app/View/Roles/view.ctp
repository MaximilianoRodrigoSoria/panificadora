<div class="container">
	<div class="roles view">
		<div class="panel panel-default">
			<div class="panel-heading">
	    		<h3 class="panel-title"><?php echo __('Rol #'),h($role['Role']['id']); ?></h3>
	 		</div>	
	 		<div class="panel-body">
				<h4><?php echo __('Nombre'); ?></h4>
				<p><?php echo h($role['Role']['nombre']); ?>&nbsp;</p>
			</div>
		</div>

		<?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-default')); ?>
	</div>
</div>
