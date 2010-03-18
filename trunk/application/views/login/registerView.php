<!-- Content start -->
				
	<div class="contentArea pageContent">
		<div class="two-thirds">
			<h1 class="headline">
				Welcome to web-shop panel
			</h1>
			<div class="hr"></div>
			<div class="ribbon">
				<div class="wrapAround" style="background-position: 0pt -104px;"></div>
				<div class="tab" style="padding-top: 17px; color: #FFF;">Fill in all fields</div>
			</div>
			<?php echo $html->msg($_GET); ?>
			<div style="margin: 50px 0px 0px 180px;">
				<form id="form-login" name="form-login" action="<?php echo BASE_PATH.'register'.DS.'submit'.DS;?>" method="post">
					<fieldset>
						<div>
							<label>Name:</label>
							<br/>
							<input type="text" class="textInput" value="" name="firstname"/> 
						</div>
						<div>
							<label>Surname:</label>
							<br/>
							<input type="text" class="textInput" value="" name="lastname"/> 
						</div>
						<div>
							<label>Email:</label>
							<br/>
							<input type="text" class="textInput" value="" name="email"/> 
						</div>
						<div>
							<label>Password:</label>
							<br/>
							<input type="password" class="textInput" value="" name="password"/>
						</div>
						<div style="margin-left: 68px;">
							<button class="btn" type="submit">
								<span style="margin-top: -1px;">
									Register
								</span>
							</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		<div class="one-third">
			<h1 class="title" style="margin: 0px 0px 0px 10px;">Go to...</h1>
			<div class="sideNavWrapper">
				<div class="sideNavBox-1">
					<div class="sideNavBox-2">
						<ul class="sideNav">
							<li class="page_item">
								<a href="<?php echo BASE_PATH;?>">Login page</a>
							</li>
							<li class="page_item">
								<a href="<?php echo BASE_PATH.'forgot'.DS;?>">Forgot password</a>
							</li>
							<li class="page_item current_page_item">
								<a href="<?php echo BASE_PATH.'register'.DS;?>">Register for free</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="quote">
				<div class="quoteBox-1">
					<div class="quoteBox-2">
						<p>
						Register and check it out for free! Trial period is five days. Have fun...
						</p>
					</div>
				</div>
			</div>
			<div class="quoteAuthor">
				<p class="name">Dusan Novakovic</p>
				<p class="details">
				<br/>
				Enter the email and password which you have received to the e-mail address stated in the registration form. The application can be tested within 5 days after the first login to the system. Afterwards, if you are still interested in testing the application, it is necessary to contact the administrator in order to extend the trial period.
				</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
					
<!-- Content end -->