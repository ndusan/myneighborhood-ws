<?php @include_once('_carousel.php');?>

<!-- Content start -->
				
	<div class="contentArea pageContent">
		<div class="two-thirds">
			<h1 class="headline">
				Welcome to web-shop :: user panel
			</h1>
			<div class="hr"></div>
			<div class="ribbon">
				<div class="wrapAround" style="background-position: 0pt -104px;"></div>
				<div class="tab" style="padding-top: 17px; color: #FFF;">Home page</div>
			</div>
			<?php echo $html->msg($_GET); ?>
			<div style="margin: 50px 0px 0px 0px;">
				<!-- Editable area -->
				Welcome to demo simulation of webshop made by Dusan Novakovic!
				<br/><br/>
				In this client (user) panel you can make orders by selecting a category from the main menu on the right-hand side and then adding
				certain quantity of the desired product offered in the list. All the chosen products are saved and can be reviewed in 'My basket'. 
				When the shopping list is completed you can make the final order by clicking on the button 'Order now'. All the orders made can be 
				viewed in 'Admin panel', section 'Orders'. 
				The main central carousel will always show several last added products that you had added.
				<br/><br/>
				Have fun using it!
				
				
			</div>
		</div>
		<div class="one-third">
			
						<?php include(VIEW_PATH.'user'.DS.'_links.php');?>
					
			<div class="quote">
				<div class="quoteBox-1">
					<div class="quoteBox-2">
						<p>
						Welcome to the client (user) panel. This is the place where you can set all the options regarding the client (user) side of the system.
						</p>
					</div>
				</div>
			</div>
			<div class="quoteAuthor">
				<p class="name">Dusan Novakovic</p>
				<p class="details">
				<br/>
				
				</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
					
<!-- Content end -->