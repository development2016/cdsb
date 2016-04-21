
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<?php foreach ($models as $key => $value) { ?>
			<div class="item active">
				
					<img src="<?php echo $value['path']; ?>" alt="" />
					<div class="container">
						<div class="carousel-caption">
							<h1>Bootstrap Carousel Fullscreen</h1>
							<p class="lead">Just turns the Twitter Bootstrap Carousel in fullscreen mode, and scale to fit the screen resolution</p>
						</div>
					</div>
				

			</div>
<?php } ?>

		</div>

	</div>