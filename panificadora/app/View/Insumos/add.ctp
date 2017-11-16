<div class="container">
<div class="formulas form">
<?php   echo $this->element('navtabs-insumo-alta'); ?>
	<form action="add" method="post" class="form-horizontal">
		<?php echo $this->Form->create('Insumo'); ?>
		<fieldset>
			<div class="form-group">
			<legend><?php echo __('Dar de Alta un Insumo'); ?></legend>
		<?php
			echo $this->Form->input('estado_id',array('class'=>'form-control'));
			echo $this->Form->input('nombre',array('class'=>'form-control'));
			echo $this->Form->input('stock',array('class'=>'form-control'));
			echo $this->Form->input('Formula',array('class'=>'form-control'));
		?>
			</div>
		</fieldset>
		<div class="form-group"><?php echo $this->Form->submit('Enviar',array('class' => 'btn btn-default', 'div' => false)); ?></div>
	</form>
</div> </div>
