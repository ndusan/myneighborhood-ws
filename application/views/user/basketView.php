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
				<div class="tab" style="padding-top: 17px; color: #FFF;">My basket</div>
			</div>
			<?php echo $html->msg($_GET); ?>
			
				<div class="display">
				<?php if(isset($products) && !empty($products)):?>
					<form name="fom-basket" id="form-basket" action="<?php echo BASE_PATH.'user'.DS.'basket'.DS.'submit'.DS;?>" method="post">
					<table cellpadding="0" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th colspan="5">
									<div class="common_title">
										<h3>Orders</h3>
										<div class="common_subtitile">
											Those are products you selected till now
										</div>
									</div>
								</th>
							</tr>
							<tr style="text-align: left;">
								<th>Product name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Sum price</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
									$total = 0;
									$bg = 0;
									foreach($products as $product):?>
							<tr <?php echo (++$bg%2==0 ? "style='background-color: #E7E7E2;'" : "");?>>
								<td style=" width: 100px; padding-left: 5px;">
									<b><?php echo $product['name'];?></b>
								</td>
								<td >
									<?php echo $product['price'];?> € 
								</td>
								<td>
									<?php echo $product['quantity'];?>
								</td>
								<td>
									<?php echo $product['price'];?>€ x <?php echo $product['quantity'];?> = <?php echo $product['price']*$product['quantity'];?>€
									<?php $total += $product['price']*$product['quantity'];?> 
								</td>
								<td>
									<a href="<?php echo BASE_PATH.'user'.DS.'basket'.DS.$product['id'].DS.'remove'.DS;?>">remove</a>
									<input type="hidden" name="quantity[<?php echo $product['id'];?>]" value="<?php echo $product['quantity'];?>" />
								</td>
							</tr>	
							<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="3">
								</td>
								<td>Total: <b><?php echo $total;?>€</b></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="5">
									<input type="submit" name="button" value="Order now" style="border: 1px solid #CCC; padding: 2px 5px;"/>
								</td>
							</tr>
						</tfoot>
					</table>
					</form>
				<?php else:?>
				Your basket is empty
				<?php endif;?>
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