<?php $menuNav = get_field('menu_navigation'); ?>
<?php
$logo = get_field( 'logo_site' );
if ( ! empty( $logo ) ) {
	$logo_url    = wp_get_attachment_image_url( $logo['ID'], 'full' );
	$logo_width  = $logo['width'];
	$logo_height = $logo['height'];
} else {
	$logo_url = TSBT_URI . '/assets/images/default-logo.png';
	$logo_width  = 150;
	$logo_height = 30;
}
?>
<header class="site-header <?= get_field('navbar_position'); ?>">
	<nav class="navbar shadow-sm navbar-expand-lg bg-light">
		<div class="tj-container">
			<a class="navbar-brand" href="<?php echo site_url(); ?>">
				<img src="<?php echo esc_url( $logo_url ) ?>" alt="Logo" width="<?php echo esc_attr( $logo_width ) ?>" height="<?php echo esc_attr( $logo_height ) ?>" />
			</a>
			<div class="collapse navbar-collapse justify-content-<?= get_field('menu_position') ?>" id="navbar-mobile">

				<?php if ( !empty( get_field( 'search_form' ) ) ) { ?>
					<form action="<?php echo site_url(); ?>" role="search" class="navbar-search" id="navbar-search">
						<div class="input-group border border-dark-subtle">
							<input class="form-control border-0" type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search" aria-label="Search">
							<button class="btn" type="submit">
								<?php tsbt_get_svg( 'icon-search' ); ?>
							</button>
						</div>
					</form>
				<?php } ?>

				<?php
					wp_nav_menu(
						 array(
							'theme_location' => 'main-menu',
							'container'      => false,
							'menu_class'     => 'main-menu navbar-nav',
							'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
							'walker'         => new WP_Bootstrap_Navwalker(),
						)
					 );
				?>
			</div>
            
            <div class="d-flex gap-3 nav-action">

				<?php if ( !empty( get_field( 'search_form' ) ) ) { ?>
					<button class="toggle-search" data-bs-toggle="collapse" data-bs-target="#navbar-search" aria-controls="navbar-search" aria-expanded="false" aria-label="Toggle Search">
						<i class="icon icon-open"><?php tsbt_get_svg( "icon-search" ); ?></i>
						<i class="icon icon-close"><?php tsbt_get_svg( "icon-x" ); ?></i>
					</button>
				<?php } ?>

                <?php if ( !empty( get_field( 'cta_button' ) ) ) { ?>
					<div class="button-action">
						<?php foreach ( get_field( 'cta_button' ) as $btn) { ?>
							<a href="<?= $btn['button_link'] ?>" class="wp-element-button <?= $btn['buton_style'] ?>">
								<span><?= $btn['button_text'] ?></span>
							</a>
						<?php }?>
					</div>
				<?php } ?>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-mobile" aria-controls="navbar-mobile" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="icon icon-open"><?php tsbt_get_svg( "icon-menu" ); ?></i>
                    <i class="icon icon-close"><?php tsbt_get_svg( "icon-x" ); ?></i>
                </button>
            </div>
		</div>
	</nav>
</header>