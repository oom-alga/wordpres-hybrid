<?php 
/*
  Template Name: Single Product
*/
get_header('classic'); ?>

<div id="wrapper">

	<section class="section section-hero-product" style="--bg: url('<?= TSBT_URI ?>/assets/images/product-featured-background-image.jpg');">
		<div class="tj-container">
			<div class="row row-hero">
				<div class="col-12 col-lg-auto">

					<img src="<?= TSBT_URI . '/template-html/images/product/featured-image.png' ?>" alt="ALT TITLE" class="featured-image">

				</div>
				<div class="col-12 col-lg">

					<div class="inner">

						<ul class="product-category">
							<li><a href="#">Single Origin</a></li>
						</ul>

						<h1 class="title-post">Kopi Kapsul Excelso Unakaffe Flores Box</h1>

						<div class="short-desc"><p>Excelso Unakaffe Flores terbuat dari 100% Arabica autentik yang dipanen dari perkebunan di daerah gunung berapi Flores, Nusa Tenggara Timur dengan aroma karamel dan bunga kopi serta rasa apel merah dan buah persik.</p></div>

						<div class="get-product">
							<div class="text">Find Your Favorite Products Here:</div>
							<ul class="store">
								<li><a href="#" target="_blank" title="Shop our official store on Shopee"><img src="<?= TSBT_URI . '/assets/images/marketplace-shopee-48.png' ?>" alt="Shopee"></a></li>
								<li><a href="#" target="_blank" title="Shop our official store on Tokopedia"><img src="<?= TSBT_URI . '/assets/images/marketplace-tokopedia-48.png' ?>" alt="Tokopedia"></a></li>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>	

	<section class="section section-product-overview">
		<div class="tj-container">

			<div class="breadcrumbs-wrap" style="padding: 0;">
				<?php
				//Menggunakan plugin Breadcrumb NavXT (https://wordpress.org/plugins/breadcrumb-navxt/)
				include "components/breadcrumbs.php"; 
				echo breadcrumbs(
					[
						['Home', '#'],
						['Coffee Capsules', '#'],
						['Detail Products', '#'],
					]
				);
				?>
			</div>

			<div class="row row-detail">
				<div class="col-12 col-lg">
					<h2 class="title-section">Spesifications</h2>

					<div class="table-responsive">
						<table class="table table-detail">
							<tbody>
								<tr>
									<th>Tasting Notes</th>
									<td>Red Apple & Peach</td>
								</tr>
								<tr>
									<th>Body & Aroma</th>
									<td><i class="icon"><img src="<?= TSBT_URI . '/assets/images/product-coffee-cup.png' ?>" alt="Coffee Cup"></i>Caramel & Coffee Flowers</td>
								</tr>
								<tr>
									<th>Serving Suggestion</th>
									<td>
										<ul class="serving">
											<li><i class="icon"><img src="<?= TSBT_URI . '/assets/images/product-cup.png' ?>" alt="Cup"></i>Lungo 150ml</li>
											<li><i class="icon"><img src="<?= TSBT_URI . '/assets/images/product-cup.png' ?>" alt="Cup"></i>Pair with milk</li>
										</ul>
									</td>
								</tr>
								<tr>
									<th>Composition</th>
									<td>100% Arabica coffee beans. Each box contains 12 capsules / 6.5 grams</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-12 col-lg-auto">

					<div class="swiper-wrapper">
						<div class="swiper swiper-product-gallery-slider">
							<div class="swiper-wrapper">

								<?php for ($i=0; $i < 3; $i++) { ?>
									<div class="swiper-slide">
										<img src="<?= TSBT_URI . '/template-html/images/product/product-gallery-'. $i+1 .'.png' ?>" alt="ALT TITLE" class="gallery-item">
									</div>
								<?php } ?>

							</div>

							<div class="swiper-pagination"></div>
						</div>

						<div class="swiper-button-prev"><i class="icon"><?php tsbt_get_svg('icon-caret-left'); ?></i></div>
						<div class="swiper-button-next"><i class="icon"><?php tsbt_get_svg('icon-caret-right'); ?></i></div>
					</div>

				</div>
			</div>

		</div>
	</section>

	<section class="section section-product-highlight">
		<div class="tj-container">
			<div class="section-body">
				<?php $contents = [
					[
						'thumb' => TSBT_URI . '/template-html/images/product/image-xl-about.png',
						'title' => 'Discover Our Exclusive Recipes!',
						'content' => 'Unleash your inner barista with our creative coffee recipes. Whether you\'re craving something classic or adventurous, find the perfect brew to match your mood and taste.',
						'button' => 'Explore Now!',
						'link' => '#'
					],
				];?>

				<?php foreach ( $contents as $content ) { ?>
					<div class="product-item">
						<div class="product-thumb">
							<div class="inner">
								<div class="img-wrapper">
									<img src="<?= $content['thumb'] ?>" alt="<?= $content['title'] ?>" class="thumb-image">
								</div>
							</div>
						</div>
						<div class="product-content">
							<div class="inner">
								<h3 class="title-product"><?= $content['title'] ?></h3>
								<div class="content"><?= $content['content'] ?></div>
								<div class="btn-wrap">
									<?php get_template_part( 'template-parts/button', '', array(
										'text' => $content['button'],
										'button_class' => 'btn-primary',
										'link' => $content['link']
									) ); ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>


			</div>
		</div>
	</section>
	
</div>

<?php get_footer('classic'); ?>