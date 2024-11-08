<?php

/**
 * Get SVG content
 *
 * @param  string $icon      File name.
 * @param  string $directory Directory path.
 * @return string            SVG code.
 */
function tsbt_get_svg( $icon, $directory = '', $return = '' ) {
	$base = TSBT_DIR . '/assets/svgs/';
	$file_path = $base . untrailingslashit( $directory ) . '/' . $icon . '.svg';

	// Check if the file exists before trying to get its contents.
	if ( file_exists( $file_path ) ) {
		$svg_content = file_get_contents( $file_path );

		// If $return is true, return the content; otherwise, echo it.
		if ( $return ) {
			return $svg_content;
		} else {
			echo $svg_content;
		}
	}
}

/**
 * Get share url
 *
 * @param  string  $social  Social type.
 * @param  integer $post_id Post ID.
 * @return string           Share URL.
 */
function tsbt_get_share_url( $social, $post_id ) {
	$url = get_permalink( $post_id );
	$title = get_the_title( $post_id );
	$data_url = '';
	if ( 'facebook' === $social ) {
		$data_url = 'https://www.facebook.com/sharer.php?u=' . esc_url( $url ) . '&title=' . esc_attr( $title );
	} elseif ( 'twitter' === $social ) {
		$data_url = 'https://twitter.com/intent/tweet?text=' . urlencode( html_entity_decode( $title, ENT_COMPAT, 'UTF-8' ) ) . '+' . esc_url( $url );
	} elseif ( 'linkedin' === $social ) {
		$data_url = 'https://www.linkedin.com/shareArticle?url=' . esc_url( $url ) . '&title=' . esc_attr( $title );
	} elseif ( 'whatsapp' === $social ) {
		$data_url = '//api.whatsapp.com/send?text=' . urlencode( html_entity_decode( $title, ENT_COMPAT, 'UTF-8' ) ) . '%20' . esc_url( $url );
	} elseif ( 'telegram' === $social ) {
		$data_url = 'https://telegram.me/share/url?url=' . esc_url( $url ) . '&text=' . esc_attr( $title );
	} elseif ( 'email' === $social ) {
		$data_url = 'mailto:?subject=' . esc_attr( $title ) . '&body=' . $url;
	}
	return $data_url;
}


/**
 * Display Notice
 *
 * @return html notice
 */
function tsbt_onboarding_notice() {

	if ( defined( 'TSBT_SHOW_ONBOARDING_NOTICE' ) && TSBT_SHOW_ONBOARDING_NOTICE ) {
		$dismissed = get_user_meta( get_current_user_id(), 'dismissed_tsbt_onboarding_notice', true );
		?>
		<div class="notice notice-error">
			<h3>Dear Developer</h3>
			<p>Pastikan baca lebih dulu dokumentasi sebelum memulai development. Dokumentasi dapat dibaca <a href="https://devel-vvip.tongkolspace.com/base-theme/docs/" target="_blank">disini</a>.</p>
			<p>Jika tidak ingin notice ini muncul lagi kedepannya, silahkan edit file <code>functions.php</code> dan ubah value <code>TSBT_SHOW_ONBOARDING_NOTICE</code> menjadi <code>false</code>.</p>
		</div>
		<?php
	}
}

add_action( 'admin_notices', 'tsbt_onboarding_notice' );

function is_ios() {
	return wp_is_mobile() && preg_match( '/iPad|iPod|iPhone/', $_SERVER['HTTP_USER_AGENT'] );
}
function is_android() {
	return wp_is_mobile() && preg_match( '/Android/', $_SERVER['HTTP_USER_AGENT'] );
}

/**
 * Get field
 *
 * @param  string  $selector     The field name or key.
 * @param  mixed   $post_id      The post_id of which the value is saved against.
 * @param  boolean $format_value Whether or not to format the value as described above.
 * @return mixed
 */
function tsbt_get_field( $selector, $post_id = false, $format_value = true ) {
	if ( function_exists( 'get_field' ) ) {
		return get_field( $selector, $post_id, $format_value );
	}
	return '';
}

/**
 * Get page ID by page template
 *
 * @param  string $template Page template.
 * @param  string $order    Order.
 * @return int|boolean
 */
function tsbt_get_page_template_id( $template, $order = 'DESC' ) {
	$args = array(
		'post_type'  => 'page',
		'fields'     => 'ids',
		'nopaging'   => true,
		'meta_key'   => '_wp_page_template',
		'meta_value' => $template,
		'order'      => $order,
	);
	if ( function_exists( 'pll_current_language' ) ) {
		$args['lang'] = pll_current_language( 'slug' );
	}
	$pages = get_posts( $args );
	foreach ( $pages as $page ) {
		return $page;
	}
	return false;
}

/**
 * Get page url by page template
 *
 * @param  string $template Page template.
 * @return string|boolean
 */
