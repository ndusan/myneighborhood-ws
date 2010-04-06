<!-- Content start -->
				
	<div class="contentArea pageContent">
		<div class="two-thirds">
			<h1 class="headline">
				Welcome to web-shop :: admin panel
			</h1>
			<div class="hr"></div>
			<div class="ribbon">
				<div class="wrapAround" style="background-position: 0pt -104px;"></div>
				<div class="tab" style="padding-top: 17px; color: #FFF;">Suggestions</div>
			</div>
			<?php echo $html->msg($_GET); ?>
			<div style="margin: 10px 30px 0px 0px;">
				<!-- Editable area -->
				<div style="border: 1px solid #CCC; padding: 10px;">
				<form id="form-product" name="form-product" action="<?php echo BASE_PATH.'admin'.DS.'suggestions'.DS.'submit'.DS;?>" method="post" >
				<table>
					<tbody>
						<tr>
							<td style="vertical-align: top;">
								Note: &nbsp;
							</td>
							<td>
								<textarea rows="" cols="" name="text" style="width: 480px; height: 200px;"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="button" value="Submit" style="border: 1px solid #CCC; padding: 2px 5px;"/>
							</td>
						</tr>
					</tbody>
				</table>
				</form>
				</div>				
			</div>
		</div>
		<div class="one-third">
			
						<?php include(VIEW_PATH.'admin'.DS.'_links.php');?>
					
			<div class="quote">
				<div class="quoteBox-1">
					<div class="quoteBox-2">
						<p>
						Welcome to admin panel. Here you are able to set all options regarding admin side of system.
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