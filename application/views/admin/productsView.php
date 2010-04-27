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
			<div class="ws-edit">
				<!-- Editable area -->
				
				<div class="display">
				<form enctype="multipart/form-data" name="form-info" id="form-info" action="<?php echo BASE_PATH.'admin'.DS.'products'.DS.'submit'.DS.(isset($product['id']) ? $product['id'].DS : "");?>" method="post" >
					<table cellpadding="0" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th colspan="2">
									<div class="common_title">
										<h3><?php echo (isset($product['id']) ? "Edit" : "Add");?> your product</h3>
										<div class="common_subtitile">
										Set information about the product
										</div>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
								Product name:
								</td>
								<td>
									<input type="text" name="product" value="<?php echo @$product['name'];?>"/>
								</td>
							</tr>
							<tr style="height: 40px;">
								<td>Category type:</td>
								<td>
								<select name="category" >
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
								<td>Price:</td>
								<td>
									<input type="text" name="price" value="<?php echo @$product['price'];?>" style="width: 50px;" /> &euro; 
								</td>
							</tr>
							<tr style="height: 40px;">
								<td>Image:</td>
								<td>
									<input type="file" name="file" />
									<?php if(isset($product['image']) && !empty($product['image'])):?>
										<br/>
										[ <?php echo $product['image'];?> ]
									<?php endif;?>
								</td>
							</tr>
							<tr style="height: 40px;">
								<td>Note:</td>
								<td>
									<textarea name="note" rows="" cols="" style="background-image: none;" ><?php echo @$product['note'];?></textarea>
								</td>
							</tr>
							</tbody>
							<tfoot>
								<tr style="height: 30px;">
									<td>
										<input type="submit" name="button" value="Submit" class="button" />
									</td>
								</tr>
								
							</tfoot>
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