<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>
	Panificados del Sur - Inicio
	</title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css(array('estilos','bootstrap-theme.min','bootstrap.min','footer', 'cake.generic'));
		echo $this->Html->css(array('estilos','bootstrap','font-awesome.min','bootstrap-theme','footer','mio'));


		echo $this->Html->script(array('jquery-2.2.4','bootstrap','script'));


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
   
		

  <div id="container">  

	<?php if(isset($current_user)): ?>
		
    <?php endif; ?>

	<?php   echo $this->element('menu');?>
	<div id="content">
      <?php echo $this->fetch('content'); ?>
     </div><br>
     <div id="mensaje">
      <?php echo $this->Session->flash(); ?>			
	</div>	
	<div id="footer">
	  <?php   echo $this->element('footer');?>
	</div>

</body>
</html>
