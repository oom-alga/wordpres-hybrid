document.addEventListener('DOMContentLoaded', function() {
    
    if (typeof Swiper !== 'undefined') {
        var swiperHighlight = new Swiper(".swiper-highlight", {
            lazy: true,
            slidesPerView: 1,
            spaceBetween: 0,
            rewind: true,
            navigation: {
                nextEl: ".swiper-highlight ~ .swiper-button-next",
                prevEl: ".swiper-highlight ~ .swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
            },
        });
    
        var swiperProductGallery = new Swiper(".swiper-product-gallery-slider", {
            lazy: true,
            slidesPerView: 1,
            spaceBetween: 0,
            rewind: true,
            navigation: {
                nextEl: ".swiper-product-gallery-slider ~ .swiper-button-next",
                prevEl: ".swiper-product-gallery-slider ~ .swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
        });
        
    }

    //==============================================================

    //Modal Popup
    // Mendapatkan elemen close button
    const closeButtons = document.querySelectorAll('.modal-close');

    // Mendapatkan elemen modal popup dan modal item
    const modalPopup = document.querySelector('.modal-popup');
    const modalItems = document.querySelectorAll('.modal-item');

    // Fungsi untuk menghapus class .active dari modal popup dan semua modal item
    function closeModal() {
        modalPopup.classList.remove('active');
        modalItems.forEach(modalItem => modalItem.classList.remove('active'));
    }

    // Event listener untuk close button
    closeButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.stopPropagation(); // Mencegah event bubbling ke modal popup
            closeModal();
        });
    });

    // Event listener untuk klik di luar modal item
    if ( modalPopup ) {
        modalPopup.addEventListener('click', function (event) {
            if (!event.target.closest('.modal-item')) {
                closeModal();
            }
        });
    }

    //==============================================================

    // Seleksi semua elemen yang memiliki atribut data-popup
    const popupTriggers = document.querySelectorAll('[data-popup]');

    // Tambahkan event listener untuk setiap elemen tersebut
    popupTriggers.forEach(trigger => {
        trigger.addEventListener('click', function (e) {
            e.preventDefault();
            // Ambil nilai dari atribut data-popup
            const popupSelector = e.currentTarget.getAttribute('data-popup');
            // Seleksi elemen yang sesuai dengan selector di data-popup
            const popupElement = document.querySelector(popupSelector);
            // Seleksi elemen .modal-popup
            const modalPopup = document.querySelector('.modal-popup');

            if (popupElement && modalPopup) {
                // Tambahkan class .active pada elemen yang sesuai dengan selector
                popupElement.classList.add('active');
                // Tambahkan class .active pada .modal-popup
                modalPopup.classList.add('active');
            }
        });
    });

    //==============================================================

    //Search toggle
    document.querySelectorAll('.search-form-wrapper').forEach(function (searchFormWrapper) {
        const toggleButton = searchFormWrapper.querySelector('.btn-toggle');
        const inputField = searchFormWrapper.querySelector('.form-control');
    
        toggleButton?.addEventListener('click', function () {
            searchFormWrapper.classList.toggle('active');
    
            if (searchFormWrapper.classList.contains('active')) {
                inputField?.focus();
            }
        });
    
        document.addEventListener('click', function (event) {
            // Cek jika klik terjadi di luar searchFormWrapper
            if (!searchFormWrapper.contains(event.target)) {
                searchFormWrapper.classList.remove('active');
            }
        });
    });

    //=============================================================

    //Scroll spy
    const sections = document.querySelectorAll('.content-item');
    const menuItems = document.querySelectorAll('.info-content .item');
    const scrollMarginTop = 145; // Set the scroll margin top value in pixels

    // Function to remove .active from all items
    function removeActiveClass() {
        menuItems.forEach(item => item.classList.remove('active'));
        sections.forEach(section => section.classList.remove('active'));
    }

    // Function to add .active class based on the current fragment identifier
    function setActiveClassFromHash() {
        const hash = window.location.hash;

        if (hash) {
            const targetSection = document.querySelector(hash);
            const targetMenuItem = document.querySelector(`.info-content a[href="${hash}"]`)?.parentElement;

            if (targetSection && targetMenuItem) {
                removeActiveClass();
                targetSection.classList.add('active');
                targetMenuItem.classList.add('active');

                // Adjust scroll position to account for the margin-top
                window.scrollTo({
                    top: targetSection.offsetTop - scrollMarginTop,
                    behavior: 'smooth'
                });
            }
        }
    }

    // Set the .active class based on the current URL on page load
    setActiveClassFromHash();

    // Scroll Spy functionality
    window.addEventListener('scroll', function () {
        let currentSection = null;

        sections.forEach(section => {
            const sectionTop = section.offsetTop - scrollMarginTop;
            const sectionHeight = section.offsetHeight;
            if (window.scrollY >= sectionTop - sectionHeight / 3 && window.scrollY < sectionTop + sectionHeight - sectionHeight / 3) {
                currentSection = section;
            }
        });

        if (currentSection) {
            const targetMenuItem = document.querySelector(`.info-content a[href="#${currentSection.id}"]`)?.parentElement;

            if (targetMenuItem) {
                removeActiveClass();
                currentSection.classList.add('active');
                targetMenuItem.classList.add('active');
            }
        }
    });

    // Update .active class on hash change (e.g., when clicking a menu item)
    window.addEventListener('hashchange', function () {
        setActiveClassFromHash();
    });
    
    //=====================================================

    const copyButtons = document.querySelectorAll('.copy-link');

    copyButtons.forEach(button => {
        button.addEventListener('click', function () {
            const textToCopy = this.getAttribute('data-clipboard-text');

            // Create a temporary input element to hold the text to be copied
            const tempInput = document.createElement('input');
            tempInput.setAttribute('value', textToCopy);
            document.body.appendChild(tempInput);

            // Select the text inside the input and copy it
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); // For mobile devices
            const successful = document.execCommand('copy');

            // Remove the temporary input element
            document.body.removeChild(tempInput);

            if (successful) {
                // If the copy is successful, add the title attribute
                this.setAttribute('title', 'Copied permalink to clipboard');

                // Remove the title attribute after 5 seconds
                setTimeout(() => {
                    this.removeAttribute('title');
                }, 5000); // 5000 milliseconds = 5 seconds
            } else {
                // Optionally, handle the case where the copy failed
                this.setAttribute('title', 'Failed to copy permalink');

                // Remove the title attribute after 5 seconds
                setTimeout(() => {
                    this.removeAttribute('title');
                }, 5000);
            }
        });
    });
});
