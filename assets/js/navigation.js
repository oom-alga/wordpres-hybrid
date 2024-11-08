document.addEventListener('DOMContentLoaded', function() {
    const collapseToggles = document.querySelectorAll('[data-bs-toggle="collapse"]');

    collapseToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            const targetSelector = this.getAttribute('data-bs-target');
            const target = document.querySelector(targetSelector);

            if (target) {
                target.classList.toggle('show');
				document.querySelector('body').classList.toggle('navbar-collapsed');
            }
            
            if( targetSelector === '#navbar-search' ){
                target.focus();
            }

            this.classList.toggle('collapsed');

            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
        });
    });

    //Header Sticky
    /* Header Scroll
		--------------------------------------------- */
	let positionTop = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
	window.addEventListener("scroll", headerScroll);

	function headerScroll() {
		const scroll = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
		const isScrollDown = scroll > positionTop;

		if (isScrollDown && scroll > 0) {
			document.querySelector("header.site-header.sticky").classList.add("scroll-down");
		} else {
			document.querySelector("header.site-header.sticky").classList.remove("scroll-down");
		}

		if (scroll > 0) {
			document.querySelector("header.site-header.sticky").classList.add("scrolled");
		} else {
			document.querySelector("header.site-header.sticky").classList.remove("scrolled");
		}

		positionTop = scroll;
	}

	setTimeout(function() {
		//Expand Button
		function menuBtnExpand($item) {
			const btnExpand = $item.querySelector('span.expand');
			btnExpand.addEventListener('click', ($expand) => {
				const menuParent = $expand.currentTarget.parentNode;
				menuParent.classList.toggle('show');
			});
		}

		const menuHasChild = document.querySelectorAll('.menu-item-has-children');
		if (menuHasChild[0]) {
			menuHasChild.forEach(($e) => {
				$e.classList.add('iconph');
				const expand = document.createElement('span');
				expand.className = 'expand';
				expand.innerHTML = '<i class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><polyline points="208 96 128 176 48 96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline></svg></i>';
				$e.prepend(expand);
				menuBtnExpand($e);
			});
		}
	}, 100);

    // const dropdownMenu = document.querySelectorAll('.navbar-nav .dropdown');

    // if (dropdownMenu[0]) {
        
    // }
});