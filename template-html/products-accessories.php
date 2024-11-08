<?php 
/*
  Template Name: Products Archive
*/
get_header('classic'); ?>

<div id="wrapper">

	<section class="section section-hero-page">
		<div class="tj-container">
			<div class="inner">
				<h1 class="title-page">Accessories</h1>
				
				<!-- Banner Desktop -->
				<img src="<?= TSBT_URI ?>/template-html/images/products/banner-promo.jpg" alt="ALT TITLE" class="featured-image hide-sm hide-md">
				
				<!-- Banner Mobile & Tablet -->
				<img src="https://placehold.co/343x360?text=Mobile+Image\n343x360" alt="ALT TITLE" class="featured-image hide-lg">
			</div>
		</div>
	</section>
	
	<section id="content" class="section section-posts-content">
		<div class="tj-container">
			<div class="section-body">

				<?php
				//Menggunakan plugin Breadcrumb NavXT (https://wordpress.org/plugins/breadcrumb-navxt/)
				include "components/breadcrumbs.php"; 
				echo breadcrumbs(
					[
						['Home', '#'],
						['Products', '#'],
						['Accessories', '#'],
					]
				);
				?>

				<!-- <div class="post-categories-wrap">
					<ul class="post-categories">
						<li class="cat-item <?= ( !isset($_GET['product_cat']) ) ? 'active' : '' ;?>">
							<a href="<?php echo home_url() . '/html/' . tigaPage() ?>#content">
								<div class="icon"><img src="<?= TSBT_URI ?>/assets/images/product-all-variant.png" alt="All Variant"></div>
								<span>All Variant</span>
							</a>
						</li>
						<li class="cat-item <?= ( isset($_GET['product_cat']) && $_GET['product_cat'] == 'single-origin' ) ? 'active' : '' ;?>">
							<a href="<?php tigaPage('url') ?>?product_cat=single-origin#content">
								<div class="icon"><img src="<?= TSBT_URI ?>/assets/images/product-single-origin.png" alt="Single Origin"></div>
								<span>Single Origin</span>
							</a>
						</li>
						<li class="cat-item <?= ( isset($_GET['product_cat']) && $_GET['product_cat'] == 'signature-blend' ) ? 'active' : '' ;?>">
							<a href="<?php tigaPage('url') ?>?product_cat=signature-blend#content">
								<div class="icon"><img src="<?= TSBT_URI ?>/assets/images/product-signature-blend.png" alt="Signature Blend"></div>
								<span>Signature Blend</span>
							</a>
						</li>
					</ul>
				</div> -->

				<?php $contents = [
					[
						'thumb' => TSBT_URI . '/template-html/images/products/acc-cangkir-expresso-thumb.png',
						'title' => 'Cangkir Espresso 100ml',
						'product_cat' => 'Accessories',
						'product_desc' => [ 
							'label' => '',
							'content' => '',
						],
						'button' => 'Discover More',
						'link' => get_site_url() . '/html/single-product-accessories'
					],
					[
						'thumb' => TSBT_URI . '/template-html/images/products/acc-milk-frother-stainless-steel-thumb.png',
						'title' => 'Milk Frother Stainless Steel',
						'product_cat' => 'Accessories',
						'product_desc' => [ 
							'label' => 'Specification:',
							'content' => '650 Watt',
						],
						// 'variant' => 'Single Origin',
						'button' => 'Discover More',
						'link' => get_site_url() . '/html/single-product-accessories'
					],
					[
						'thumb' => TSBT_URI . '/template-html/images/products/acc-milk-frother-black-thumb.png',
						'title' => 'Milk Frother Black',
						'product_cat' => 'Accessories',
						'product_desc' => [ 
							'label' => 'Specification:',
							'content' => '500 Watt',
						],
						// 'variant' => 'Signature Blend',
						'button' => 'Discover More',
						'link' => get_site_url() . '/html/single-product-accessories'
					],
					[
						'thumb' => TSBT_URI . '/template-html/images/products/acc-milk-frother-white-thumb.png',
						'title' => 'Milk Frother White',
						'product_cat' => 'Accessories',
						'product_desc' => [ 
							'label' => 'Specification:',
							'content' => '500 Watt',
						],
						// 'variant' => 'Single Origin',
						'button' => 'Discover More',
						'link' => get_site_url() . '/html/single-product-accessories'
					],
				]; ?>
				
				<div class="row row-posts row-products">
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