<div class="container">
<div class="productos form">
	<?php   echo $this->element('navtabs-producto-alta'); ?>
	<form action="add" method="post" class="form-horizontal">
		<?php echo $this->Form->create('Producto'); ?>
		<fieldset>
		<div class="form-group">
			<legend><?php echo __('Add Producto'); ?></legend>
		<?php
			echo $this->Form->input('estado_id',array('class'=>'form-control'));
			echo $this->Form->input('nombre',array('class'=>'form-control'));
		?>
		</div>
		</fieldset>
		<div class="form-group"><?php echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?></div>

	</form>
</div> </div>
