<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<link rel="shortcut icon" href="<?php echo IMAGE_PATH.'favicon.gif';?>"/>
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
		
		<!-- Default js file -->
		<?php echo $html->js('default'); ?>

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
					<div id="Logo">
						<a href="<?php echo BASE_PATH;?>" title="" ></a>
					</div>
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
							<div class="one-third">
								<div class="widget widget_text">
									<h3>Tehnology</h3>
									<p>
										The application has been built using PHP programming language and JavaScript, in the combination with MySQL data base. This makes the application reliable and highly secured from a possible unauthorized system breach or unwanted data loss.
									</p>
								</div>
							</div>
							<div class="one-third">
								<div class="widget widget_text">
									<h3>Links...</h3>
									<table style="width: 270px;">
										<tbody>
											<tr>
												<td>
													<a href="http://www.ubuntu.com">	
														<img src="<?php echo IMAGE_PATH.'linux.png';?>" title="linux" alt="" />
													</a>
												</td>
												<td>
													<a href="http://www.apache.org/">	
														<img src="<?php echo IMAGE_PATH.'apache.png';?>" title="apache" alt="" />
													</a>
												</td>
												<td>
													<a href="htp://php.net">	
														<img src="<?php echo IMAGE_PATH.'php.png';?>" title="php" alt="" />
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="http://mysql.com">	
														<img src="<?php echo IMAGE_PATH.'mysql.png';?>" title="mysql" alt="" />
													</a>
												</td>
												<td>
													<a href="http://jquery.com">	
														<img src="<?php echo IMAGE_PATH.'jquery.png';?>" title="jquery" alt="" />
													</a>
												</td>
												<td>
												
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="one-third last">
								<div class="widget widget_text">
									<h3>Check out for more...</h3>
									<p><a href="#">- Image manipulation</a></p>
									<p><a href="#">- How to make your own API</a></p>
								</div>
							</div>
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