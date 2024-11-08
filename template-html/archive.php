<?php 
/*
  Template Name: Posts Archive
*/
get_header('classic'); ?>

<div id="wrapper">

	<section class="section section-hero-page">
		<div class="tj-container">
			<div class="inner">
				<h1 class="title-page">
					<?php if (isset($_GET['cat']) && !empty($_GET['cat'])) {
						switch ($_GET['cat']) {
							case 'news':
								echo 'News';
								break;
							case 'cafe-crafting':
								echo 'Café Crafting';
								break;
							case 'barista-secrets':
								echo 'Barista Secrets';
								break;
							default:
								echo 'All Articles';
								break;
						}
					} else {
						echo 'All Articles';
					} ?>
				</h1>
				
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

				<div class="navigate-label">Navigate to:</div>

				<div class="row justify-content-between">
					<div class="col-12 col-lg-auto">
						<div class="post-categories-wrap">
							<ul class="post-categories">
								<li class="cat-item <?= ( !isset($_GET['cat']) ) ? 'active' : '' ;?>">
									<a href="<?php echo home_url() . '/html/' . tigaPage() ?>#content">
										<span>All Article</span>
									</a>
								</li>
								<li class="cat-item <?= ( isset($_GET['cat']) && $_GET['cat'] == 'news' ) ? 'active' : '' ;?>">
									<a href="<?php tigaPage('url') ?>?cat=news#content">
										<span>News</span>
									</a>
								</li>
								<li class="cat-item <?= ( isset($_GET['cat']) && $_GET['cat'] == 'cafe-crafting' ) ? 'active' : '' ;?>">
									<a href="<?php tigaPage('url') ?>?cat=cafe-crafting#content">
										<span>Café Crafting</span>
									</a>
								</li>
								<li class="cat-item <?= ( isset($_GET['cat']) && $_GET['cat'] == 'barista-secrets' ) ? 'active' : '' ;?>">
									<a href="<?php tigaPage('url') ?>?cat=barista-secrets#content">
										<span>Barista Secrets</span>
									</a>
								</li>
							</ul>
						</div>

					</div>
					<div class="col-12 col-lg-auto">
						<div class="tj-hide-on-mobile tj-hide-on-tablet">
							<?php get_template_part( 'template-parts/search-form-toggle', '', ['placeholder' => 'Enter Your Search Keywords...',]); ?>
						</div>
						<div class="tj-hide-on-desktop">
							<?php get_template_part( 'template-parts/search-form-toggle', '', ['type' => 'expanded', 'placeholder' => 'Enter Your Search Keywords...',]); ?>
						</div>
					</div>					

				</div>


				<div class="content-show">
					<!-- Showing all <span class="count">20</span> results -->
				</div>

				<?php
				$contents = [
					[
						'link' => get_home_url() . '/html/single-post',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-1.jpg',
						'title' => 'Espresso Maker VS Coffee Maker - Difference and Comparison',
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
						'excerpt' => 'Over the years we have worked and sourced coffees from a variety of different certification bodies for our different lines of Nespresso Original Machine Capsules and the compostable Keurig KCup pods. Here is an overview of some of these certifications and their focus areas:',
						'date' => '28 JAN 2023',
						'tag' => ['Barista', 'Natural', 'Store']
					],
					[
						'link' => get_home_url() . '/html/single-post',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-1.jpg',
						'title' => 'The Ultimate Guide to Brewing the Perfect Cup of Coffee',
						'excerpt' => 'Discover the secrets to brewing the perfect cup of coffee, from selecting the right beans to mastering the art of brewing.',
						'date' => '15 FEB 2023',
						'tag' => ['Brewing', 'Guide', 'Perfect']
					],
					[
						'link' => get_home_url() . '/html/single-post',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-3.jpg',
						'title' => 'Top 10 Coffee Shops You Must Visit',
						'excerpt' => 'Explore the top 10 coffee shops around the world that every coffee lover must visit at least once in their lifetime.',
						'date' => '10 MAR 2023',
						'tag' => ['Coffee Shops', 'Travel', 'Experience']
					],
					[
						'link' => get_home_url() . '/html/single-post',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-2.jpg',
						'title' => 'Health Benefits of Drinking Coffee Daily',
						'excerpt' => 'Learn about the various health benefits of drinking coffee daily, from boosting your energy levels to improving your overall health.',
						'date' => '05 APR 2023',
						'tag' => ['Health', 'Benefits', 'Daily']
					],
					[
						'link' => get_home_url() . '/html/single-post',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-3.jpg',
						'title' => 'The History of Coffee: From Ethiopia to Your Cup',
						'excerpt' => 'Trace the rich history of coffee from its origins in Ethiopia to its global popularity today, and how it became a staple in many cultures.',
						'date' => '20 MAY 2023',
						'tag' => ['History', 'Culture', 'Ethiopia']
					],
					[
						'link' => get_home_url() . '/html/single-post',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-2.jpg',
						'title' => 'How to Pair Coffee with Food',
						'excerpt' => 'Discover the art of pairing coffee with different types of food to enhance your dining experience and bring out the best flavors.',
						'date' => '15 JUN 2023',
						'tag' => ['Pairing', 'Food', 'Flavors']
					],
					[
						'link' => get_home_url() . '/html/single-post',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-1.jpg',
						'title' => 'Innovative Coffee Brewing Techniques to Try',
						'excerpt' => 'Stay ahead of the curve by trying out these innovative coffee brewing techniques that are taking the coffee world by storm.',
						'date' => '01 JUL 2023',
						'tag' => ['Innovation', 'Techniques', 'Brewing']
					],
				];
				?>


				<div class="row row-posts">
					
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

				<div class="pagination-wrap">
					<?php include_once('components/pagination.php'); ?>
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