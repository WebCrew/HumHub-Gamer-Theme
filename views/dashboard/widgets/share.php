<div class="slider">

	<!-- STYLE -->

	<link href="<?php echo $this->theme->getBaseUrl() . '/css/orbit.css'; ?>" rel="stylesheet">
	
	<!-- BLOCK -->

	<div class="panel panel-default members" id="share-panel">
		<div class="panel-body">
		
			<!-- 
				IMAGES 
				Imgaes folder: ../TodGmbH/img/orbit/banner
				Images format: 346x346px jpg
			-->
			
			<div id="featured">
			    <a href="mailto:andreas_holzer@mail.de" target="_blank">
				<img src="<?php echo $this->theme->getBaseUrl() . '/img/orbit/banner/1.jpg'; ?>" rel="caption-1" /></a>
				<a href="http://www.drakensang.com/?aid=1695&invID=xbegegiechbxcifbaggfgxbagaghbigxeibxbgjfxbab&force_instance=481&lang=de" target="_blank">
				<img src="<?php echo $this->theme->getBaseUrl() . '/img/orbit/banner/2.jpg'; ?>" rel="caption-2" /></a>
                <a href="http://web-crew.org" target="_blank">
				<img src="<?php echo $this->theme->getBaseUrl() . '/img/orbit/banner/3.jpg'; ?>" rel="caption-3" /></a>
				<img src="<?php echo $this->theme->getBaseUrl() . '/img/orbit/banner/4.jpg'; ?>"  rel="caption-4" />
			</div>
			
			<!-- CAPTIONS -->

			<span class="orbit-caption" id="caption-1">Advertise with us! - Click on the banner.</span>
			<span class="orbit-caption" id="caption-2">Play Drakensang Online! - Click on the banner.</span>
			<span class="orbit-caption" id="caption-3">The Webdesign Manufactory. - Click on the banner.</span>
			<span class="orbit-caption" id="caption-4">Invite Your friends to us.</span>
			
		</div>
	</div>

	<!-- JAVASCRIPT -->
		
	<script src="<?php echo $this->theme->getBaseUrl() . '/js/jquery.orbit.min.js'; ?>"></script>	
	<script type="text/javascript">
		$(window).load(function() {
			$('#featured').orbit({
				'animation': 'fade',		        //fade, horizontal-slide, vertical-slide
				'animationSpeed': 700,				//how fast animtions are
				'advanceSpeed': 5000,				//if auto advance is enabled, time between transitions 
				'startClockOnMouseOut': true,		//if clock should start on MouseOut
				'startClockOnMouseOutAfter': 5000,	//how long after mouseout timer should start again
				'directionalNav': false,			//manual advancing directional navs
				'captions': false,					//do you want captions?
				'captionAnimationSpeed': 700,		//if so how quickly should they animate in
				'timer': false,						//true or false to have the timer
				'bullets': false					//true or false to activate the bullet navigation
			});
		});
	</script>
	
</div>