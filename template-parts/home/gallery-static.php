<?php 
    $section_gallery = get_field('section_gallery');
    $heading = $section_gallery['heading'];
?>
<section class="bg-gradient-1">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12">
                <?=$heading?>
            </div>
        </div>
    </div>

    <div class="custom-container-md">
        <div class="row">
            <div class="col-md-6 d-flex flex-column">
                <!-- <a href="/martha" class="card card--portrait text-decoration-none">
                    <div class="card-img-top">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/Image-1.png" class="zoom-effect" alt="...">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-light">“I was an <em class="font-family-PTSerif-Regular">inferno</em>. It felt like I was burning down everything I’d worked so hard to build.”</h3>
                        <p class="card-text fst-italic text-end card-patient-name font-family-PTSerif-Regular">— Martha Mayweather, Cancer Patient</p>
                    </div>
                    <div class="card-footer text-center">
                        <div class="card-link fw-bold d-flex justify-content-center align-items-center">READ MARTHA’S STORY<span class="dashicons dashicons-arrow-right-alt2 text-bright-orange ms-2 fw-bold"></span></div>
                    </div>
                </a> -->
                <a href="/martha" class="card card--portrait text-decoration-none">
                    <div class="card-img-top">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/Image-1.png" class="zoom-effect" alt="...">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-light">“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum excepturi aliquam”</h3>
                        <p class="card-text fst-italic text-end card-patient-name font-family-PTSerif-Regular">— Lorem, Cancer Patient</p>
                    </div>
                    <div class="card-footer text-center">
                        <div class="card-link fw-bold d-flex justify-content-center align-items-center">READ LOREM'S STORY<span class="dashicons dashicons-arrow-right-alt2 text-bright-orange ms-2 fw-bold"></span></div>
                    </div>
                </a>

                <a href="#" class="card card--portrait text-decoration-none">
                    <div class="card-img-top">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/Image-3.png" class="zoom-effect" alt="...">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-light">“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum excepturi aliquam”</h3>
                        <p class="card-text fst-italic text-end card-patient-name font-family-PTSerif-Regular">— Lorem, Cancer Patient</p>
                    </div>
                    <div class="card-footer text-center">
                        <div class="card-link fw-bold d-flex justify-content-center align-items-center">READ LOREM'S STORY<span class="dashicons dashicons-arrow-right-alt2 text-bright-orange ms-2 fw-bold"></span></div>
                    </div>
                </a>

                <a href="#" class="card card--portrait text-decoration-none">
                    <div class="card-img-top">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/Image-5.png" class="zoom-effect" alt="...">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-light">“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum excepturi aliquam”</h3>
                        <p class="card-text fst-italic text-end card-patient-name font-family-PTSerif-Regular">— Lorem, Cancer Patient</p>
                    </div>
                    <div class="card-footer text-center">
                        <div class="card-link fw-bold d-flex justify-content-center align-items-center">READ LOREM'S STORY<span class="dashicons dashicons-arrow-right-alt2 text-bright-orange ms-2 fw-bold"></span></div>
                    </div>
                </a>

            </div>
            <div class="col-md-6 d-flex flex-column col-right">
                
                <a href="#" class="card card--portrait text-decoration-none">
                    <div class="card-img-top">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/Image-2.png" class="zoom-effect" alt="...">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-light">“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum excepturi aliquam”</h3>
                        <p class="card-text fst-italic text-end card-patient-name font-family-PTSerif-Regular">— Lorem, Cancer Patient</p>
                    </div>
                    <div class="card-footer text-center">
                        <div class="card-link fw-bold d-flex justify-content-center align-items-center">READ LOREM'S STORY<span class="dashicons dashicons-arrow-right-alt2 text-bright-orange ms-2 fw-bold"></span></div>
                    </div>
                </a>

                <a href="#" class="card card--portrait text-decoration-none">
                    <div class="card-img-top">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/Image-4.png" class="zoom-effect" alt="...">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-light">“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum excepturi aliquam”</h3>
                        <p class="card-text fst-italic text-end card-patient-name font-family-PTSerif-Regular">— Lorem, Cancer Patient</p>
                    </div>
                    <div class="card-footer text-center">
                        <div class="card-link fw-bold d-flex justify-content-center align-items-center">READ LOREM'S STORY<span class="dashicons dashicons-arrow-right-alt2 text-bright-orange ms-2 fw-bold"></span></div>
                    </div>
                </a>

                <a href="#" class="card card--portrait text-decoration-none">
                    <div class="card-img-top">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/Image-6.png" class="zoom-effect" alt="...">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-light">“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum excepturi aliquam”</h3>
                        <p class="card-text fst-italic text-end card-patient-name font-family-PTSerif-Regular">— Lorem, Cancer Patient</p>
                    </div>
                    <div class="card-footer text-center">
                        <div class="card-link fw-bold d-flex justify-content-center align-items-center">READ LOREM'S STORY<span class="dashicons dashicons-arrow-right-alt2 text-bright-orange ms-2 fw-bold"></span></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>