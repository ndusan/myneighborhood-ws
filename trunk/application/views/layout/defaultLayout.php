<html>
	<head>
	
	<!-- Include css file -->
	<?php echo $html->css('test'); ?>
	
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