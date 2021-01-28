<?php
/*
Template Name: История
*/
?>

<?php
    get_header();
?>

        <div class="aboutus">
            <div class="container">
                <h1 class="title"><?php the_title() ?></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('sub-title-1') ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('history-1') ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history-img-1') ?>" alt="мир детства">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history-img-2') ?>" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('sub-title-2') ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('history-2') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('sub-title-3') ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('history-3') ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history-img-3') ?>" alt="мир детства">
                    </div>
                </div>
            </div>
        </div>

<?php
    get_footer();
?>