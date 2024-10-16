<?php 
    $section_the_partners = get_field('section_the_partners');
    $heading = $section_the_partners['heading'];
    $leading = $section_the_partners['leading'];
    $partners = $section_the_partners['partner'];
?>
<section class="bg-gradient-3">
    <div class="container">
        <?=$heading?>
        <?=$leading?>
        <div class="custom-container-md">
            <div class="row">
                <?php foreach ($partners as $partner ) { ?>
                    <div class="col-md-6 d-flex pe-0 ps-0 pe-md-2 ps-md-2">
                        <div class="card card--partner m-0 m-lg-3 mb-3 p-3 border-0 text-center">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <img src="<?=$partner['partner_logo']['url']?>" class="img-fluid mx-auto mb-5" alt="<?=$partner['partner_logo']['alt']?>">
                                <h3 class="card-title fw-bold h5"><?=$partner['partner_title']?></h3>
                                <p class="card-text"><?=$partner['partner_descriptions']?></p>
                                <a href="<?=$partner['partner_link']?>" target="_blank" class="card-link text-decoration-none fw-bold d-flex justify-content-center align-items-center custom-text--external mx-auto">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>