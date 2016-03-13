<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php the_title(); ?>
                    <hr>
                </h1>
            </div>
        </div>
        <!-- /.row -->



        <!-- Intro Content -->
        <div class="row">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>


            <div class="col-md-6">
                <img class="img-responsive" src="<?phpthe_post_thumbnail(); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="col-md-6">
                <?php the_content(); ?>
            </div>
            <?php endwhile; else:?>
                <p><?php _e('Sorry'); ?></p>
            <?php endif; ?>
        </div>
        <!-- /.row -->
        <hr>

    </div>
    <!-- /.container -->









<?php get_footer(); ?>