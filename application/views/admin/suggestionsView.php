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
			<div class="ws-edit">
				<!-- Editable area -->
				
				<div class="display">
				<form id="form-product" name="form-product" action="<?php echo BASE_PATH.'admin'.DS.'suggestions'.DS.'submit'.DS;?>" method="post" >
					<table cellpadding="0" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th colspan="2">
									<div class="common_title">
										<h3>Write down</h3>
										<div class="common_subtitile">
											We would like to hear your oppinion about this application
										</div>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<textarea rows="" cols="" name="text" style="background-image: none; width: 480px; height: 200px;"></textarea>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="2">
									<input type="submit" name="button" value="Submit" style="border: 1px solid #CCC; padding: 2px 5px;"/>
								</td>
							</tr>
						</tfoot>
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