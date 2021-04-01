<style>
	.modal-backdrop{
		position: relative !important;
	}
</style>
<div class="slider_parallax_wr">
	<div class="slider_wrap">
		<div class="nivoSlider">


			<a href="products/hills-bros-cappuccino-sugar-free-french-vanilla-12-ounce.html">
				<img
					src="<?= base_url(); ?>/assets/web/cdn.shopify.com/s/files/1/0849/4852/t/3/assets/slide1_image90c4.jpg?v=17939284678830574277"
					alt="" title="#htmlcaption-1"/>
			</a>


			<a href="products/kahlua-gourmet-ground-coffee-french-vanilla-12-ounce.html">
				<img
					src="<?= base_url(); ?>/assets/web/cdn.shopify.com/s/files/1/0849/4852/t/3/assets/slide2_imageaa1a.jpg?v=2939894171068440364"
					alt="" title="#htmlcaption-2"/>
			</a>


			<a href="products/keurig-caribou-coffee-caribou-blend-k-cup-packs-72-count.html">
				<img
					src="<?= base_url(); ?>/assets/web/cdn.shopify.com/s/files/1/0849/4852/t/3/assets/slide3_imagef0bf.jpg?v=6146782062869395834"
					alt="" title="#htmlcaption-3"/>
			</a>


		</div>
	</div>
</div>


<div class="caption_hidden">


	<div id="htmlcaption-1">
		<a href="products/hills-bros-cappuccino-sugar-free-french-vanilla-12-ounce.html">
			<div class="nivo_wrapper">
				<div class="container">
					<h3>Fresh</h3>
					<p>Mes cuml dia sed inenias ingerto lot aliiqt dolore ipsum commete.</p>
					<span class="nivo__btn btn"><i class="fa fa-shopping-cart"></i></span>
				</div>
			</div>
		</a>
	</div>


	<div id="htmlcaption-2">
		<a href="products/kahlua-gourmet-ground-coffee-french-vanilla-12-ounce.html">
			<div class="nivo_wrapper">
				<div class="container">
					<h3>HERIDIONI</h3>
					<p>Mes cuml dia sed inenias ingerto lot aliiqt dolore ipsum commete.</p>
					<span class="nivo__btn btn"><i class="fa fa-shopping-cart"></i></span>
				</div>
			</div>
		</a>
	</div>


	<div id="htmlcaption-3">
		<a href="products/keurig-caribou-coffee-caribou-blend-k-cup-packs-72-count.html">
			<div class="nivo_wrapper">
				<div class="container">
					<h3>Delicious</h3>
					<p>Mes cuml dia sed inenias ingerto lot aliiqt dolore ipsum commete.</p>
					<span class="nivo__btn btn"><i class="fa fa-shopping-cart"></i></span>
				</div>
			</div>
		</a>
	</div>


	<div id="htmlcaption-4">

		<div class="nivo_wrapper">
			<div class="container">


				<span class="nivo__btn btn"><i class="fa fa-shopping-cart"></i></span>
			</div>
		</div>

	</div>


	<div id="htmlcaption-5">

		<div class="nivo_wrapper">
			<div class="container">


				<span class="nivo__btn btn"><i class="fa fa-shopping-cart"></i></span>
			</div>
		</div>

	</div>


</div>


<script type="text/javascript">
	$(document).ready(function () {
		$('.nivoSlider').nivoSlider({
			effect: 'fade',
			animSpeed: 500,
			pauseTime: 7000,
			startSlide: 0,
			pauseOnHover: true,
			directionNav: false,
			directionNavHide: false,
			controlNav: true
		});
	});
</script>


<script type="text/javascript">

	(function () {
		var parallaxVisible = false;

		function parallaxScroll() {
			var scrolled = $(window).scrollTop();
			$('.slider_parallax_wr .slider_wrap').css('top', (-130 + (scrolled * .3)) + 'px');
			$('.slider_parallax_wr .nivo-controlNav').css('top', (884 - (scrolled * .3)) + 'px');
			$('.slider_parallax_wr .nivo-caption').css('top', (130 - (scrolled * .3)) + 'px');
		};

		function resetToDefaults() {
			$('.slider_parallax_wr .slider_wrap').css('top', '');
			$('.slider_parallax_wr .nivo-directionNav').css('top', '');
			$('.slider_parallax_wr .nivo-caption').css('top', '');
		};


		function showParallax() {
			parallaxScroll();
			$(window).on('scroll', parallaxScroll);
			parallaxVisible = true;
		};

		function hideParallax() {
			$(window).off('scroll', parallaxScroll);
			parallaxVisible = false;
			resetToDefaults();
		};

		$(window).on("load resize", function () {
			if ($(this).width() >= 1200 && !parallaxVisible) {
				showParallax();
			}

			if ($(this).width() < 1200 && parallaxVisible) {
				hideParallax();
			}
		});
	})();

</script>


