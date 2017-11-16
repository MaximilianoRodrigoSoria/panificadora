<div class="container">
<div class="usuarios form">
	<?php   echo $this->element('navtabs-cliente-alta'); ?>
	<form action="add" method="post" class="form-horizontal">
		<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Dar de Alta un Cliente'); ?></legend>
		<div class="form-group">
	<?php
		echo $this->Form->input('estado_id',array('class'=>'form-control'));
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
