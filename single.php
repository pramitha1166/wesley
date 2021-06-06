<?php get_header(); ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri().'/img/home-bg.jpg' ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php the_title(); ?></h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
                    get_template_part( '/template/content', 'article' );
                }
            }
        ?>
    </div>

    <hr>

 <?php get_footer() ?>
