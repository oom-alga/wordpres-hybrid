<?php 
/*
  Template Name: Blog Archive
*/
get_header('classic'); ?>

<div id="wrapper">

	<section class="section section-hero-page" style="--section-bg: var(--tj-color--bg-post);">
		<div class="tj-container">
			<div class="inner">
				<h1 class="title-page">About Unakaffe System</h1>
				
				<!-- Banner Desktop -->
				<img src="<?= TSBT_URI ?>/template-html/images/about/hero-image.png" alt="ALT TITLE" class="featured-image hide-sm hide-md">
				
				<!-- Banner Mobile & Tablet -->
				<img src="https://placehold.co/343x360?text=Mobile+Image\n343x360" alt="ALT TITLE" class="featured-image hide-lg">
			</div>
		</div>
	</section>

	<section class="section section-about-content" style="--section-bg: var(--tj-color--bg-post);">
		<div class="tj-container">

			<h2>World Class Coffee Capsule Machines</h2>
			<p>Welcome to Unakaffe System, where every coffee moment becomes a masterpiece.</p>
			<p>Founded with a passion and dedication to quality, Unakaffe System has grown to be a pioneer in the modern coffee industry. We offer a complete solution for coffee enthusiasts, ranging from sophisticated coffee capsule machines, high-quality coffee capsules, to exclusively designed coffee-making accessories.</p>

			<div class="row row-about-image">
				<div class="col-auto col-lg-4">
					<div class="img-wrapper">
						<img src="<?= TSBT_URI ?>/template-html/images/about/image-about-1.png" alt="ALT TITLE" class="about-image">
					</div>
				</div>
				<div class="col-auto col-lg-4">
					<div class="img-wrapper">
						<img src="<?= TSBT_URI ?>/template-html/images/about/image-about-2.png" alt="ALT TITLE" class="about-image">
					</div>
				</div>
				<div class="col-auto col-lg-4">
					<div class="img-wrapper">
						<img src="<?= TSBT_URI ?>/template-html/images/about/image-about-3.png" alt="ALT TITLE" class="about-image">
					</div>
				</div>
			</div>

			<h2>Revolutionizing Your Coffee Experience with Unakaffe System</h2>
			<p>At Unakaffe System, we're driven by our passion for exceptional coffee and innovative technology. Our capsule coffee makers and coffee capsules are designed to elevate your coffee experience, blending convenience, quality, and style seamlessly. Sourced from the world's finest coffee regions, our products promise a perfect cup every time, with a focus on sustainability and environmental responsibility. Join Unakaffe System in redefining coffee culture, where every sip is a step towards perfection.</p>

		</div>
	</section>
	
	<section class="section section-about-features">
		<div class="tj-container">
			<div class="section-body">
				<?php $contents = [
					[
						'thumb' => TSBT_URI . '/template-html/images/about/about-experience.png',
						'title' => 'Experience The Best Indonesian Coffee In Every Sip',
						'content' => 'For us, nothing beats the moment of relaxation accompanied by a great cup of coffee while doing the things we love after a long week.Complete the experience with our Unakaffe System Robusta Gold, carefully crafted with high quality coffee beans only from the best Robusta producing regions in Indonesia.',
					],
					[
						'thumb' => TSBT_URI . '/template-html/images/about/about-make-own.png',
						'title' => 'Make Your Own #EFFORTLESSCOFFEEMOMENT',
						'content' => 'At Unakaffe System, we believe that innovation is key to creating the perfect coffee experience. Therefore, we continually develop our capsule machine technology to be user-friendly, efficient, and, of course, capable of producing a perfect cup of coffee every time.'
					]
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
							</div>
						</div>
					</div>
				<?php } ?>


			</div>
		</div>
	</section>

	<section class="section section-about-cta">
		<div class="tj-container">

			<div class="cta-wrap-product" style="--bg: url('<?= TSBT_URI ?>/template-html/images/about/about-cta-product.png');">

				<div class="cta-box">
					<div class="cta-title">Want to<br>Know More?</div>
	
					<div class="btn-wrap">
						<?php get_template_part( 'template-parts/button', '', array(
							'icon' => '',
							'text' => 'See All Products',
							'button_class' => 'btn-primary',
							'link' => '#'
						) ); ?>
					</div>
				</div>

			</div>
			
			<div class="cta-wrap-subscribe" style="--bg: url('<?= TSBT_URI ?>/template-html/images/about/about-cta-subscribe.png');">

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


		</div>
	</section>
</div>

<?php get_footer('classic'); ?>