<!-- CUSTOM TOP BLOCK # 1 -->
<div class="custom_top_1 container ">
	<div class="custom_top_1__ins wow">

		<h3>Start The Day

			<span>With Great Taste</span>

		</h3>

		<h4>Mes cuml dia sed ineniasinge dolor ipsum commete ipsum comnetus Mes ineniasinge dolor.</h4>
		<p>Dovitae diam purus luctus facilisis. Nullam at ipsum eros tris tique ultrice. Duis quis imperdie
			dolore est Sed lobortis ultrices aliquet. Praesent tellus sapien, imperdiet nec. Dovitae dia purus
			luctus facilisis. Nullam at ipsum eros tris tique. Duis quis imperdie dolore est. Sed lobortis
			ultrices aliquet. Praesent tellus sapien, imperdiet nec consectetur.</p>
	</div>
</div>


<!-- SHOWCASE CUSTOM BLOCKS -->
<div id="showcase">
	<div class="container">
		<div class="row">


			<div class="wow col-sm-4 col-xs-4 custom_showcase custom_showcase__1">
				<a href="products/kicking-horse-coffee-three-sisters-medium-whole-bean-coffee-2-2-pound-pouch.html">
							<span class="showcase_img_wr"><img
									src="<?= base_url(); ?>/assets/web/cdn.shopify.com/s/files/1/0849/4852/t/3/assets/custom_showcase1_imgadf1.jpg?v=13773551431648647157"
									alt="Elite Coffee Get up to 30% off"/></span>
					<div class="ins">
						<h3>Elite Coffee</h3>
						<h4>Get up to 30% off</h4>
					</div>
					<span class="btn"><i class="fa fa-shopping-cart"></i></span>
				</a>
			</div>


			<div class="wow col-sm-4 col-xs-4 custom_showcase custom_showcase__2">
				<a href="products/melitta-fair-trade-organic-coffee-tranquility-decaffeinated-ground-medium-roast-10-ounce.html">
							<span class="showcase_img_wr"><img
									src="<?= base_url(); ?>/assets/web/cdn.shopify.com/s/files/1/0849/4852/t/3/assets/custom_showcase2_imgcebc.jpg?v=16799248444861003563"
									alt="Espresso Get up to 30% off"/></span>
					<div class="ins">
						<h3>Espresso</h3>
						<h4>Get up to 30% off</h4>
					</div>
					<span class="btn"><i class="fa fa-shopping-cart"></i></span>
				</a>
			</div>


			<div class="wow col-sm-4 col-xs-4 custom_showcase custom_showcase__3">
				<a href="products/douwe-egberts-excellent-aroma-whole-beans-coffee-17-6-ounce-package.html">
							<span class="showcase_img_wr"><img
									src="<?= base_url(); ?>/assets/web/cdn.shopify.com/s/files/1/0849/4852/t/3/assets/custom_showcase3_img0093.jpg?v=15923968317452720787"
									alt="Green Coffee Get up to 30% off"/></span>
					<div class="ins">
						<h3>Green Coffee</h3>
						<h4>Get up to 30% off</h4>
					</div>
					<span class="btn"><i class="fa fa-shopping-cart"></i></span>
				</a>
			</div>


		</div>
	</div>

</div>


<!-- CUSTOM TOP BLOCK # 2 -->


<div class="custom_top_2">
	<div class="container wow custom_top_2__ins">
		<h3>Welcome
			<span>to our online coffee shop</span>
		</h3>
		<h4>Mes cuml dia sed ineniasinge dolor ipsum commete ipsum comnetus Mes ineniasinge dolor. Dolor ipsum
			commete psum comnetu Mes ineniasinge dolor.</h4>
		<p>Dovitae diam purus luctus facilisis. Nullam at ipsum eros tris tique ultrice. Duis quis imperdie
			dolore est Sed lobortis ultrices aliquet. Praesent tellus sapien, imperdiet nec. Dovitae dia purus
			luctus facilisis. Nullam at ipsum eros tris tique. Duis quis imperdie dolore est. Sed lobortis
			ultrices aliquet. Praesent tellus sapien, imperdiet nec consectetur. Dovitae diam purus luctus
			facilisis. Nullam at ipsum eros tris tique ultrice. Duis quis imperdie dolore est Sed lobortis
			ultrices aliquet. Praesent tellus sapien, imperdiet nec. Dovitae dia purus luctus facilisis. Nullam
			at ipsum eros tris tique. Duis quis imperdie dolore est. Sed lobortis ultrices aliquet.</p>
		<a class="btn"
		   href="products/grove-square-cappuccino-french-vanilla-24-count-single-serve-cup-for-keurig-k-cup-brewers.html"><i
				class="fa fa-file-text-o"></i></a>
	</div>
</div>


<script type="text/javascript">
	jQuery(function ($) {
		if (device.desktop() && $(window).width() >= 1200) {
			if ($.browser.msie) {
				// PARALLAX INIT
				$(window).load(function () {
					$('.custom_top_2').parallax("50%", -0.15);
				});
			} else {
				// PARALLAX INIT
				$(window).load(function () {
					$('.custom_top_2').parallax("50%", -0.9);
				});
			}
			;
		}
		;
	})
</script>

