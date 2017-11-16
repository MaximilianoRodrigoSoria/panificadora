<div class="container">
	<div class="formulas form">
	<?php   echo $this->element('navtabs-formula-editar');?>
	<?php echo $this->Form->create('Formula'); ?>
		<fieldset>
			<legend><?php echo __('Modificar Formula'); ?></legend>
			<div class="form-group">
		<?php
			echo $this->Form->input('id',array('class'=>'form-control'));
			echo $this->Form->input('estado_id',array('class'=>'form-control'));
			echo $this->Form->input('nombre',array('class'=>'form-control'));
			echo $this->Form->input('descripcion',array('class'=>'form-control'));
			echo $this->Form->input('Insumo',array('class'=>'form-control'));
		?>
			</div>
		</fieldset>
		<div class="form-group"><?php echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?></div>
	</div>
</div>
