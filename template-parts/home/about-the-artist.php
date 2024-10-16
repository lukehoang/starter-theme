<?php 
    $section_about_the_artist = get_field('section_about_the_artist');
    $heading = $section_about_the_artist['heading'];
    $body = $section_about_the_artist['body'];
    $profile_picture = $section_about_the_artist['profile_picture'];
?>
<section class="bg-gradient-4" id="about-the-artist">
    <div class="container">
        <?=$heading?>

        <div class="card card-artist mb-3 border-0">
            <div class="row g-0">
                <div class="col-lg-4 col-md-5">
                    <img src="<?=$profile_picture['url']?>" class="img-fluid rounded-start about-the-artist__photo" alt="<?=$profile_picture['alt']?>">
                </div>
                <div class="col-lg-8 col-md-7 p-2 p-md-5 d-flex justify-content-center align-items-center">
                    <div class="card-body">
                        <?=$body?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>