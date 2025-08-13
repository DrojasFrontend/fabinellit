<?php 
/* 
* Template Name: About
*/

// Manejar las peticiones AJAX del RSVP
// handle_rsvp_ajax();

get_header();
?>

<main class="overflow-hidden">
    <div class="py-5"></div>
    <div class="py-5"></div>
    <div class="py-5"></div>

    <section class="customSectionGallery">
        <div class="position-relative">
            <div class="py-5"></div>
            <div class="py-5"></div>
            <div class="py-5"></div>
            <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-1" src="<?php echo THEME_IMG; ?>bg-gallery.webp" alt="Background Gallery">
            <div class="py-3"></div>
            <div class="container position-relative z-3">
                <div class="row">
                    <div class="col-12 col-lg-9 mx-auto px-xl-0 px-4">
                        <div class="customSectionBox customSectionBox__2 customSectionBox__4 shadow-1 px-xl-0 px-3">
                            <!-- <img class="customSectionGallery__decorative" src="<?php echo THEME_IMG; ?>decorative-border.webp" alt="Decorative Border 2"> -->
                            <img class="customSectionGallery__center" src="<?php echo THEME_IMG; ?>decorative-center.webp" alt="Decorative Center">

                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <div class="col-12 pb-xl-5 pb-5 px-xl-4">
                                        <img class="customSectionGallery__tree-1 position-absolute" src="<?php echo THEME_IMG; ?>tree-1.webp" alt="Tree 1">
                                        <img class="customSectionGallery__tree-2 position-absolute" src="<?php echo THEME_IMG; ?>tree-2.webp" alt="Tree 2">
                                        <div class="py-xl-5 py-4"></div>
                                        <div class="py-xl-3"></div>
                                        <div class="pt-xl-0 pt-3"></div>
                                        <h2 class="font-titulo text-center fs-xl-lg-1 fs-2-md mb-4">About Us</h2>
                                        <p class="fs-xl-5 fs-p-md letter-spacing-15 mb-4 text-center">
                                            Fabi and Nellit met like many of the best stories do—not with a dramatic entrance, but with a shared moment that felt like it was leading somewhere. She was planning a surprise birthday party for her good friend. He was just one of the guests—someone she didn’t know, yet from the moment she reached out to invite him, she felt curious. His energy pulled her in: calm, confident, watchful. That night, under string lights in a Miami backyard, she kept catching herself watching him from the corner of her eye.
                                        </p>
                                        <p class="fs-xl-5 fs-p-md letter-spacing-15 text-center mb-5">
                                            They were in different schools, living different lives. And yet, there was a quiet tension between them—familiar yet new. Something magnetic: a slow dance of drawing close, drifting apart, and returning again. There wasn’t a single moment—they drifted toward each other slowly, like the tide pulling in. Subtle glances, shared silences, a pull that deepened before either of them had the words for it.
                                        </p>

                                        <h2 class="font-titulo text-center fs-xl-sm-1 fs-2-md mb-4">Leave Us a Message</h2>
                                        <p class="fs-xl-5 fs-p-md letter-spacing-15 text-center mb-5">
                                            We'd love to read your words before the big day.
                                        </p>
                                        <p class="fs-xl-5 fs-p-md letter-spacing-15 text-center mb-5" style="font-style: italic;">
                                           Whether you're celebrating with us in person or in spirit, your presence means the world to us. If you’d like to share a few words, a special memory, or a wish for our future, this is the perfect place to do it. We’ll treasure every message!
                                        </p>

                                        <?php echo do_shortcode('[contact-form-7 id="171c1e1" title="Form Message"]'); ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</main>

<?php 
get_footer();
?>