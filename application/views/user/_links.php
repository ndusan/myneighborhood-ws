<h1 class="title" style="margin: 0px 0px 0px 10px;">Go to '<a href="<?php echo BASE_PATH.'admin'.DS;?>" >Your Admin panel</a>'</h1>
<div class="sideNavWrapper">
	<div class="sideNavBox-1">
		<div class="sideNavBox-2">
			<ul class="sideNav">
				<li class="page_item <?php if(@$page == 'index'):?>current_page_item<?php endif;?>">
					<a href="<?php echo BASE_PATH.'user'.DS;?>">Home page</a>
				</li>
				<li class="page_item <?php if(@$page == 'basket'):?>current_page_item<?php endif;?>">
					<a href="<?php echo BASE_PATH.'user'.DS.'basket'.DS;?>">My basket</a>
				</li>
				<?php if(isset($categories) && !empty($categories)):?>
				<?php foreach($categories as $category):?>
				<li class="page_item <?php if(@$page == $category['id']):?>current_page_item<?php endif;?>">
					<a href="<?php echo BASE_PATH.'user'.DS.'category'.DS.$category['id'].DS;?>"><?php echo $category['name'];?></a>
				</li>
				<?php endforeach;?>
				<?php endif;?>
			</ul>
		</div>
	</div>
</div>
