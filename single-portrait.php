<?php
  /* Single Portrait Template */
  get_header();

  $portrait = get_field('portrait');
  $artists_profile_picture = get_field('artists_profile_picture');
  $artists_fname = get_field('artists_name');
  $artists_last_name = get_field('artists_last_name');
  $artists_title = get_field('artists_title');
  $artist_quote = get_field('artist_quote');
  $artists_story = get_field('artists_story');
  $cta_leading = get_field('cta_leading');
?>

<?php if($portrait):?>
<section class="bg-dark py-0">
    <div class="custom-container-md">
        <img src="<?=$portrait['url']?>" alt="<?=$portrait['alt']?>" class="img-fluid portrait-art">
    </div>
</section>
<?php endif; ?>

<section class="bg-gradient-2">
    <div class="custom-container-md">
        <div class="row">
            <div class="col-md-4">
                <img src="<?=$artists_profile_picture['url']?>" alt="<?=$artists_profile_picture['alt']?>" class="img-fluid w-100 mb-3 mb-md-0 portrait-artist">
            </div>
            <div class="col-md-8 d-flex align-items-center">
                <div class="float-right" style="max-width: 600px">
                    <h1 class="fw-light ms-md-5 ms-0 h2">“<?=$artist_quote?>”</h1>
                    <em class="d-block font-by-line text-end">— <?=$artists_fname?> <?=$artists_last_name?>, <?=$artists_title?></em>
                </div>
            </div>
        </div>
        <div class="row mt-5 pt-5">
            <h2 class="text-center fw-normal h1"><?=strtoupper($artists_fname)?> <?=strtoupper($artists_last_name)?>’S STORY</h2>
            <?=$artists_story?>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <?php if ( (get_adjacent_post(false, '', true)) ){ ?>
                <?php previous_post_link('%link', 'Previous') ?>
            <?php } ?>
            <?php if ( (get_adjacent_post(false, '', false)) ) { ?>
                <?php next_post_link('%link', 'Next') ?>
            <?php } ?>
        </div>
    </div>
</section>

<section class="bg-gradient-3 border-bottom-0">
    <div class="custom-container-md">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto text-center">
                <p><?=$cta_leading?></p>
                <?php get_template_part( 'template-parts/global/share-on-social'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/global/back-to-gallery'); ?>
<?php get_footer(); ?>