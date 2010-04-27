<!-- Content start -->
				
	<div class="contentArea pageContent">
		<div class="two-thirds">
			<h1 class="headline">
				Welcome to web-shop :: admin panel
			</h1>
			<div class="hr"></div>
			<div class="ribbon">
				<div class="wrapAround" style="background-position: 0pt -104px;"></div>
				<div class="tab" style="padding-top: 17px; color: #FFF;">Made orders</div>
			</div>
			<?php echo $html->msg($_GET); ?>
			<div class="ws-edit">
				<!-- Editable area -->
				
				<?php if(isset($orders) && !empty($orders)):?>
				<br/><br/>
				<table width="100%" style="border: 1px solid #CCC;">
					<thead>
						<tr style="height: 10px;">
							<td colspan="5"></td>
						</tr>
						<tr style="text-align: left;">
							<th style="padding-left: 5px;">Date and time</th>
							<th>Product name</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Sum price</th>
						</tr>					
					</thead>
					<tbody>
						<?php 
							  $num = 0;
							  $sum = 0;
							  foreach($orders as $order):?>
						<tr  <?php echo (++$num%2==1 ? "style='background-color: #E7E7E2;'" : "");?>>
							<td style="padding-left: 5px;"><?php echo $order['modif'];?></td>
							<td><?php echo $order['name'];?></td>
							<td><?php echo $order['price'];?>&euro;</td>
							<td><?php echo $order['quantity'];?></td>
							<td><?php echo $order['price']*$order['quantity']; ?>&euro;</td>
							<?php $sum += $order['price']*$order['quantity']; ?>
						</tr>
						<?php endforeach;?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3"></td>
							<td>Total price: </td>
							<td>
								<b><?php echo $sum; ?>&euro;</b>
							</td>
						</tr>
					</tfoot>
				</table>
				<?php else:?>
				<br/>No orders at the moment.
				<?php endif;?>
			</div>
		</div>
		<div class="one-third">
			
						<?php include(VIEW_PATH.'admin'.DS.'_links.php');?>
					
			<div class="quote">
				<div class="quoteBox-1">
					<div class="quoteBox-2">
						<p>
						Welcome to admin panel. This is the place where you can set all the options regarding the admin side of the system.
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