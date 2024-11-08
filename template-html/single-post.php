<?php 
/*
  Template Name: Single Post
*/
get_header('classic'); ?>

<div id="wrapper">

	<section class="section section-content-single">
		<div class="tj-container">

			<div class="breadcrumbs-wrap">
				<?php
				//Menggunakan plugin Breadcrumb NavXT (https://wordpress.org/plugins/breadcrumb-navxt/)
				include "components/breadcrumbs.php"; 
				echo breadcrumbs(
					[
						['Home', '#'],
						['What’s On', '#'],
						['Detail Articles', '#'],
					]
				);
				?>
			</div>

			<div class="tj-container-content">
				<h1 class="post-title">Espresso Maker VS Coffee Maker - Difference and Comparision</h1>

				<div class="row row-meta">
					<div class="col-12 col-md-auto">
						<div class="content-meta-wrap">
							<div class="meta-photo">
								<img src="<?= TSBT_URI ?>/template-html/images/single/author.png" alt="ALT TITLE">
							</div>
							<div class="meta-info">
								<div class="author-name">Hanif Mufid</div>
								<ul class="content-info">
									<li class="categories">
										<div class="categories-wrap">
											<a href="#">Recipes</a>
											<a href="#">Blog</a>
											<a href="#">Content</a>
										</div>
									</li>
									<li class="date-post">15 March, 2012</li>
									<li class="date-post">4 min read</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-auto">
						<div class="post-sharing-icons">
							<label class="label-share">Share:</label>
							<?php get_template_part('template-parts/sharer'); ?>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="tj-container">
			<figure class="wp-block-post-featured-image">
				<img src="<?= TSBT_URI ?>/template-html/images/single/featured-image.jpg" class="wp-post-image" alt="ALT TITLE">
				<figcaption class="wp-element-caption">Image Espresso Maker</figcaption>
			</figure>
			
			<div class="tj-container-content">
				<h2>What is coffee machine coffee?</h2>
				<p>Hot water is poured over ground coffee where it absorbs the flavours and oils of the beans. It then gradually drips through a filter into a mug or container below. It’s as simple as that. A premium option for anyone who prefers coffee maker style coffee is the Nespresso Vertuo machine. It has the ability to make larger volumes of coffee with less caffeine. It uses a similar brewing process to drip coffee known as centrifusion. The added bonus of this machine is that it can also make espresso for when you need a stronger drink.</p>

				<figure class="wp-block-image">
					<img src="<?= TSBT_URI ?>/template-html/images/single/post-image.jpg" alt="" class="wp-image-14054">
					<figcaption class="wp-element-caption">Image Espresso Maker</figcaption>
				</figure>


				<h3>The difference between espresso machines and coffee makers</h3>
				<p>It's all in the brewing method.</p>

				<h4>Roasting</h4>
				<p>Filter coffee beans are roasted with the brewing method in mind. The beans tend to be much lighter which preserves the acidity of the bean. In contrast, espresso roasts are usually much darker, and richer in flavour. This creates the intense flavour that espresso is famous for and also provides the strength of coffee required for mixing with milk to create cappuccinos and lattes.</p>

				<h4>Brewing</h4>
				<p>The finer grind of espresso coffee means that an espresso machine brews and pours within about 30 seconds. In contrast, the coarser grind of drip coffee means you may have to allow up to ten minutes of brewing time.</p>

				<h4>Price</h4>
				<p>The coffee maker is almost always the cheaper option due to its simple function and limited features. But if it is a barista style coffee that you are seeking it’s well worth investing in a quality espresso machine.</p>

				<div class="tags">
					<div class="tags-title">Archived:</div>
					<ul class="tags-list">
						<li class="item"><a href="#">Coffe</a></li>
						<li class="item"><a href="#">Coffe Maker</a></li>
						<li class="item"><a href="#">Coffe Machine</a></li>
						<li class="item"><a href="#">Espresso</a></li>
					</ul>
				</div>

				<div class="post-sharing-icons wide">
					<label class="label-share">Share:</label>
					<?php get_template_part('template-parts/sharer'); ?>
				</div>

				<div class="post-navigations-wrap">
					<div class="tj-row">
						<div class="col-12 col-lg-6">
							<div class="post-navigation">
								<div class="post-navigation-content">
									<div class="post-meta">
										<div class="icon">
											<?php tsbt_get_svg('icon-caret-left'); ?>
										</div>
										<p>Previous</p>
									</div>
									<h4>
										<a href="#" target="_self">How to Make a Perfect Espresso</a>
									</h4>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="post-navigation">
								<div class="post-navigation-content">
									<div class="post-meta">
										<p>Next</p>
										<div class="icon">
											<?php tsbt_get_svg('icon-caret-right'); ?>
										</div>
									</div>
									<h4>
										<a href="#" target="_self">What Type Of Coffee Certifications Exist - A Short Guide</a>
									</h4>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="section section-related-post section-posts">
		<div class="tj-container">

			<div class="section-head">
				<h3 class="title-section">Related Articles</h3>
			</div>
			<div class="section-body">
				<?php $contents = [
					[
						'link' => '#',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-1.jpg',
						'title' => 'Espresso Maker VS Coffee Maker - Difference and Comparision',
						'excerpt' => 'Coffee beans are made of 30% water soluble compounds, the remainder generally being cellulose. Golden cup coffee is to extract the 18-21% good soluble compounds from the beans.',
						'date' => '28 JAN 2023',
						'tag' => ['Barista', 'Natural', 'Store']
					],
					[
						'link' => '#',
						'thumb' => TSBT_URI . '/template-html/images/home/post-thumb-2.jpg',
						'title' => 'How to Make a Perfect Espresso',
						'excerpt' => 'Bring back this classic cocktail and enjoy it as an after work treat or while prepping dinner, and it is also perfect after dinner as a digestif.',
						'date' => '28 JAN 2023',
						'tag' => ['Barista', 'Natural', 'Store']
					],
					[
						'link' => '#',
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

			</div>

		</div>
	</section>
	
	
</div>

<?php get_footer('classic'); ?>