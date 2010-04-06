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
				<form id="form-product" name="form-product" action="<?php echo BASE_PATH.'admin'.DS.'products'.DS.'submit'.DS.(isset($product['id']) ? $product['id'].DS : '');?>" method="post" enctype="multipart/form-data" >
				<table>
					<tbody>
						<tr style="height: 40px;">
							<td></td>
							<td>
								<h1><?php echo (isset($product['id']) ? "Edit" : "Add");?> your product</h1>
							</td>
						</tr>
						<tr style="height: 40px;">
							<th style="width: 150px; text-align: right; padding-right: 10px;">Product name:</th>
							<td><input type="text" name="product" value="<?php echo @$product['name'];?>" style="border: 1px solid #CCC; background-color: #E1E2E3;"/></td>
						</tr>
						<tr style="height: 40px;">
							<th style="width: 150px; text-align: right; padding-right: 10px;">Category type:</th>
							<td>
								<select name="category" style="border: 1px solid #CCC; width: 180px; background-color: #E1E2E3;">
									<option value="0">Select category</option>
									<?php foreach($categories as $category):
											if($category['id'] == @$product['category_id']) $sel = "selected='selected'";
											else $sel ="";
									?>
									<option <?php echo $sel;?> value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
									<?php endforeach;?>
								</select>
							</td>
						</tr>
						<tr style="height: 40px;">
							<th style="width: 150px; text-align: right; padding-right: 10px;">Price:</th>
							<td><input type="text" name="price" value="<?php echo @$product['price'];?>" style="border: 1px solid #CCC; background-color: #E1E2E3;"/> &euro; </td>
						</tr>
						<tr style="height: 40px;">
							<th style="width: 150px; text-align: right; padding-right: 10px;">Image:</th>
							<td>
								<input type="file" name="file" style="border: 1px solid #CCC; background-color: #E1E2E3;"/>
								<?php if(isset($product['image']) && !empty($product['image'])):?>
									<br/>
									[ <?php echo $product['image'];?> ]
								<?php endif;?>
							</td>
						</tr>
						<tr style="height: 40px;">
							<th style="width: 150px; text-align: right; padding-right: 10px; vertical-align: top;">Note:</th>
							<td>
								<textarea name="note" rows="" cols="" style="border: 1px solid #CCC; background-color: #E1E2E3;"><?php echo @$product['note'];?></textarea>
							</td>
						</tr>
						<tr style="height: 30px;">
							<td></td>
							<td><input type="submit" name="button" value="Submit" style="border: 1px solid #CCC; padding: 2px 5px;" /></td>
						</tr>
						
					</tbody>
				</table>
				</form>
				</div>
				<br/>
				<!-- view added -->
				<?php if(isset($products) && !empty($products)):?>
				<table width="100%" style="border: 1px solid #CCC;">
					<tbody>
						<tr style="height: 10px;">
							<td colspan="5"></td>
						</tr>
						<tr style="text-align: left;">
							<th style="padding-left: 5px;">Product name</th>
							<th>Category type</th>
							<th>Price</th>
							<th>Additional info</th>
							<th>Action</th>
						</tr>
						<?php 
							  $num = 0;
							  foreach($products as $product):?>
						<tr  <?php echo (++$num%2==1 ? "style='background-color: #E7E7E2;'" : "");?>>
							<td style="padding-left: 5px;"><?php echo $product['name'];?></td>
							<td><?php echo $product['category'];?></td>
							<td><?php echo $product['price'];?>&euro; </td>
							<td><a href="javascript:;" onclick="javascript:showHide(<?php echo $product['id'];?>);">read more</a></td>
							<td>
								<?php if($product['user_id']==$_SESSION['ws-user']['id']):?>
								<a href="<?php echo BASE_PATH.'admin'.DS.'products'.DS.$product['id'].DS; ?>" >edit</a>
								<a href="<?php echo BASE_PATH.'admin'.DS.'products'.DS.$product['id'].DS.'delete'.DS; ?>" onclick="javascript: confirmDelete('<?php echo $product['name'];?>');" >delete</a>
								<?php else:?>
								none
								<?php endif;?>
							</td>
						</tr>
						<tr>
							<td colspan="5" style="display: none; padding-left: 5px;" id="div-<?php echo $product['id'];?>">
								<br/>
								<table width="100%">
									<tr>
										<td style="vertical-align: top;">
											<strong>Added by:</strong> <?php echo $product['addedby'];?>
											<br/>
											<strong>Date:</strong> <?php echo $product['modif']; ?>	
										</td>
										<td>
										<?php  if(!empty($product['image'])): ?>
											<img style="width: 80px; height: 80px; border: 1px solid #CCC; padding: 1px;" src="<?php echo BASE_PATH.UPLOAD_PATH.$product['id']."-".$product['image'];?>" alt="" title="<?php echo $product['name'];?>" />
									  	<?php endif;?>
										</td>
									</tr>
									<tr>
										<td>
										<strong>Note:</strong> <?php echo $product['note']; ?>
										</td>
									</tr>
								</table>
								<br/>
							</td>
						</tr>
						<?php endforeach;?>
						<tr style="height: 20px;">
							<td colspan="5"></td>
						</tr>
					</tbody>
				</table>
				<?php endif;?>
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