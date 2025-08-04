<?php 
/* 
* Template Name: Home
*/

// Manejar las peticiones AJAX del RSVP
handle_rsvp_ajax();

get_header();
?>

<main class="overflow-hidden">
    <section class="position-relative overflow-hidden">
        <div class="position-absolute top-0 left-0 w-100 h-100 z-1">
            <img class="w-100 h-100 object-fit-cover" src="<?php echo THEME_IMG; ?>fondo.webp" alt="Hero">
        </div>

        <img class="w-100 position-absolute top-0 left-0 z-2" src="<?php echo THEME_IMG; ?>hero.webp" alt="Hero">
        <img class="mt-100 w-100 position-absolute top-0 left-0 z-3" src="<?php echo THEME_IMG; ?>hero-2.webp" alt="Hero-2">

        <div class="position-relative z-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="py-5"></div>
                        <div class="py-5"></div>
                        <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                            <img class="w-auto d-none d-xl-block mb-2" src="<?php echo THEME_IMG; ?>logo.svg" alt="Logo">
                            <img width="150" height="150" class="d-block d-xl-none mb-2" src="<?php echo THEME_IMG; ?>logo-mobile.svg" alt="Logo">
                            <h1 class="fs-xl-3">FEBRUARY 5 -7, 2026</h1>
                            <h2 class="font-titulo fs-xl-md-2">Cartagena de Indias. Colombia</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5"></div>
            <div class="py-5"></div>
            <div class="py-5"></div>
            <div class="py-5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="customSectionBox text-center p-5">
                            <div class="p-3 pb-5">
                                <h2 class="font-titulo fs-xl-md-1 mb-2">Wedding</h2>
                                <p class="fs-xl-4 mb-2">February 7, 2026</p>
                                <h3 class="fs-xl-3 mb-2">CEREMONY</h3>
                                <p class="fs-xl-4 mb-2">7:00 P.M.</p>
                                <p class="fs-xl-4" style="line-height: 20px;">Catedral</p>
                                <p class="fs-xl-4 mb-3">Santa Catalina de Alejandria</p>
                                <a href="#" class="btn btn-primary mx-auto mb-4">Location</a>
    
                                <h3 class="fs-xl-3 mb-2">RECEPTION TO FOLLOW</h3>
                                <p class="fs-xl-4" style="line-height: 20px;">Centro de convenciones</p>
                                <p class="fs-xl-4 mb-3">Cartagena de Indias</p>
                                <a href="#" class="btn btn-primary mx-auto mb-5">Location</a>
    
                                <h3 class="font-titulo fs-xl-2">Dress Code</h3>
                                <img class="w-auto" src="<?php echo THEME_IMG; ?>dress-code.png" alt="Dress Code">
                                <h3 class="fs-xl-3 mb-2">BLACK TIE</h3>
                                <a href="#" class="btn btn-primary mx-auto mb-5">More Info</a>
    
                                <h2 class="font-titulo fs-xl-2 mb-3">Registry</h2>
                                <a href="#" class="btn btn-primary mx-auto">More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="py-5"></div>
                    <div class="py-5"></div>
                    <div class="col-12 col-lg-9 mx-auto">
                        <div class="position-relative customSectionBox customSectionBox__2 text-center p-5">
                            <img class="customSectionBox__flower-1 position-absolute top-0 w-auto d-none d-xl-block pointer-events-none" src="<?php echo THEME_IMG; ?>flower-1.webp" alt="Flower-1">
                            <img class="customSectionBox__flower-2 position-absolute bottom-0 w-auto d-none d-xl-block pointer-events-none" src="<?php echo THEME_IMG; ?>flower-2.webp" alt="Flower-1">
                            <div class="pt-5">
                                <h2 class="font-titulo fs-xl-md-1">Events</h2>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <img class="w-auto mb-3" src="<?php echo THEME_IMG; ?>welcome-cocktail.png" alt="Welcome Cocktail">
                                        <h2 class="font-titulo fs-xl-2">Welcome Cocktail</h2>
                                        <p class="fs-xl-4 mb-2">February 5, 2026</p>
                                        <p class="fs-xl-4 mb-3">6:00pm - 12:00am</p>
                                        <p class="fs-xl-4" style="line-height: 20px;">Baluarte</p>
                                        <p class="fs-xl-4 mb-3">San Francisco Javier</p>
                                        <a href="#" class="btn btn-primary mx-auto mb-4">Location</a>

                                        <h3 class="font-titulo fs-xl-2">Dress Code</h3>
                                        <img class="w-auto" src="<?php echo THEME_IMG; ?>welcome-cocktail-2.png" alt="Welcome Cocktail 2">
                                        <p class="fs-xl-5 mb-2">COCKTAIL CHIC</p>
                                        <button type="button" class="btn btn-primary mx-auto mb-4 border-0" data-bs-toggle="" data-bs-target="">More Info</button>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <img class="w-auto mb-3" src="<?php echo THEME_IMG; ?>island-day.png" alt="Welcome Cocktail">
                                        <h2 class="font-titulo fs-xl-2">Island Day</h2>
                                        <p class="fs-xl-4 mb-2">February 6, 2026</p>
                                        <p class="fs-xl-4 mb-3">10:00am - 4:00pm</p>
                                        <p class="fs-xl-4" style="line-height: 20px;">Agua Azul,</p>
                                        <p class="fs-xl-4 mb-3">Isla de Barú</p>
                                        <a href="#" class="btn btn-primary mx-auto mb-4">Location</a>

                                        <h3 class="font-titulo fs-xl-2">Dress Code</h3>
                                        <img class="w-auto" src="<?php echo THEME_IMG; ?>island-day-2.png" alt="Welcome Cocktail 2">
                                        <p class="fs-xl-5 mb-2">TROPICAL BEACHWEAR</p>
                                        <button type="button" class="btn btn-primary mx-auto mb-4 border-0" data-bs-toggle="" data-bs-target="">More Info</button>
                                    </div>
                                </div>
                            </div>
                            <div class="py-5"></div>
                            <div class="pt-5"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative customSectionBox__2-panoramica">
                <img class="w-100" src="<?php echo THEME_IMG; ?>panoramica-cartagena.webp" alt="Panoramica Cartagena">
            </div>
        </div>
    </section>

    <section class="customSectionRsvp position-relative">
        <div class="py-5"></div>
        <div class="position-absolute top-0 left-0 w-100 h-100">
            <img class="customSectionRsvp__bg w-100 h-100 object-fit-cover" src="<?php echo THEME_IMG; ?>hero-rsvp.webp" alt="RSVP">
        </div>
        <div class="container position-relative z-2">
            <div class="row">
                <div class="col-12 col-lg-9 mx-auto">
                    <div class="customSectionBox customSectionBox__2 customSectionBox__3 shadow-1 px-xl-0 px-3">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-9">
                                <div class="col-12">
                                    <div class="py-xl-5 py-4"></div>
                                    <h3 class="fs-xl-md-1 text-center text-red">R.S.V.P.</h3>
                                    <p class="font-titulo fs-xl-md-2 text-center text-red mb-4">We can t wait to celebrate with you.</p>
                                    <p class="fs-xl-5 text-center text-red letter-spacing-15">Please respond by October 10, 2025.</p>
                                    <div class="py-xl-5 py-3"></div>
                                    <?php echo do_shortcode('[contact-form-7 id="491dea7" title="Contact form 1"]'); ?>
                                    <p class="fs-xl-5 text-center text-red letter-spacing-15">For questions or more information, email us at</p>
                                    <p class="fs-xl-5 text-center text-red letter-spacing-15">confirmaciones@fabinellit.com</p>
                                    <p class="fs-xl-5 text-center text-red letter-spacing-15">or contact our concierge via WhatsApp:</p>
                                    <p class="fs-xl-5 text-center text-red letter-spacing-15">+57 321 849 2726</p>
                                    <div class="py-xl-5 py-3"></div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="py-5"></div>
    </section>

    <section class="customSectionGallery">
        <div class="position-relative">
            <div class="py-5"></div>
            <div class="py-5"></div>
            <div class="py-5"></div>
            <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-1" src="<?php echo THEME_IMG; ?>bg-gallery.webp" alt="Background Gallery">
            <div class="py-3"></div>
            <div class="container position-relative z-3">
                <div class="row">
                    <div class="col-12 col-lg-9 mx-auto">
                        <div class="customSectionBox customSectionBox__2 customSectionBox__4 shadow-1 px-xl-0 px-3">
                            <img class="customSectionGallery__decorative" src="<?php echo THEME_IMG; ?>decorative-border.webp" alt="Decorative Border 2">
                            <img class="customSectionGallery__center" src="<?php echo THEME_IMG; ?>decorative-center.png" alt="Decorative Center">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <div class="col-12 pb-5">
                                        <img class="customSectionGallery__tree-1 position-absolute w-auto" src="<?php echo THEME_IMG; ?>tree-1.webp" alt="Tree 1">
                                        <img class="customSectionGallery__tree-2 position-absolute w-auto" src="<?php echo THEME_IMG; ?>tree-2.webp" alt="Tree 2">
                                        <div class="py-xl-5 py-4"></div>
                                        <div class="py-xl-3"></div>
                                        <h2 class="font-titulo text-center fs-xl-sm-1">Fabiola & Nellit</h2>
                                        <div class="customSectionGallery__swiper py-3">
                                            <div class="swiper gallerySwiper px-2">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide py-3">
                                                        <div class="p-3 bg-white-100 shadow-1">
                                                            <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>gallery/gallery-1.webp" alt="Gallery 1">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide py-3">
                                                        <div class="p-3 bg-white-100 shadow-1">
                                                            <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>gallery/gallery-2.webp" alt="Gallery 2">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide py-3">
                                                        <div class="p-3 bg-white-100 shadow-1">
                                                            <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>gallery/gallery-3.webp" alt="Gallery 3">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide py-3">
                                                        <div class="p-3 bg-white-100 shadow-1">
                                                            <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>gallery/gallery-1.webp" alt="Gallery 1">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide py-3">
                                                        <div class="p-3 bg-white-100 shadow-1">
                                                            <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>gallery/gallery-2.webp" alt="Gallery 2">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide py-3">
                                                        <div class="p-3 bg-white-100 shadow-1">
                                                            <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>gallery/gallery-3.webp" alt="Gallery 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="font-titulo text-center fs-xl-sm-1">About Us</h2>
                                        <p class="fs-xl-5 letter-spacing-15 mb-4 text-center">
                                            Fabi and Nellit met like many of the best stories do—not with a dramatic entrance, but with a shared moment that felt like it was leading somewhere. She was planning a surprise birthday party for her good friend. He was just one of the guests—someone she didn’t know, yet from the moment she reached out to invite him, she felt curious. His energy pulled her in: calm, confident, watchful. That night, under string lights in a Miami backyard, she kept catching herself watching him from the corner of her eye.
                                        </p>
                                        <p class="fs-xl-5 letter-spacing-15 text-center mb-4">
                                            They were in different schools, living different lives. And yet, there was a quiet tension between them—familiar yet new. Something magnetic: a slow dance of drawing close, drifting apart, and returning again. There wasn’t a single moment—they drifted toward each other slowly, like the tide pulling in. Subtle glances, shared silences, a pull that deepened before either of them had the words for it.
                                        </p>
                                        <button type="button" class="btn btn-primary mx-auto border-0" data-bs-toggle="" data-bs-target="">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionPlaces position-relative">
        <img class="position-absolute top-0 start-0 w-100 object-fit-cover z-1" src="<?php echo THEME_IMG; ?>bg-gallery.webp" alt="Background Gallery">
        <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-1" src="<?php echo THEME_IMG; ?>bg-places.webp" alt="Background Places">
        <div class="d-flex justify-content-center">
            <img class="w-auto" src="<?php echo THEME_IMG; ?>decorative-center-2.png" alt="Decorative Center 2">
        </div>
        <div class="container position-relative z-3">
            <div class="row">
                <div class="py-5"></div>
                <h2 class="font-titulo fs-xl-md-1 text-red text-center">Countdown to the Wedding</h2>
                <div id="mi-countdown" data-countdown="2026-02-07 14:00:00"></div>
            </div>
            <div class="row">
                <div class="py-5"></div>
                <div class="col-12 col-lg-9 mx-auto">
                    <div class="position-relative customSectionBox customSectionBox__2 customSectionBox__4 customSectionBox__5 shadow-1 px-xl-5">
                        <img class="customSectionPlaces__flower" src="<?php echo THEME_IMG; ?>flower-3.png" alt="Flower 3">
                        <div class="text-center px-xl-5">
                            <div class="py-5"></div>
                            <h3 class="fs-xl-3 mb-3">ENJOY</h3>
                            <h2 class="font-titulo fs-xl-lg-1">Cartagena</h2>
                            <p class="fs-xl-5 letter-spacing-15 mb-4 px-xl-5">
                                We’re thrilled to be celebrating our wedding in Cartagena, Colombia’s coastal gem. A UNESCO World Heritage Site, this vibrant city is filled with history, charm, and color. Within the walled city, you’ll find cobblestone streets, lush plazas, and stunning colonial architecture.
                            </p>
                            <p class="fs-xl-5 letter-spacing-15 mb-4 px-xl-5">
                                The best way to experience Cartagena is on foot—wandering through its lively streets, filled with music, delicious food, and unique bars. We recommend staying within the walled city, where everything is just a short walk away.
                            </p>
                            <div class="py-4"></div>
                            <h2 class="font-titulo fs-xl-sm-1">Suggested by Us</h2>
                            <ul class="pt-5 px-4">
                                <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icons/icon-travel-info.svg" alt="Home 1"></span>
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-3 letter-spacing-15" href="/cartagena/#travel">TRAVEL INFO</a>
                                </li>
                                <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icons/icon-hotel.svg" alt="Home 1"></span>
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-3 letter-spacing-15" href="/cartagena/#hotels">HOTELS</a>
                                </li>
                                <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icons/icon-restaurants.svg" alt="Home 1"></span>
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-3 letter-spacing-15" href="/cartagena/#restaurants">RESTAURANTS</a>
                                </li>
                                <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icons/icon-brunch.svg" alt="Home 1"></span>
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-3 letter-spacing-15" href="/cartagena/#brunch">BRUNCH &amp; DESSERTS</a>
                                </li>
                                <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icons/icon-bars.svg" alt="Home 1"></span>
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-3 letter-spacing-15" href="/cartagena/#bars">BARS & PUBS</a>
                                </li>
                                <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icons/icon-beauty-salons.svg" alt="Home 1"></span>
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-3 letter-spacing-15" href="/cartagena/#beauty">BEAUTY SALONS</a>
                                </li>
                                <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable border-0" style="cursor: pointer;">
                                    <span class="icono"><img class="d-block" src="<?php echo THEME_IMG; ?>icons/icon-boutiques.svg" alt="Home 1"></span>
                                    <a class="fs-xl-3 text-primary letter-spacing-xl-3 letter-spacing-15" href="/cartagena/#boutiques">BOUTIQUES</a>
                                </li>
                            </ul>
                            <div class="py-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionPlaces__2">
        <div class="position-relative">
            <img class="position-absolute top-0 start-0 w-100 object-fit-cover z-0" src="<?php echo THEME_IMG; ?>bg-places-2.webp" alt="Background Places 2">
            <div class="py-5"></div>
            <div class="py-5"></div>
            <div class="py-5"></div>
            <div class="py-5"></div>
            <div class="pt-5"></div>
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12">
                        <h2 class="font-titulo fs-xl-md-1 text-center text-orange">Places to Visit</h2>
                        <?php echo get_template_part('template-parts/components/component-swiper-place'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5"></div>
    </section>
    <div class="py-2 bg-primary-2 position-relative w-100 d-block z-2" style="opacity: 0.6;"></div>
    <?php echo get_template_part('template-parts/components/component-map'); ?>
    <div class="py-2 bg-primary-2 position-relative w-100 d-block z-2" style="opacity: 0.6;"></div>
</main>

<?php 
get_footer();
?>