function tsbt_get_page_template_url( $template ) {
	$page_id = tsbt_get_page_template_id( $template );
	if ( $page_id ) {
		return get_permalink( $page_id );
	}
	return false;
}

/**
 * Breadcrumbs
 *
 * @param  array $breadcrumbs Breadcrumbs.
 * @return string
 */
function tsbt_breadcrumbs( $breadcrumbs ) {
	if ( empty( $breadcrumbs ) || ! is_array( $breadcrumbs ) ) {
		return;
	}

	?>
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php foreach ( $breadcrumbs as $index => $breadcrumb ) : ?>
			<?php if ( $index > 0 ) : ?>
				<i class="caret-right"></i> 
			<?php endif; ?>
			<span property="itemListElement" typeof="ListItem">
				<?php if ( $index === count( $breadcrumbs ) - 1 ) : ?>
					<span property="name" class="post post-page current-item"><?php echo esc_html( $breadcrumb[0] ); ?></span>
				<?php else : ?>
					<a property="item" typeof="WebPage" title="<?php esc_attr_e( 'Go to', 'unakaffe' ); ?> <?php echo esc_attr( $breadcrumb[0] ); ?>" href="<?php echo esc_url( $breadcrumb[1] ); ?>" class="home">
						<span property="name"><?php echo esc_html( $breadcrumb[0] ); ?></span>
					</a>
				<?php endif; ?>
			</span>
		<?php endforeach; ?>
	</div>
	<?php
}

/**
 * Get reading time
 *
 * @param  string $content Content.
 * @param  int    $wpm     Words per minute.
 * @return int
 */
function tsbt_get_reading_time( $content, $wpm = 200 ) {
	$word_count = str_word_count( strip_tags( $content ) );
	$reading_time = ceil( $word_count / $wpm );
	return $reading_time;
}

/**
 * Get CTA from options
 *
 * @param  array $cta CTA.
 * @return array
 */
function tsbt_get_cta_option( $cta ) {
	$cta_option = tsbt_get_field( 'cta', 'option' );
	if ( empty( $cta['title'] ) ) {
		$cta['title'] = $cta_option['title'];
	}
	if ( empty( $cta['image'] ) ) {
		$cta['image'] = $cta_option['image'];
	}
	if ( empty( $cta['button']['label'] ) ) {
		$cta['button']['label'] = $cta_option['button']['label'];
	}
	if ( empty( $cta['button']['url'] ) ) {
		$cta['button']['url'] = $cta_option['button']['url'];
	}
	return $cta;
}

/**
 * Get Discover from options
 *
 * @param  array $discover Discover.
 * @return array
 */
function tsbt_get_discover_option( $discover ) {
	$discover_option = tsbt_get_field( 'products_discover', 'option' );
	if ( empty( $discover['title'] ) ) {
		$discover['title'] = $discover_option['title'];
	}
	if ( empty( $discover['description'] ) ) {
		$discover['description'] = $discover_option['description'];
	}
	if ( empty( $discover['image'] ) ) {
		$discover['image'] = $discover_option['image'];
	}
	if ( empty( $discover['button']['label'] ) ) {
		$discover['button']['label'] = $discover_option['button']['label'];
	}
	if ( empty( $discover['button']['url'] ) ) {
		$discover['button']['url'] = $discover_option['button']['url'];
	}
	return $discover;
}

/**
 * Get contact
 *
 * @return array
 */
function tsbt_get_contact() {
	$contact_info = tsbt_get_field( 'contact_info', 'option' );

	$phone_url = '';
	if ( ! empty( $contact_info['phone'] ) ) {
		$phone_url = $contact_info['phone'];
		$phone_url = str_replace( ' ', '', $phone_url );
		$phone_url = str_replace( '-', '', $phone_url );
		$phone_url = str_replace( '(', '', $phone_url );
		$phone_url = str_replace( ')', '', $phone_url );
		$phone_url = 'tel:' . $phone_url;
	}
	$contact_info['phone_url'] = $phone_url;

	$email_url = '';
	if ( ! empty( $contact_info['email'] ) ) {
		$email_url = $contact_info['email'];
		$email_url = 'mailto:' . $email_url;
	}
	$contact_info['email_url'] = $email_url;

	return $contact_info;
}

/**
 * Get term icon url
 *
 * @param  int    $term_id  Term ID.
 * @param  string $taxonomy Taxonomy.
 * @return string
 */
function tsbt_get_term_icon( $term_id, $taxonomy ) {
	$icon_url = '';
	$icon     = tsbt_get_field( 'icon', $taxonomy . '_' . $term_id );
	if ( isset( $icon['sizes']['thumbnail'] ) ) {
		$icon_url = $icon['sizes']['thumbnail'];
	}
	return $icon_url;
}
