<?php 
/*
  Template Name: Single Product
*/
get_header('classic'); ?>

<div id="wrapper">

	<section class="section section-hero-product" style="--bg: url('<?= TSBT_URI ?>/assets/images/product-featured-background-image-abstract.jpg');">
		<div class="tj-container">
			<div class="row row-hero">
				<div class="col-12 col-lg-auto">

					<img src="<?= TSBT_URI . '/template-html/images/product/product-mesin-kopi.png' ?>" alt="ALT TITLE" class="featured-image">

				</div>
				<div class="col-12 col-lg">

					<div class="inner">

						<ul class="product-category">
							<li><a href="#">Coffee Capsule Machine</a></li>
						</ul>

						<h1 class="title-post">Excelso Unakaffe Mesin Kopi Kapsul Ventura Acala - Red</h1>

						<div class="short-desc">
							<p>Excelso Unakaffe System Ventura acala merupakan Mesin kopi kapsul persembahan dari Excelso agar menyeduh kopi hitam semakin mudah dan cepat.</p>
							<p>Mesin kopi yang dibuat dengan desain lebih slim dan modern, dilengkapi dengan tekanan 15 bar, kapasitas tanki air sebesar 500ml, dengan daya listrik 900watt mesin ini sangat cocok untuk kamu yang gemar minum kopi dirumah maupun dikantor.</p>
						</div>

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

			<h2 class="title-section text-center">Make Your Own #EFFORTLESSCOFFEEMOMENT In 4 STEPS</h2>
			<div class="row row-make-own-step">
				<div class="col-6 col-lg-3">
					<div class="step-item">
						<img src="<?= TSBT_URI . '/template-html/images/product/make-own-1.png' ?>" alt="ALT TITLE" class="step-image">
						<div class="text">1. INSERT</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="step-item">
						<img src="<?= TSBT_URI . '/template-html/images/product/make-own-2.png' ?>" alt="ALT TITLE" class="step-image">
						<div class="text">2. CLICK</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="step-item">
						<img src="<?= TSBT_URI . '/template-html/images/product/make-own-3.png' ?>" alt="ALT TITLE" class="step-image">
						<div class="text">3. WAIT</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="step-item">
						<img src="<?= TSBT_URI . '/template-html/images/product/make-own-4.png' ?>" alt="ALT TITLE" class="step-image">
						<div class="text">4. ENJOY</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="section section-product-content" style="--head-mb: 25px;">
		<div class="tj-container">
			<div class="section-head text-center">
				<h2 class="title-section">Great Coffee Within A Single Click</h2>
				<p>Enjoy your choice of coffee from Americano to Latte, hot or ice, wherever and whatever with Unakaffe System Ventura Avana</p>
			</div>
			<div class="section-body" style="">

				<div class="row justify-content-center text-center" style="--tj-gutter-x: 88px;">
					<div class="col col-lg-auto">
						<div class="great-coffee">
							<div class="img-wrapper">
								<img src="<?= TSBT_URI . '/template-html/images/product/glass-coffee.png' ?>" alt="ALT TITLE" class="wp-post-image">
							</div>
							<div class="title">Americano</div>
							<div class="text">(40 ml)</div>
						</div>
					</div>
					<div class="col col-lg-auto">
						<div class="great-coffee">
							<div class="img-wrapper">
								<img src="<?= TSBT_URI . '/template-html/images/product/glass-coffee.png' ?>" alt="ALT TITLE" class="wp-post-image">
							</div>
							<div class="title">Latte</div>
							<div class="text">(40 ml)</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="section section-product-content" style="--section-bg: var(--tj-color--bg-post);--head-mb: 40px;">
		<div class="tj-container">
			<div class="section-head text-center">
				<h2 class="title-section">Suitable For Every Settings</h2>
				<p>Compact and lightweight at only 3 kilograms, Unakaffe System Ventura Acala is ready to serve you the best coffee whether at office or the comfort of  your home.</p>
			</div>
			<div class="section-body">

				<div class="row justify-content-center text-center" style="--tj-gutter-x: 28px;--tj-gutter-y: 32px;">
					<div class="col-12 col-lg-4">
						<div class="suitable">
							<div class="img-wrapper">
								<img src="<?= TSBT_URI . '/template-html/images/product/suitable-kitchen.png' ?>" alt="ALT TITLE" class="wp-post-image">
							</div>
							<div class="title">KITCHEN</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="suitable">
							<div class="img-wrapper">
								<img src="<?= TSBT_URI . '/template-html/images/product/suitable-living-room.png' ?>" alt="ALT TITLE" class="wp-post-image">
							</div>
							<div class="title">LIVING ROOM</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="suitable">
							<div class="img-wrapper">
								<img src="<?= TSBT_URI . '/template-html/images/product/suitable-pantry.png' ?>" alt="ALT TITLE" class="wp-post-image">
							</div>
							<div class="title">PANTRY</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="section section-product-content">
		<div class="tj-container">
			<div class="section-head">
				<h2 class="title-section text-center">Spesifications</h2>
			</div>
			<div class="section-body">
				<table class="table table-detail">
					<tbody>
						<tr>
							<th>Color</th>
							<td>
								<ul class="colors">
									<li><div class="color" style="--color: #0A0A0A;"></div></li>
									<li><div class="color" style="--color: #D90017;"></div></li>
									<li><div class="color" style="--color: #FFFFFF;"></div></li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>Watt & Bar</th>
							<td>
								<ul class="watt">
									<li><i class="icon"><img src="<?= TSBT_URI . '/assets/images/lightning.png' ?>" alt="Watt"></i>800 - 952 Watt</li>
									<li><i class="icon"><img src="<?= TSBT_URI . '/assets/images/speedometer.png' ?>" alt="Bar"></i>15 Bar</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>Machine Capacity</th>
							<td>
								<ul class="serving">
									<li><i class="icon"><img src="<?= TSBT_URI . '/assets/images/measuring-jug.png' ?>" alt="Capacity"></i>650 Ml water tank capacity</li>
									<li><i class="icon"><img src="<?= TSBT_URI . '/assets/images/product-single-origin.png' ?>" alt="Container"></i>12 Used capsules container capacity</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</section>

	<section class="section section-product-content" style="--section-bg: var(--tj-color--bg-post);">
		<div class="tj-container">

				<div class="row row-experience">
					<div class="col-12 col-lg">

						<h2 class="title-section">The Perfect Coffee Experience, Anytime, Anywhere</h2>

						<div class="highlight-text">
							<p><strong>Excelso Unakaffe System Ventura Avana</strong> is a capsule coffee machine from Excelso that makes brewing black coffee easy and quick. With its slim and modern design, 19 bar pressure, 500ml water tank capacity, and 900-watt power, it is perfect for coffee lovers at home or in the office.</p>
							<p>Check out recipes you can make with this machine and enjoy the perfect coffee experience every day.</p>
						</div>

						<div class="btn-wrap">
							<?php get_template_part( 'template-parts/button', '', array(
								'text' => 'See Recipes',
								'button_class' => 'btn-primary',
								'link' => '#'
							) ); ?>
						</div>

					</div>
					<div class="col-12 col-lg-auto">

						<div class="swiper-wrapper">
							<div class="swiper swiper-product-gallery-slider">
								<div class="swiper-wrapper">

									<?php for ($i=1; $i < 4; $i++) { ?>
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

		</div>
	</section>

	<section class="section section-related-post section-posts">
		<div class="tj-container">

			<div class="section-head">
				<h3 class="title-section">Complete Your Experience</h3>
			</div>
			<div class="section-body">

				<?php $contents = [
					[
						'thumb' => TSBT_URI . '/template-html/images/product/product-milk-frother.png',
						'title' => 'Accessories',
						'product_cat' => 'Milk Frother',
						'product_desc' => [ 
							'label' => 'Watt:',
							'content' => '650 Watt',
						],
						'button' => 'Discover More',
						'link' => '#'
					],
					[
						'thumb' => TSBT_URI . '/template-html/images/product/product-ventura-avana-red.png',
						'title' => 'Ventura Avana Red',
						'product_cat' => 'Coffee Capsule Machine',
						'product_desc' => [ 
							'label' => 'Watt & Bar:',
							'content' => '900 Watt - 19 Bar',
						],
						'button' => 'Discover More',
						'link' => '#'
					],
					[
						'thumb' => TSBT_URI . '/template-html/images/product/produk-ventura-735.png',
						'title' => 'Coffee Capsule Machine',
						'product_cat' => 'Ventura 735',
						'product_desc' => [ 
							'label' => 'Watt & Bar:',
							'content' => '1000 Watt - 19 Bar',
						],
						'button' => 'Discover More',
						'link' => '#'
					]
				]; ?>

				<div class="row row-posts">
					<?php foreach ($contents as $content) { ?>
						<div class="col-6 col-lg-4">
	
							<article class="post product">
								<div class="post-thumb">
									<?php if ( !empty( $content['variant'] ) ) { 
										$variant = $content['variant'];
										$variant_url = strtolower(str_replace(' ', '-', $variant));
										?>
										<div class="variant">
											<i class="icon">
												<img src="<?= TSBT_URI ?>/assets/images/product-<?= $variant_url ?>.png" alt="<?= $content['variant'] ?>" class="icon-variant">
											</i>
											<span class="text"><?= $variant ?></span>
										</div>
									<?php } ?>
									<a href="<?= $content['link'] ?>">
										<img src="<?= $content['thumb'] ?>" alt="<?= $content['title'] ?>" class="img-thumb">
									</a>
								</div>
	
								<?php if ( !empty($content['product_cat']) ) { ?>
									<div class="category"><?= $content['product_cat'] ?></div>
								<?php } ?>
								<h3 class="title-post"><a href="<?= $content['link'] ?>"><?= $content['title'] ?></a></h3>
	
								<?php if ( !empty( $content['product_desc']['content'] ) ) { ?>
									<div class="note">
										<?php if ( !empty( $content['product_desc']['label'] ) ) { ?>
											<div class="note-label"><?= $content['product_desc']['label'] ?></div>
										<?php } ?>
										<?php if ( !empty( $content['product_desc']['content'] ) ) { ?>
											<div class="note-content"><?= $content['product_desc']['content'] ?></div>
										<?php } ?>
									</div>
								<?php } ?>
	
								<div class="btn-wrap">
									<?php get_template_part( 'template-parts/button', '', array(
										'icon' => '',
										'text' => $content['button'],
										'button_class' => 'btn-outline-primary',
										'link' => $content['link']
									) ); ?>
								</div>
							</article>
	
						</div>
					<?php } ?>
				</div>

			</div>
		</div>
	</section>
	
</div>

<?php get_footer('classic'); ?>