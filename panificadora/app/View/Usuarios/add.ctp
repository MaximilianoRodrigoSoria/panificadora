<div class="container">
<div class="usuarios form">
	<?php   echo $this->element('navtabs-usuario-alta'); ?>
	<form action="add" method="post" class="form-horizontal">
		<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<div class="form-group">
		<legend><?php echo __('Dar de Alta Usuario'); ?></legend>
	<?php
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
	</form>
</div> </div>
