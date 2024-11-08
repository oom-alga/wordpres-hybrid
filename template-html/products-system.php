<?php 
/*
  Template Name: Products System
*/
get_header('classic'); ?>

<div id="wrapper">

	<section class="section section-hero-page">
		<div class="tj-container">
			<div class="inner">
				<h1 class="title-page">Our Products</h1>
				
				<!-- Banner Desktop -->
				<img src="<?= TSBT_URI ?>/template-html/images/products/banner-promo.jpg" alt="ALT TITLE" class="featured-image hide-sm hide-md">
				
				<!-- Banner Mobile & Tablet -->
				<img src="https://placehold.co/343x360?text=Mobile+Image\n343x360" alt="ALT TITLE" class="featured-image hide-lg">
			</div>
		</div>
	</section>
	
	<section class="section section-products-system">
		<div class="tj-container">
			<div class="section-head">
				<h3 class="title-section">Explore Unakaffe System</h3>
			</div>
			<div class="section-body">

				<?php $contents = [
					[
						'thumb' => TSBT_URI . '/template-html/images/products/coffee-capsule-machine.jpg',
						'video' => TSBT_URI . '/template-html/videos/ventura-acala.mp4',
						'title' => 'Coffee Capsule Machine',
						'description' => 'Qorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.',
						'button' => 'See Products',
						'link' => get_home_url() . '/html/single-product-machine'
					],
					[
						'thumb' => TSBT_URI . '/template-html/images/products/coffee-capsule.jpg',
						'video' => TSBT_URI . '/template-html/videos/coffee-capsule-1.mp4',
						'title' => 'Coffee Capsule',
						'description' => 'Qorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.',
						'button' => 'See Products',
						'link' => get_home_url() . '/html/products'
					],
					[
						'thumb' => TSBT_URI . '/template-html/images/products/accessories.jpg',
						'video' => TSBT_URI . '/template-html/videos/milk-frother.mp4',
						'title' => 'Accessories',
						'description' => 'Qorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.',
						'button' => 'See Products',
						'link' => get_home_url() . '/html/single-product'
					],
				]; ?>
				
				<div class="row row-products">
					<?php foreach ($contents as $content) { ?>
						<div class="col-12 col-lg-4">
	
							<article class="post product-system">
								
								<div class="post-thumb">
									<a href="<?= $content['link'] ?>">
										<img src="<?= $content['thumb'] ?>" alt="<?= $content['title'] ?>" class="img-thumb">

										<?php if ( !empty( $content['video'] ) ) { ?>
											<video width="100%" autoplay loop muted playsinline>
												<?php if ( is_ios() ) { ?>
													<source src="<?= $content['video'] ?>" type='video/mp4; codecs="hvc1"'>
												<?php }else{ ?>
													<source src="<?= $content['video'] ?>" type='video/mp4;'>
												<?php } ?>
											</video>
										<?php } ?>
									</a>
								</div>
	
								<h3 class="title-post"><a href="<?= $content['link'] ?>"><?= $content['title'] ?></a></h3>
	
								<div class="excerpt"><?= $content['description'] ?></div>
	
								<div class="btn-wrap">
									<?php get_template_part( 'template-parts/button', '', array(
										'icon' => '',
										'text' => $content['button'],
										'button_class' => 'btn-primary',
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