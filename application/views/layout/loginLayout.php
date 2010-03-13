<html>
	<head>
	
	<!-- Include css file -->
	<?php echo $html->css('reset.min'); ?>
	<?php echo $html->css('menu.min'); ?>
	<?php echo $html->css('fancybox'); ?>
	<?php echo $html->css('tooltip.min'); ?>
	<?php echo $html->css('style-default'); ?>
	
	<!-- Include jQuery -->
	<?php echo $html->js('jquery-1.4.2.min'); ?>
	
	<?php 
	//Custom calls for css
	echo $html->customCss($this->_css);
	
	//Custom calls for js
	echo $html->customJs($this->_js);
	?>
	</head>
	
	<body>
	
		<!-- This is a content that will be included on page inside of this layout -->
		<?php if(file_exists(VIEW_PATH.$this->_controller.DS.$this->_action.'View.php')) include (VIEW_PATH.$this->_controller.DS.$this->_action.'View.php'); ?>

	</body>
</html>