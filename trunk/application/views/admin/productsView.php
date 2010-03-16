<!-- Content start -->
				
	<div class="contentArea pageContent">
		<div class="two-thirds">
			<h1 class="headline">
				Welcome to web-shop :: admin panel
			</h1>
			<div class="hr"></div>
			<div class="ribbon">
				<div class="wrapAround" style="background-position: 0pt -104px;"></div>
				<div class="tab" style="padding-top: 17px; color: #FFF;">Products</div>
			</div>
			<?php echo $html->msg($_GET); ?>
			<div style="margin: 10px 30px 0px 0px;">
				<!-- Editable area -->
				<div style="border: 1px solid #CCC; padding: 10px;">
				<table>
					<tbody>
						<tr style="height: 30px;">
							<th style="width: 150px; text-align: right; padding-right: 10px;">Product name:</th>
							<td><input type="text" name="product" value="" style="border: 1px solid #CCC;"/></td>
						</tr>
						<tr style="height: 30px;">
							<th style="width: 150px; text-align: right; padding-right: 10px;">Category type:</th>
							<td>
								<select name="category" style="border: 1px solid #CCC; width: 180px;">
									<option value=""></option>
								</select>
							</td>
						</tr>
						<tr style="height: 30px;">
							<th style="width: 150px; text-align: right; padding-right: 10px;">Price:</th>
							<td><input type="text" name="price" value="" style="border: 1px solid #CCC;"/></td>
						</tr>
						<tr style="height: 30px;">
							<th style="width: 150px; text-align: right; padding-right: 10px;">Image:</th>
							<td><input type="file" name="file" style="border: 1px solid #CCC;"/></td>
						</tr>
						<tr style="height: 30px;">
							<th style="width: 150px; text-align: right; padding-right: 10px; vertical-align: top;">Note:</th>
							<td>
								<textarea name="note" rows="" cols="" style="border: 1px solid #CCC;"></textarea>
							</td>
						</tr>
						<tr style="height: 30px;">
							<td></td>
							<td><input type="submit" name="button" value="Submit"style="border: 1px solid #CCC; padding: 2px 5px;" /></td>
						</tr>
					</tbody>
				</table>
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