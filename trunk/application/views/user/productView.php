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
				<div class="tab" style="padding-top: 17px; color: #FFF;">Selected category</div>
			</div>
			<input type="hidden" name="url" id="url" value="<?php echo BASE_PATH; ?>" />
			<?php echo $html->msg($_GET); ?>
			<div class="ws-edit">
				<!-- Editable area -->
				<div class="display">
				<?php switch(@$more){
					//Product
					case 'product':?>
					<table cellpadding="0" cellspacing="0">
						<tr>
							<td style=" vertical-align: top; width: 100px;">
								<!-- Image -->
								<?php if(!empty($product['image'])):?>
								<img  src="/<?php echo UPLOAD_PATH.$product['id'].'-'.$product['image'];?>" title="<?php echo $product['name'];?>" style="width: 100px; height: 100px; border: 1px solid #ccc; padding: 2px;"/>
								<?php else:?>
								<img  src="/<?php echo UPLOAD_PATH.'default.jpg';?>" title="" style="width: 100px; height: 100px; border: 1px solid #ccc; padding: 2px;"/>
								<?php endif;?>
							</td>
							<td style=" vertical-align: top;" >
								<!-- confirm -->
								<div class="show" id="show-<?php echo $product['id'];?>" style="display: none;">Added in basket</div>
								<!-- Description and price -->
								<b><?php echo $product['name'];?></b>
								<br/>
								Price: <?php echo $product['price'];?> € 
								<br/>
								<?php if(!empty($product['note'])):?>
								Description: <?php echo $product['note'];?>
								<?php endif;?> 
							</td>
							<td style="width: 80px; vertical-align: bottom;">
								<!-- Order -->
								<input type="text" style="width: 20px;" id="value-<?php echo $product['id'];?>" name="" value="0" maxlength="2" />
								<input type="button" name="" class="add" id="add-<?php echo $product['id'];?>" value="Add" style="width: 50px;" />
							</td>
						</tr>
					</table>
				<?php 
					break;
					default:?>
					<?php if(isset($products)):?>
					<table cellpadding="0" cellspacing="0">
						<?php foreach($products as $product):?>
						<tr>
							<td style=" vertical-align: top; width: 100px;">
								<!-- Image -->
								<a href="<?php echo BASE_PATH.'user'.DS.'category'.DS.$category.DS.$product['id'].DS;?>">
									<?php if(!empty($product['image'])):?>
									<img  src="/<?php echo UPLOAD_PATH.$product['id'].'-'.$product['image'];?>" title="<?php echo $product['name'];?>" style="width: 100px; height: 100px; border: 1px solid #ccc; padding: 2px;"/>
									<?php else:?>
									<img  src="/<?php echo UPLOAD_PATH.'default.jpg';?>" title="" style="width: 100px; height: 100px; border: 1px solid #ccc; padding: 2px;"/>
									<?php endif;?>
								</a>
							</td>
							<td style=" vertical-align: top;" >
								<!-- confirm -->
								<div class="show" id="show-<?php echo $product['id'];?>" style="display: none;">Added in basket</div>
								<!-- Description and price -->
								<b><?php echo $product['name'];?></b>
								<br/>
								Price: <?php echo $product['price'];?> € 
								<br/>
								<?php if(!empty($product['note'])):?>
								Description: <?php echo $product['note'];?>
								<?php endif;?> 
							</td>
							<td style="width: 80px; vertical-align: bottom;">
								<!-- Order -->
								<input type="text" style="width: 20px;" id="value-<?php echo $product['id'];?>" name="" value="0" maxlength="2" />
								<input type="button" name="" class="add" id="add-<?php echo $product['id'];?>" value="Add" style="width: 50px;" />
							</td>
						</tr>	
						<?php endforeach;?>	
					</table>				
					<?php endif;?>
				<?php 
				}
				?>			
				</div>
			</div>
			
		</div>
		<div class="one-third">
			
						<?php include(VIEW_PATH.'user'.DS.'_links.php');?>
					
			<div class="quote">
				<div class="quoteBox-1">
					<div class="quoteBox-2">
						<p>
						Welcome to client(user) panel. Here you are able to set all options regarding client(user) side of system.
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