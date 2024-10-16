<?php 
    $profile_card = get_field('profile_card');
    $card_title = $profile_card['card_title'];
    $artists_name = $profile_card['artists_name'];
    $profile_picture = $profile_card['profile_picture'];

    $section_bio = get_field('section_bio');
    $heading = $section_bio['heading'];
    $body = $section_bio['body'];
?>
<section class="bg-gradient-1 border-bottom-0">
    <div class="custom-container-md">
        <div class="card card-artist mb-5 border-0">
            <div class="row g-0">
                <div class="col-lg-4 col-md-5">
                    <img src="<?=$profile_picture['url']?>" class="img-fluid rounded-start about-the-artist__photo" alt="<?=$profile_picture['alt']?>">
                </div>
                <div class="col-lg-8 col-md-7 p-5 d-flex justify-content-center align-items-center">
                    <div class="card-body">
                        <h1 class="card-title fw-normal pb-3"><?=$card_title?></h1>
                        <h2 class="fw-bold h4"><?=$artists_name?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-md-5 pt-1">
            <div class="col-md-12">
                <h2 class="card-title fw-normal pb-3 text-center h1"><?=$heading?></h2>
                <?=$body?>
            </div>
        </div>
    </div>
</section>