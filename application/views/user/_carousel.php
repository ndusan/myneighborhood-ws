<script type="text/javascript">
		
		var mycarousel_itemList = [
		    <?php foreach($carousel as $c):?>
		    {url: '/<?php echo UPLOAD_PATH.$c['id'].'-'.$c['image'];?>', title: '<?php echo $c['name']?>', price: '<?php echo $c['price']?>', id: '<?php echo $c['id'];?>', cat_id: '<?php echo $c['category'];?>'},
			<?php endforeach; ?>
		];
		
		function mycarousel_itemVisibleInCallback(carousel, item, i, state, evt){
		    // The index() method calculates the index from a
		    // given index who is out of the actual item range.
		    var idx = carousel.index(i, mycarousel_itemList.length);
		    carousel.add(i, mycarousel_getItemHTML(mycarousel_itemList[idx - 1]));
		};
		
		function mycarousel_itemVisibleOutCallback(carousel, item, i, state, evt){
		    carousel.remove(i);
		};
		
		/**
		 * Item html creation helper.
		 */
		function mycarousel_getItemHTML(item){
		    return '<a href="/user/category/'+item.cat_id+'/'+item.id+'/"><img class="mybasket" src="' + item.url + '" alt="' + item.title + '" style="width:190px; height:140px;" /><br/><span><b>'+item.title+'</b></span><br/><span>Price: '+item.price+'€ </span></a>';
		};
		
		jQuery(document).ready(function() {
		    jQuery('#mycarousel').jcarousel({
		        wrap: 'circular',
		        itemVisibleInCallback: {onBeforeAnimation: mycarousel_itemVisibleInCallback},
		        itemVisibleOutCallback: {onAfterAnimation: mycarousel_itemVisibleOutCallback}
		    });
		});
</script>

<div style="clear: both; padding: 10px 0px;"></div>
<div class="carousel">
	<ul id="mycarousel" class="jcarousel-skin-ie7">
	    <!-- The content will be dynamically loaded in here -->
	</ul>
</div>
<div style="clear: both;"></div>