<div id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="main_content col-sm-12 ">
				<div class="index-scope">
					<h2 class="page_heading">Featured Products</h2>
					<div class="product_listing_main homepage_carousel row">
						<?php foreach ($products as $product) { ?>
							<div class="col-sm-2 prod_wr">
								<div class="wow product clearfix">
									<div class="product_img">
										<a class="img_change"
										   href="<?=base_url('singleProduct/'.$product['id']);?>">
												<span class="prod_inside">
													<img
														style="height: 250px"
														src="<?= base_url(); ?>/assets/uploads/<?= $product['image']; ?>"
														alt="Hills Bros Cappuccino Sugar-Free French Vanilla 12 Ounce"/>
												</span>
											<span class="product_badge sale">Sale</span>
											<span class="product_badge new">New!</span>
										</a>
									</div>
									<div class="product_info">
										<div class="product_price">
											<span class="money">$<?= $product['price']; ?></span>
										</div>
										<div class="product_name">
											<a href="<?=base_url('singleProduct/'.$product['id']);?>"><?= $product['title']; ?></a>
										</div>
										<div class="product_desc">
											<?= $product['details']; ?>
										</div>
										<div class="product_links">
												<button class="btn btn-cart"  data-toggle="modal" data-target="#commandeModel" data-price="<?=$product['price'];?>" data-id="<?=$product['id'];?>" data-name="<?=$product['title'];?>"><i
														class="fa fa-shopping-cart"></i>Acheter
												</button>
										</div>

									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>

					<script>
						jQuery(document).ready(function ($) {
							if (device.desktop() || device.tablet()) {
								$('.homepage_carousel').bxSlider({
									infiniteLoop: true,
									hideControlOnEnd: true,
									minSlides: 4,
									maxSlides: 4,
									moveSlides: 1,
									slideWidth: 270,
									slideMargin: 0,
									pager: false,
									prevText: '',
									nextText: '',
								});
							}
							;
						});
					</script>

				</div>

			</div>


		</div>
	</div>
</div>


<!-- HOMEPAGE BANNER -->


<div class="container wow banner">
	<a href="collections/flavored.html">
		<img src="../cdn.shopify.com/s/files/1/0849/4852/t/3/assets/banner1_img76ef.jpg?v=9429818611361342919"
			 alt="Order Online Order Online"/>
		<div class="banner_wr">
			<div class="banner_ins">
				<i class="fa fa-phone-square"></i>
				<h3>Order Online</h3>
				<h4>Hours: 8AM -11PM</h4>
			</div>
		</div>
	</a>
</div>
<div class="modal fade" id="commandeModel">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?=base_url('manipulateRequest');?>" method="POST" id="commandeForm">
				<div class="modal-header">
					<h4 class="modal-title">Commande</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Produit</label>
						<input type="hidden" name="produitId">
						<input type="text" class="form-control" name="produit">
					</div>
					<div class="form-group">
						<label>Prix</label>
						<input type="text" class="form-control" name="price" id="price">
					</div>
					<div class="form-group">
						<label>Quantite</label>
						<input type="number" class="form-control" placeholder="Quantite" name="qty" id="qty" required>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" placeholder="email@example.com" name="email" required>
					</div>
					<div class="form-group">
						<label>Telephone</label>
						<input type="number" class="form-control" placeholder="Phone Number" name="phone">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" class="form-control" placeholder="Address" name="address">
					</div>
					<div class="form-group">
						<label>Details</label>
						<textarea class="form-control" placeholder="Details" name="details"></textarea>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
					<button type="submit"  class="btn btn-primary">Envoyer</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<script>
	$(document).ready(function(){
		var prices=0;
		$("#commandeModel").on('show.bs.modal',function (e) {
			var id=$(e.relatedTarget).data("id");
			var name=$(e.relatedTarget).data("name");
			var price=$(e.relatedTarget).data("price");
			prices=price;
			$("#commandeModel [name='produitId']").val(id).change();
			$("#commandeModel [name='produit']").val(name).change().prop("disabled",true);
			$("#commandeModel [name='price']").val(price).change().prop("disabled",true);
			$("#commandeModel [name='qty']").val(1);
			return;
		})
		$("#qty").on('change',function () {
			if ($(this).val()==0){
				$(this).val(1)
			}
			$("#price").val($(this).val()*prices);

		})
		$("#qty").keyup(function () {
			if ($(this).val()==0){
				$(this).val(1)
			}
			$("#price").val($(this).val()*prices);

		})

		$(document).on('submit', '#commandeForm', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('manipulateRequest') ?>",
				method: 'POST',
				data: new FormData(this),
				contentType: false,
				processData: false,
				cache:false,
				async:false,
				success: function (data) {
					var json = null;
					try {
						json = JSON.parse(data);
						if (json.hasOwnProperty("error")) {
							alert(json.error);
						} else {
							alert(json.success);
							$('#commandeForm')[0].reset();
							$('#commandeModel').hide();
							window.location.reload();
						}
					} catch (e) {
						alert("System error please try again later");
						console.log(e);
					}
				}
			});
		});

	});
</script>
