<?php
/*
  Template Name: Homepage
*/ 
get_header('classic'); ?>

<div id="wrapper">

	<section class="section section-hero" style="--bg: url('<?= TSBT_URI ?>/template-html/images/home/above-the-fold.png');--bg-sm: url('<?= TSBT_URI ?>/template-html/images/home/above-the-fold-mobile.jpg');">

		<video width="100%" autoplay loop muted playsinline>
			<?php if ( is_ios() ) { ?>
				<source src="<?= TSBT_URI . '/template-html/videos/above-the-fold.mp4' ?>" type='video/mp4; codecs="hvc1"'>
			<?php }else{ ?>
				<source src="<?= TSBT_URI . '/template-html/videos/above-the-fold.mp4' ?>" type='video/mp4;'>
			<?php } ?>
		</video>

		<div class="tj-container">
			<div class="inner">
				<h1 class="title-hero">Serve your favorite coffee with the best capsule coffee machine.</h1>
				<p>Brew your favorite coffee with a leading capsule coffee machine that ensures delicious flavor and aroma in every cup.</p>

				<div class="btn-wrap">
					<?php get_template_part( 'template-parts/button', '', array(
						'icon' => '',
						'text' => 'Our Products',
						'button_class' => 'btn-primary',
						'link' => '#'
					) ); ?>
					<?php get_template_part( 'template-parts/button', '', array(
						'icon' => 'icon-play-fill',
						'icon_position' => 'before',
						'text' => 'How it Works',
						'button_class' => 'btn-outline-primary',
						'link' => '#'
					) ); ?>
				</div>
			</div>
		</div>
	</section>
	
	<section class="section section-products">
		<div class="tj-container">
			<div class="section-head">
				<h3 class="title-section">Discover Our Products</h3>
			</div>
			<div class="section-body">
				<?php $contents = [
					[
						'thumb' => TSBT_URI . '/template-html/images/home/premium-machine.jpg',
						'video' => TSBT_URI . '/template-html/videos/premium-machines.mp4',
						'title' => 'Elevate your coffee experience with our premium machines',
						'content' => 'Our reliable coffee machines offer user-friendly convenience without compromising on taste, accompanied by premium coffee cups that will indulge your senses.',
						'button' => 'See All Products',
						'link' => get_home_url() . '/html/single-product-machine'
					],
					[
						'thumb' => TSBT_URI . '/template-html/images/home/coffee-capsule.jpg',
						'video' => TSBT_URI . '/template-html/videos/coffee-capsule.mp4',
						'title' => 'Various Variants of Coffee Capsules',
						'content' => 'Every coffee variant from Unakaffe System is a masterpiece of taste, offering a special blend of flavors and an unforgettable delightful aroma.',
						'button' => 'See All Products',
						'link' => get_home_url() . '/html/products'
					],
					[
						'thumb' => TSBT_URI . '/template-html/images/home/premium-quality.jpg',
						'video' => TSBT_URI . '/template-html/videos/premium-quality.mp4',
						'title' => 'Best Product and Premium Quality',
						'content' => 'This product is the result of hard work and dedication. We are fully committed to high quality and customer satisfaction, because you deserve the best.',
						'button' => 'See All Products',
						'link' => get_home_url() . '/html/single-product'
					],
				];?>

				<?php foreach ( $contents as $content ) { ?>
					<div class="product-item">
						<div class="product-thumb">
							<div class="inner">
								<?php if ( !empty( $content['video'] ) ) { ?>
									<video width="100%" autoplay loop muted playsinline>
										<?php if ( is_ios() ) { ?>
											<source src="<?= $content['video'] ?>" type='video/mp4; codecs="hvc1"'>
										<?php }else{ ?>
											<source src="<?= $content['video'] ?>" type='video/mp4;'>
										<?php } ?>
									</video>
								<?php } ?> 
								<?php if ( !empty( $content['thumb'] ) ) { ?>
									<img src="<?= $content['thumb'] ?>" alt="<?= $content['title'] ?>" class="thumb-image">
								<?php } ?>
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

	<section class="section section-posts">
		<div class="tj-container">

			<div class="section-head">
				<h3 class="title-section">Discover More</h3>
			</div>
			<div class="section-body">
				<?php $contents = [
					[
						'link' => get_home_url() . '/html/single-post',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-1.jpg',
						'title' => 'Espresso Maker VS Coffee Maker - Difference and Comparision',
						'excerpt' => 'Coffee beans are made of 30% water soluble compounds, the remainder generally being cellulose. Golden cup coffee is to extract the 18-21% good soluble compounds from the beans.',
						'date' => '28 JAN 2023',
						'tag' => ['Barista', 'Natural', 'Store']
					],
					[
						'link' => get_home_url() . '/html/single-post',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-2.jpg',
						'title' => 'How to Make a Perfect Espresso',
						'excerpt' => 'Bring back this classic cocktail and enjoy it as an after work treat or while prepping dinner, and it is also perfect after dinner as a digestif.',
						'date' => '28 JAN 2023',
						'tag' => ['Barista', 'Natural', 'Store']
					],
					[
						'link' => get_home_url() . '/html/single-post',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-3.jpg',
						'title' => 'What Type Of Coffee Certifications Exist - A Short Guide',
						'excerpt' => 'Over the years we have worked and sourced coffees from a variety of different certification bodies (in particular UTZ, Fairtrade, USDA and EU organic, but also Rainforest Alliance) for our different lines of Nespresso Original Machine Capsules and the compostable Keurig KCup pods. Here is an overview of some of these certifications and their focus areas:',
						'date' => '28 JAN 2023',
						'tag' => ['Barista', 'Natural', 'Store']
					]
				];?>

				<div class="row">
					
					<?php foreach ($contents as $content) { ?>
						<div class="col-12 col-lg-4">

							<article class="post">
		
								<div class="post-thumb">
									<a href="<?= $content['link'] ?>">
										<img src="<?= $content['thumb'] ?>" alt="<?= $content['title'] ?>" class="img-thumb">
									</a>
								</div>

								<h3 class="title-post"><a href="<?= $content['link'] ?>"><?= $content['title'] ?></a></h3>
		
								<div class="excerpt"><?= $content['excerpt'] ?></div>

								<div class="meta-post">
									<div class="meta-date"><?= $content['date'] ?></div>
									<div class="meta-tag">
										<ul class="post-tag">
											<?php foreach ($content['tag'] as $tag) { ?>
												<li><?= $tag ?></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</article>
		
						</div>	
					<?php } ?>
				</div>

				<div class="btn-wrap">
					<?php get_template_part( 'template-parts/button', '', array(
						'icon' => '',
						'text' => 'See More Articles',
						'button_class' => 'btn-outline-primary',
						'link' => get_home_url() . '/html/blog'
					) ); ?>
				</div>

			</div>

		</div>
	</section>

	<section class="section section-cta"  style="--bg: url('<?= TSBT_URI ?>/template-html/images/home/home-cta-bg.jpg');">
		<div class="tj-container">

			<div class="cta-box">
				<div class="cta-title">Don't Miss Out!<br>
				Subscribe Now!</div>

				<div class="btn-wrap">
					<?php get_template_part( 'template-parts/button', '', array(
						'icon' => '',
						'text' => 'Subscribe',
						'button_class' => 'btn-primary',
						'link' => '#'
					) ); ?>
				</div>
			</div>

		</div>
	</section>
</div>

<?php get_footer('classic'); ?>