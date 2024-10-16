<?php
  /* Template Name: Story single (draft) */
  get_header();
?>

<section class="bg-dark py-5">
    <div class="custom-container-md">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/story-1.png" alt="" class="img-fluid w-100">
    </div>
</section>

<section class="bg-gradient-2">
    <div class="custom-container-md">
        <div class="row">
            <div class="col-md-4">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/images/Martha.png" alt="" class="img-fluid w-100 mb-3 mb-md-0">
            </div>
            <div class="col-md-8 d-flex align-items-center">
                <div class="float-right" style="max-width: 600px">
                    <h2 class="fw-light ms-md-5 ms-0">“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum excepturi aliquam”</h2>
                    <em class="d-block font-by-line text-end">— Lorem, Cancer Patient</em>
                </div>
            </div>
        </div>
        <div class="row mt-5 pt-5">
            <h1 class="text-center fw-normal">LOREM’S STORY</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure obcaecati placeat unde minima esse inventore omnis, id eius non corrupti adipisci ducimus consequuntur ipsum. Beatae adipisci cum quasi dignissimos placeat.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure obcaecati placeat unde minima esse inventore omnis, id eius non corrupti adipisci ducimus consequuntur ipsum. Beatae adipisci cum quasi dignissimos placeat.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure obcaecati placeat unde minima esse inventore omnis, id eius non corrupti adipisci ducimus consequuntur ipsum. Beatae adipisci cum quasi dignissimos placeat.</p>
        </div>
    </div>
</section>

<section class="bg-gradient-3 border-bottom-0">
    <div class="custom-container-md">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto text-center">
                <p>Help others better understand the experiences of those living with cancer.</p>
                <?php get_template_part( 'template-parts/global/share-on-social'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/global/back-to-gallery'); ?>
<?php get_footer(); ?>