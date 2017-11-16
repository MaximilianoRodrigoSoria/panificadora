<div class="container">
	<div class="usuarios form">
	<?php   echo $this->element('navtabs-usuario-editar');?>
	<?php echo $this->Form->create('Usuario'); ?>
		<fieldset>
			<legend><?php echo __('Modificar Usuario'); ?></legend>
			<div class="form-group">
		<?php
			echo $this->Form->input('id',array('class'=>'form-control'));
			echo $this->Form->input('estado_id',array('class'=>'form-control'));
			echo $this->Form->input('username',array('class'=>'form-control'));
			echo $this->Form->input('password',array('class'=>'form-control'));
			echo $this->Form->input('nombre',array('class'=>'form-control'));
			echo $this->Form->input('apellido',array('class'=>'form-control'));
			echo $this->Form->input('dni',array('class'=>'form-control'));
			echo $this->Form->input('telefono',array('class'=>'form-control'));
			echo $this->Form->input('email',array('class'=>'form-control'));
		?>
			</div>
		</fieldset>
	<div class="form-group"><?php echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?></div>
	</div>
</div>
