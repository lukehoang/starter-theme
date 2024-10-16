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
                <?php
                    //Set up a counter
                    $counter = 0;
                    $args = array(  
                        'post_type' => 'portrait',
                        'posts_per_page' => 6,
                        'order'   => 'ASC'
                    ); 
                    $portraits = new WP_Query( $args ); 
                    while ( $portraits->have_posts() ) : $portraits->the_post(); $counter++;
                        $portrait = get_field('portrait');
                        $artists_profile_picture = get_field('artists_profile_picture');
                        $artists_fname = get_field('artists_name');
                        $artists_last_name = get_field('artists_last_name');
                        $artists_title = get_field('artists_title');
                        $artist_quote = get_field('artist_quote');
                        if( $counter % 2 != 0 ) :?>

                            <a href="<?=the_permalink();?>" class="card card--portrait text-decoration-none">
                                <div class="card-img-top">
                                    <?php if($portrait):?>
                                        <img src="<?=$portrait['url']?>" class="zoom-effect" alt="<?=$portrait['alt']?>">
                                    <?php else:?>
                                        <img src="/wp-content/themes/xds-theme/assets/images/portrait-in-progress.png" class="zoom-effect portrait-wip" alt="PortrAIt in Progress">
                                        <div class="portrait-wip-banner">PortrAIt in Progress</div>
                                    <?php endif;?>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title fw-light h3">“<?=$artist_quote?>”</h2>
                                    <p class="card-text fst-italic text-end card-patient-name font-family-PTSerif-Regular">— <?=$artists_fname?> <?=$artists_last_name?>, <?=$artists_title?></p>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="card-link fw-bold d-flex justify-content-center align-items-center">READ <?=strtoupper($artists_fname)?>'S STORY<span class="dashicons dashicons-arrow-right-alt2 text-bright-orange ms-2 fw-bold"></span></div>
                                </div>
                            </a>
                        
                    <?php endif; 
                    endwhile;
                    wp_reset_postdata(); 
                ?>
            </div>
            <div class="col-md-6 d-flex flex-column col-right">
                <?php
                    //Set up a counter
                    $counter = 0;
                    $args = array(  
                        'post_type' => 'portrait',
                        'posts_per_page' => 6,
                        'order'   => 'ASC'
                    ); 
                    $portraits = new WP_Query( $args ); 
                    while ( $portraits->have_posts() ) : $portraits->the_post(); $counter++;
                        $portrait = get_field('portrait');
                        $artists_profile_picture = get_field('artists_profile_picture');
                        $artists_fname = get_field('artists_name');
                        $artists_last_name = get_field('artists_last_name');
                        $artists_title = get_field('artists_title');
                        $artist_quote = get_field('artist_quote');
                        if( $counter % 2 == 0 ) :?>

                            <a href="<?=the_permalink();?>" class="card card--portrait text-decoration-none">
                                <div class="card-img-top">
                                    <?php if($portrait):?>
                                        <img src="<?=$portrait['url']?>" class="zoom-effect" alt="<?=$portrait['alt']?>">
                                    <?php else:?>
                                        <img src="/wp-content/themes/xds-theme/assets/images/portrait-in-progress.png" class="zoom-effect portrait-wip" alt="PortrAIt in Progress">
                                        <div class="portrait-wip-banner">PortrAIt in Progress</div>
                                    <?php endif;?>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title fw-light h3">“<?=$artist_quote?>”</h2>
                                    <p class="card-text fst-italic text-end card-patient-name font-family-PTSerif-Regular">— <?=$artists_fname?> <?=$artists_last_name?>, <?=$artists_title?></p>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="card-link fw-bold d-flex justify-content-center align-items-center">READ <?=strtoupper($artists_fname)?>'S STORY<span class="dashicons dashicons-arrow-right-alt2 text-bright-orange ms-2 fw-bold"></span></div>
                                </div>
                            </a>
                        
                    <?php endif; 
                    endwhile;
                    wp_reset_postdata(); 
                ?>
                
            </div>
        </div>
    </div>
</section>