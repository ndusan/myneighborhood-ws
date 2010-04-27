<!-- Content start -->
				
	<div class="contentArea pageContent">
		<div class="two-thirds">
			<h1 class="headline">
				Welcome to web-shop :: admin panel
			</h1>
			<div class="hr"></div>
			<div class="ribbon">
				<div class="wrapAround" style="background-position: 0pt -104px;"></div>
				<div class="tab" style="padding-top: 17px; color: #FFF;">Your settings</div>
			</div>
			<?php echo $html->msg($_GET); ?>
			<div class="ws-edit">
				<!-- Editable area -->
				
				<div class="display">
				<form name="form-info" id="form-info" action="<?php echo BASE_PATH.'admin'.DS.'settings'.DS.'submit'.DS;?>" method="post" >
					<table cellpadding="0" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th colspan="2">
									<div class="common_title">
										<h3>Personal info</h3>
										<div class="common_subtitile">
											Set your personal info here
										</div>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label>Firstname</label>
								</td>
								<td><input type="text" name="firstname" value="<?php echo $info['firstname']; ?>" /></td>
							</tr>
							<tr>
								<td>
									<label>Lastname</label>
								</td>
								<td><input type="text" name="lastname" value="<?php echo $info['lastname']; ?>" /></td>
							</tr>
							<tr>
								<td>
									<label>Address</label>
								</td>
								<td><input type="text" name="address" value="<?php echo @$info['address']; ?>" /></td>
							</tr>
							<tr>
								<td>
									<label>Post code</label>
								</td>
								<td><input type="text" name="code" value="<?php echo @$info['code']; ?>" /></td>
							</tr>
							<tr>
								<td>
									<label>City</label>
								</td>
								<td><input type="text" name="city" value="<?php echo @$info['city']; ?>" /></td>
							</tr>
							<tr>
								<td>
									<label>Email</label>
								</td>
								<td><b><?php echo $info['email']; ?></b></td>
							</tr>
							<tr>
								<td>
									<label>New password</label>
								</td>
								<td><input type="text" name="password" value="" /></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="2">
									<input type="submit" name="button" value="Edit my info" class="button" />
								</td>
							</tr>
						</tfoot>
					</table>
			</form>
					<br style="height: 20px;" />
					<table cellpadding="0" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th colspan="2">
									<div class="common_title">
										<h3>Orders settings</h3>
										<div class="common_subtitile">
											Information about the delivery 
										</div>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label>Made orders will be stored in:</label>
								</td>
								<td>- system on page <b>"Made orders"</b></td>
							</tr>
							<tr>
								<td></td>
								<td>- your email entered on registration page <b>[<?php echo $info['email']; ?>]</b></td>
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