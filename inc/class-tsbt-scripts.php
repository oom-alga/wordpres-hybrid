<?php

class TSBT_Scripts {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
		add_action( 'enqueue_block_assets', [ $this, 'enqueue_editor_styles' ] );
		add_action( 'wp_footer', [ $this, 'wp_footer_script' ] );
	}

	public function enqueue_scripts() {
		wp_enqueue_style( 'tsbt-global', TSBT_URI . '/assets/css/global.min.css', array(), TSBT_VER );
		// wp_enqueue_style( 'tsbt-montserrat', TSBT_URI . '/assets/fonts/montserrat/style.css', array(), TSBT_VER );
		// wp_enqueue_script( 'tsbt-main', TSBT_URI . '/assets/js/main.js', array(), TSBT_VER );


		wp_enqueue_script( 'tsbt-navigation', TSBT_URI . '/assets/js/navigation.js', array(), TSBT_VER );

		if ( is_front_page() || is_home() || is_archive() ) {
			wp_enqueue_style( 'tsbt-home', TSBT_URI . '/assets/css/home.min.css', array(), TSBT_VER );
		}

		if ( is_archive() || is_search() || is_home() ) {
			wp_enqueue_style( 'tsbt-archive', TSBT_URI . '/assets/css/archive.min.css', array(), TSBT_VER );
		}

		if ( is_page() || is_archive() || is_home() || is_search() ) {
			wp_enqueue_style( 'tsbt-page', TSBT_URI . '/assets/css/page.min.css', array(), TSBT_VER );
		}

		if ( is_singular() ) {
			wp_enqueue_style( 'tsbt-single', TSBT_URI . '/assets/css/single.min.css', array(), TSBT_VER );
		}

		if ( is_404() ) {
			wp_enqueue_style( 'tsbt-404', TSBT_URI . '/assets/css/page.min.css', array(), TSBT_VER );
		}

		if ( is_home() || is_singular( array( 'coffee', 'machine', 'accessory' ) ) ) {
			wp_enqueue_style( 'swiper', TSBT_URI . '/assets/vendors/swiper@8/swiper-bundle.min.css', array(), TSBT_VER );
			wp_enqueue_script( 'swiper', TSBT_URI . '/assets/vendors/swiper@8/swiper-bundle.min.js', array(), TSBT_VER );
			wp_enqueue_style( 'tsbt-page', TSBT_URI . '/assets/css/page.min.css', array(), TSBT_VER );
		}

		if ( is_page_template( 'template-info-service.php' ) ) {
			wp_enqueue_style( 'accordions', TSBT_URI . '/assets/vendors/accordions/accordions.css', array(), TSBT_VER );
			wp_enqueue_script( 'accordions', TSBT_URI . '/assets/vendors/accordions/accordions.js', array(), TSBT_VER );
		}

		wp_enqueue_style( 'tsbt', get_stylesheet_uri(), array(), TSBT_VER );
	}

	public function enqueue_editor_styles() {
		wp_enqueue_style( 'tsbt-admin-editor', TSBT_URI . '/assets/css/admin-editor.min.css', array(), TSBT_VER );
	}

	public function wp_footer_script() { 
		global $arr_modal;
		global $arr_mega;
		?>
		<!-- <script>
			document.addEventListener('DOMContentLoaded', function () {

				const menuModals = <?php echo json_encode($arr_modal); ?>;
				if (menuModals.length > 0) {
					menuModals.forEach(menu => {
						const element = document.getElementById(menu['menu-id']);
						if (element) {
							const btnPopup = document.createElement('button');
							btnPopup.className = 'btn-modal';
							btnPopup.setAttribute('data-popup', menu['modal']);

							const navLink = element.querySelector('a.nav-link');
							if (navLink) {
								navLink.parentNode.insertBefore(btnPopup, navLink.nextSibling);
							}

							btnPopup.addEventListener('click', e => {
								e.preventDefault();
								const popupSelector = e.currentTarget.getAttribute('data-popup');
								const popupElement = document.querySelector(popupSelector);
								const modalPopup = document.querySelector('.modal-popup');

								if (popupElement && modalPopup) {
									popupElement.classList.add('active');
									modalPopup.classList.add('active');
								}
							})							
						}
					});
				}

				const megaMenus = <?php echo json_encode($arr_mega); ?>;
				if (megaMenus.length > 0) {
					megaMenus.forEach(menu => {
						const element = document.getElementById(menu['menu-id']);
						if (element) {
							// Create the dropdown-menu structure
							const dropdownMenu = document.createElement('div');
							dropdownMenu.className = 'dropdown-menu';

							const dropdownItem = document.createElement('div');
							dropdownItem.className = 'dropdown-item';
							dropdownMenu.appendChild(dropdownItem);

							const rowProducts = document.createElement('div');
							rowProducts.className = 'row row-products';
							dropdownItem.appendChild(rowProducts);

							// Loop through each mega menu item and create the structure
							menu['mega'].forEach(item => {
								const colDiv = document.createElement('div');
								colDiv.className = 'col-12 col-lg-4';

								const productCatItem = document.createElement('div');
								productCatItem.className = 'product-cat-item';

								const anchor = document.createElement('a');
								anchor.href = item['url'];

								const img = document.createElement('img');
								img.src = item['image'];
								img.className = 'thumb-item';

								const innerDiv = document.createElement('div');
								innerDiv.className = 'inner';

								const titleItem = document.createElement('div');
								titleItem.className = 'title-item';
								titleItem.textContent = item['menu_text'];

								// Append the elements to build the structure
								innerDiv.appendChild(titleItem);
								anchor.appendChild(img);
								anchor.appendChild(innerDiv);
								productCatItem.appendChild(anchor);
								colDiv.appendChild(productCatItem);
								rowProducts.appendChild(colDiv);
							});

							// Append the dropdown menu to the corresponding element
							element.appendChild(dropdownMenu);
						}
					});
				}

				const megaMenuItems = document.querySelectorAll('.has-mega-menu');
				megaMenuItems.forEach(function(item) {
					// Tambahkan class .menu-item-has-children dan .dropdown
					item.classList.add('menu-item-has-children', 'dropdown');

					// Temukan elemen <a> di dalam item
					const anchor = item.querySelector('a.nav-link');
					if (anchor) {
						// Tambahkan atribut dan class baru pada elemen <a>
						anchor.setAttribute('data-toggle', 'dropdown');
						anchor.setAttribute('aria-expanded', 'false');
						anchor.classList.add('dropdown-toggle');
						anchor.id = item.id + '-dropdown'; // Tambahkan id baru untuk elemen <a>
					}
				});
			});


		</script> -->
	<?php }

}
new TSBT_Scripts();

