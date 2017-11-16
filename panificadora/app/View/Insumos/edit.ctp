<div class="container">
	<div class="insumos form">
	<?php   echo $this->element('navtabs-insumo-editar');?>
	<?php echo $this->Form->create('Insumo'); ?>
		<fieldset>
			<legend><?php echo __('Modificar Insumo'); ?></legend>
			<div class="form-group">
		<?php
			echo $this->Form->input('id',array('class'=>'form-control'));
			echo $this->Form->input('estado_id',array('class'=>'form-control'));
			echo $this->Form->input('nombre',array('class'=>'form-control'));
			echo $this->Form->input('stock',array('class'=>'form-control'));
			echo $this->Form->input('Formula',array('class'=>'form-control'));
		?>
			</div>
		</fieldset>
		<div class="form-group"><?php echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?></div>
	</div>
</div>
