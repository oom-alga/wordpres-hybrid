<?php 
/*
  Template Name: Single Product
*/
get_header('classic'); ?>

<div id="wrapper">

	<section class="section section-hero-product" style="--bg: url('<?= TSBT_URI ?>/assets/images/product-featured-background-image-abstract-1.jpg');">
		<div class="tj-container">
			<div class="row row-hero">
				<div class="col-12 col-lg-auto">

					<img src="<?= TSBT_URI . '/template-html/images/product/product-accessories.png' ?>" alt="ALT TITLE" class="featured-image">

				</div>
				<div class="col-12 col-lg">

					<div class="inner">

						<ul class="product-category">
							<li><a href="#">Accessories</a></li>
						</ul>

						<h1 class="title-post">Milk Frother Unakaffe System - Black</h1>

						<div class="short-desc">
							<p>Milk Frother dari Unakaffe System cocok untuk konsumen yang menyukai minuman kopi berbasis susu. Anda dapat menikmati buih susu lembut dan bertekstur krim yang dihasilkan oleh Milk Frother Unakaffe System. Sistem pembersihan yang mudah menjadikan anda tidak perlu mengkhawatirkan aroma ataupun sisa susu yang tertinggal.</p>
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
						['Accessories', '#'],
						['Detail Products', '#'],
					]
				);
				?>
			</div>

			<h2 class="title-section text-center">Complete Your Coffee Experience In 4 STEPS</h2>
			<div class="row row-make-own-step">
				<div class="col-6 col-lg-3">
					<div class="step-item">
						<img src="<?= TSBT_URI . '/template-html/images/product/accessories-step-1.png' ?>" alt="ALT TITLE" class="step-image">
						<div class="text">1. POUR</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="step-item">
						<img src="<?= TSBT_URI . '/template-html/images/product/accessories-step-2.png' ?>" alt="ALT TITLE" class="step-image">
						<div class="text">2. CLICK</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="step-item">
						<img src="<?= TSBT_URI . '/template-html/images/product/accessories-step-3.png' ?>" alt="ALT TITLE" class="step-image">
						<div class="text">3. WAIT</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="step-item">
						<img src="<?= TSBT_URI . '/template-html/images/product/accessories-step-4.png' ?>" alt="ALT TITLE" class="step-image">
						<div class="text">4. ENJOY</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="section section-product-content" style="--head-mb: 25px;">
		<div class="tj-container">
			<div class="section-head text-center">
				<h2 class="title-section">Do More With Limitless Possibilities</h2>
				<p>Explore, create, and enjoy a wide range of milk based coffee recipes with Unakaffe System Milk Frother.</p>
			</div>
			<div class="section-body" style="">

				<div class="row justify-content-center text-center row-accessories">
					<div class="col-4 col-lg-auto">
						<div class="accessories-highlight">
							<div class="img-wrapper">
								<img src="<?= TSBT_URI . '/template-html/images/product/mug-outline.png' ?>" alt="ALT TITLE" class="wp-post-image">
							</div>
							<div class="title">Hot milk</div>
						</div>
					</div>
					<div class="col-4 col-lg-auto">
						<div class="accessories-highlight">
							<div class="img-wrapper">
								<img src="<?= TSBT_URI . '/template-html/images/product/ice-coffee-outline.png' ?>" alt="ALT TITLE" class="wp-post-image">
							</div>
							<div class="title">Cold milk</div>
						</div>
					</div>
					<div class="col-4 col-lg-auto">
						<div class="accessories-highlight">
							<div class="img-wrapper">
								<img src="<?= TSBT_URI . '/template-html/images/product/fast-time-outline.png' ?>" alt="ALT TITLE" class="wp-post-image">
							</div>
							<div class="title">Fully automatic</div>
						</div>
					</div>
					<div class="col-4 col-lg-auto">
						<div class="accessories-highlight">
							<div class="img-wrapper">
								<img src="<?= TSBT_URI . '/template-html/images/product/clean-outline.png' ?>" alt="ALT TITLE" class="wp-post-image">
							</div>
							<div class="title">Easy to clean</div>
						</div>
					</div>
					<div class="col-4 col-lg-auto">
						<div class="accessories-highlight">
							<div class="img-wrapper">
								<img src="<?= TSBT_URI . '/template-html/images/product/arrows-square-outline.png' ?>" alt="ALT TITLE" class="wp-post-image">
							</div>
							<div class="title">Slim & compact</div>
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
				<p>Compact and slim with various functions, Unakaffe System Milk Frother is here to enrich your coffee moments. Whether at office or home, its modern and elegant silhouette beautifully adds finishing touch to your existing décor.</p>
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
									<li><div class="color" style="--color: #FFFFFF;"></div></li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>Watt & Bar</th>
							<td>
								<ul class="watt">
									<li><i class="icon"><img src="<?= TSBT_URI . '/assets/images/lightning.png' ?>" alt="Watt"></i>Max 650 Watt</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>Machine Capacity</th>
							<td>
								<ul class="serving">
									<li><i class="icon"><img src="<?= TSBT_URI . '/assets/images/measuring-jug.png' ?>" alt="Capacity"></i>Max 400 ml of milk for heating function</li>
									<li><i class="icon"><img src="<?= TSBT_URI . '/assets/images/mug.png' ?>" alt="Container"></i>Max 300 ml of milk & 30 gr of cocoa for hot chocolate function</li>
									<li><i class="icon"><img src="<?= TSBT_URI . '/assets/images/paper-cup.png' ?>" alt="Container"></i>Max 200 ml of milk for hot & cold frothing function</li>
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

	<!-- <section class="section section-related-post section-posts">
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
						<div class="col-12 col-lg-4">
	
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
	</section> -->
	
</div>

<?php get_footer('classic'); ?>