<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=7" />
    	<title>Web-shop Control Panel</title>
	
		<!-- Include css file -->
		<?php echo $html->css('reset.min'); ?>
		<?php echo $html->css('menu.min'); ?>
		<?php echo $html->css('fancybox'); ?>
		<?php echo $html->css('tooltip.min'); ?>
		<?php echo $html->css('default'); ?>
		
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
		<div id="Wrapper">
			<div id="PageWrapper">
				<div class="pageTop"></div>
				<div id="Header">
					<div id="MenuWrapper">
						<div id="MainMenu">
							<div id="MmLeft"></div>
							<div id="MmBody">
								<div style="padding: 20px 0px 0px 10px; color: #FFF;">
									<div style="float: left;">Hello, Guest</div>
									<div style="float: right;"><?php echo date("Y-m-d");?></div>
									
								</div>
							</div>
							<div id="MmRight"></div>
						</div>
					</div>
					<div id="HeaderRight"></div>
					<div id="Logo"></div>
					<div class="clear"></div>
				</div>
				<div class="pageMain">
					<!-- This is a content that will be included on page inside of this layout -->
					<?php if(file_exists(VIEW_PATH.$this->_controller.DS.$this->_action.'View.php')) include (VIEW_PATH.$this->_controller.DS.$this->_action.'View.php'); ?>
				</div>
				<div id="Footer">
					<div id="FooterTop"></div>
					<div id="FooterContent">
						<div class="contentArea">
							<div class="one-third"></div>
							<div class="one-third"></div>
							<div class="one-third last"></div>
							<div class="clear"></div>
							<div class="full-page"></div>
							<div class="clear"></div>
						</div>
					</div>
					<div id="FooterBottom"></div>
				</div>
				<div id="Copyright">
					<p>All copyrights reserved 2010 © Dusan Novakovic </p>
				</div>
			</div>
		</div>
		
	</body>
</html>