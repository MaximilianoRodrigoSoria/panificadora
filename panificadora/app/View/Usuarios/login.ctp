 <div class="container">
	<div class="jumbotron">
  		<div class="container">
    		<h2>Panificados del Sur</h2><br>
        <?php echo $this->Form->create('Usuario');?>
    		<h4>Ingrese su usuario y contrase&nacute;a para acceder al sistema</h4><br>
    		<div class="box">
    			<form class="form-horizontal" method="post">
    			<div class="form-group">
          <?php echo $this->Form->input('username',array('label'=> false,'class'=> 'form-control','placeholder'=>'usuario'));?>
          </div>
	    		<div class="form-group">
          <?php echo $this->Form->input('password',array('label'=> false,'class'=> 'form-control','placeholder'=>'contraseña'));?></div>
          <?php echo $this->Form->submit('Acceder',array('class' => 'btn btn-primary', 'div' => false)); ?>
	    		</form>
    		</div>
  		</div></div>
</div>