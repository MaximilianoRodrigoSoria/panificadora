<div class="container">
<div class="roles form">
<br>
	<?php   echo $this->element('navtabs-role-alta'); ?>
	<form action="add" method="post" class="form-horizontal">
		<?php echo $this->Form->create('Role'); ?>
	
	<fieldset>
		<legend><?php echo __('Dar de Alta un Rol'); ?></legend>
		<div class="form-group">
	<?php
		echo $this->Form->input('estado_id',array('class'=>'form-control'));
		echo $this->Form->input('nombre', array('class'=>'form-control'));
	?>
		</div>
	</fieldset>
	<div class="form-group"><?php echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?></div>
	</form>

</div> </div>
