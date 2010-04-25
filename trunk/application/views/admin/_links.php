<h1 class="title" style="margin: 0px 0px 0px 10px;">Go to '<a href="<?php echo BASE_PATH.'user'.DS;?>" >Your Webshop</a>'</h1>
<div class="sideNavWrapper">
	<div class="sideNavBox-1">
		<div class="sideNavBox-2">
			<ul class="sideNav">
				<li class="page_item <?php if(@$page == 'index'):?>current_page_item<?php endif;?>">
					<a href="<?php echo BASE_PATH.'admin'.DS;?>">Home page</a>
				</li>
				<li class="page_item <?php if(@$page == 'products'):?>current_page_item<?php endif;?>">
					<a href="<?php echo BASE_PATH.'admin'.DS.'products'.DS;?>">Products</a>
				</li>
				<li class="page_item <?php if(@$page == 'orders'):?>current_page_item<?php endif;?>">
					<a href="<?php echo BASE_PATH.'admin'.DS.'orders'.DS;?>">Made orders</a>
				</li>
				<li class="page_item <?php if(@$page == 'settings'):?>current_page_item<?php endif;?>">
					<a href="<?php echo BASE_PATH.'admin'.DS.'settings'.DS;?>">Your settings</a>
				</li>
				<li class="page_item <?php if(@$page == 'suggestions'):?>current_page_item<?php endif;?>">
					<a href="<?php echo BASE_PATH.'admin'.DS.'suggestions'.DS;?>">Suggestions</a>
				</li>
			</ul>
		</div>
	</div>
</div>
