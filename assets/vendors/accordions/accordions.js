document.addEventListener('DOMContentLoaded', function() {
    //Accordion
    function funcAccordions() {
        var target = '.accordions';
        const accordions = document.querySelectorAll(target + " .accordion");

        if (accordions) {

            const openAccordion = (accordion) => {
                console.log('openAccordion');
                const content = accordion.querySelector(".accordion__content");

                if ( content ) {
                    accordion.classList.add("active");
                    content.style.maxHeight = content.scrollHeight + 48 + "px";
                }
            };

            const closeAccordion = (accordion) => {
                const content = accordion.querySelector(".accordion__content");

                if (content) {
                    accordion.classList.remove("active");
                    content.style.maxHeight = null;
                }
            };

            accordions.forEach((accordion, i) => {

                accordion.classList.add("accordion-" + i);
                var intro = accordion.querySelector(".accordion__head");
                var content = accordion.querySelector(".accordion__content");

                if (accordion.querySelector('.button-accordion-next')) {
                    accordion.querySelector('.button-accordion-next').addEventListener('click', function () {
                        closeAccordion(accordion);
                        openAccordion(accordion.nextElementSibling);

                        accordion.classList.add('done');
                    });
                }

                if (accordion.closest('.accordions').classList.contains('close-all')) {

                    closeAccordion(accordion);
                    intro.onclick = () => {
                        if (content.style.maxHeight) {
                            closeAccordion(accordion);
                        } else {
                            accordions.forEach((accordion) => closeAccordion(accordion));
                            openAccordion(accordion);
                        }
                    };

                } else if (accordion.closest('.accordions').classList.contains('open-all')) {

                    openAccordion(accordion);
                    intro.onclick = () => {
                        if (content.style.maxHeight) {
                            closeAccordion(accordion);
                        } else {
                            openAccordion(accordion);
                        }
                    };

                } else if (accordion.closest('.accordions').classList.contains('disabled')) {

                    openAccordion(accordion);
                    intro.onclick = () => {
                        if (content) {
                            if (content.style.maxHeight) {
                                openAccordion(accordion);
                            } else {
                                openAccordion(accordion);
                            }
                        }
                    };

                } else {
                    if (i == 0) {
                        openAccordion(accordion);
                    }

                    intro.onclick = () => {
                        if (content.style.maxHeight) {
                            closeAccordion(accordion);
                        } else {
                            accordions.forEach((accordion) => closeAccordion(accordion));
                            openAccordion(accordion);
                        }
                    };
                }

            });

        }
    }

    funcAccordions();

});