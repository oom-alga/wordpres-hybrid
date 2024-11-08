<?php
define( 'TIGA_VIEWS_PATH', 'template-html/' );

function tigaPage($get = '') {
    // Tentukan protokol yang digunakan (http atau https)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    // Dapatkan URL dari halaman saat ini
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    // Parse URL untuk mendapatkan path
    $parsed_url = parse_url($url, PHP_URL_PATH);

    if ($get == 'url') {
        // Gunakan home_url untuk mendapatkan URL home site dan tambahkan path yang diminta
        $get_url = home_url('/') . 'html/' . basename(trim($parsed_url, '/'));
        return $get_url;
    } else {
        // Gunakan basename untuk mengambil bagian terakhir dari path
        return basename(trim($parsed_url, '/'));
    }
}

function my_custom_body_class($classes) {
	
	//Simulasi body_class sesuai dengan Wordpress di Template HTML
    $classes[] = '';
    
    if ( in_array( tigaPage(), ['home'] ) ) {
        $classes[] = 'home page page-template page-template-template-homepage';
    }
    
	if ( in_array( tigaPage(), ['about'] ) ) {
        $classes[] = 'page page-template page-template-template-about';
    }

    if ( in_array( tigaPage(), ['products-system']) ) {
        $classes[] = 'page page-template page-template-template-products-system';
    }
    
	if ( in_array( tigaPage(), ['info-service']) ) {
        $classes[] = 'page page-template page-template-template-info-service';
    }

	if ( in_array( tigaPage(), ['blog'] ) ) {
        $classes[] = 'page blog page-template page-template-template-blog';
    }


    return $classes;
}
add_filter('body_class', 'my_custom_body_class');

function tiga_enqueue_script(){
	if ( in_array( tigaPage(), ['home'] ) ) {
		wp_enqueue_style( 'tsbt-home', TSBT_URI . '/assets/css/home.min.css', array(), TSBT_VER );
	}
	
	if ( in_array( tigaPage(), ['products-system', 'products', 'archive', 'blog', 'about', 'info-service'] ) ) {
		wp_enqueue_style( 'tsbt-page', TSBT_URI . '/assets/css/page.min.css', array(), TSBT_VER );
	}

	if ( in_array( tigaPage(), ['blog', 'single-product', 'single-product-machine', 'single-product-accessories'] ) ) {
		wp_enqueue_style( 'swiper', TSBT_URI . '/assets/vendors/swiper@8/swiper-bundle.min.css', array(), TSBT_VER );
		wp_enqueue_script( 'swiper', TSBT_URI . '/assets/vendors/swiper@8/swiper-bundle.min.js', array(), TSBT_VER );
	}
	
	if ( in_array( tigaPage(), ['info-service'] ) ) {
		wp_enqueue_style( 'accordions', TSBT_URI . '/assets/vendors/accordions/accordions.css', array(), TSBT_VER );
		wp_enqueue_script( 'accordions', TSBT_URI . '/assets/vendors/accordions/accordions.js', array(), TSBT_VER );
	}
	
	if ( in_array( tigaPage(), ['single-post', 'single-product', 'single-product-machine', 'single-product-accessories'] ) ) {
		wp_enqueue_style( 'tsbt-home', TSBT_URI . '/assets/css/single.min.css', array(), TSBT_VER );
	}

	wp_enqueue_script( 'main', TSBT_URI . '/assets/js/main.js', array(), TSBT_VER );
}

add_action( 'wp_enqueue_scripts', 'tiga_enqueue_script' );

add_action( 'tiga_route', function() {
	$path = get_template_directory() . '/' . TIGA_VIEWS_PATH;
	$templates = scandir($path);
	$excludes  = [
		// contoh
		// header.php,
		// footer.php
		'components/pagination.php'
	];
	$template_names = [];
	foreach ( $templates as $template ) {
		if ( '.' === $template || '..' === $template || in_array( $template, $excludes ) ) {
			continue;
		}
		$template_names[] = rtrim( $template, '.php' );
	}

	// register routes.
	foreach ( $template_names as $name ) {
		TigaRoute::get( '/html/' . $name, function() use ($name) {
			tiga_view($name);
		} );
	}
} );