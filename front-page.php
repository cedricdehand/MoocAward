<?php get_header(); ?>

<div class="container-fluid" id=logos>
    <?php $query =new WP_Query(array('pagename'=> 'accueil'));
    if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content();
    endwhile; else:?>
    <p><?php _e('Sorry'); ?></p>
    <?php endif; ?>
</div>

<!-- Page Content -->
<div class="container-fluid" id="apropos">
    <!-- A propos Section -->
    <div class="row">
        <?php $query =new WP_Query(array('pagename'=> 'a-propos'));
            if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content();
            endwhile; else:?>
                <p><?php _e('Sorry'); ?></p>
        <?php endif; ?>
    </div>
    <!-- /.row -->
    <div class="container">
   <!-- A propos-colonnes Section -->
        <div class="row apropos-col" >

            <div class="col-md-4 colapopos">

                <?php $query =new WP_Query(array('pagename'=> 'a-propos-1'));

                if($query->have_posts()):while($query->have_posts()) : $query->the_post();?>

                    <h4><?php the_title(); ?></h4>

                    <?php the_content(); ?>

                <?php endwhile; else:?>

                    <p><?php _e('Sorry'); ?></p>

                <?php endif; ?>
            </div>

            <div class="col-md-4 colapopos">

                <?php $query =new WP_Query(array('pagename'=> 'a-propos-2'));

                if($query->have_posts()):while($query->have_posts()) : $query->the_post();?>

                    <h4><?php the_title(); ?></h4>

                    <?php the_content(); ?>

                <?php endwhile; else:?>

                    <p><?php _e('Sorry'); ?></p>

                <?php endif; ?>
            </div>

            <div class="col-md-4 colapopos">

                <?php $query =new WP_Query(array('pagename'=> 'a-propos-3'));

                if($query->have_posts()):while($query->have_posts()) : $query->the_post();?>

                    <h4><?php the_title(); ?></h4>

                    <?php the_content(); ?>

                <?php endwhile; else:?>

                    <p><?php _e('Sorry'); ?></p>

                <?php endif; ?>
            </div>
        </div>
    </div>
    <!--/.row-->
    <div class="row buttonassistez">

        <?php $query =new WP_Query(array('pagename'=> 'button-assistez'));

    if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>


    <button class="assistez"><a href="<?php echo the_content(); ?>">ASSISTEZ A L'EVENEMENT</a></button>

<?php endwhile; else:   ?>

    <p><?php _e('Sorry'); ?></p>

<?php endif; ?>
</div>
<!--/.row-->
</div>
<!-- /.container -->

<!-- Page Content -->

<div class="container" id="jury">

    <!-- Jury Section -->

    <div class="row">

        <?php $query =new WP_Query(array('pagename'=> 'le-jury'));

        if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php the_content();

        endwhile;endif;   

        $query =new WP_Query(array('category_name'=> 'jury' , 'posts_per_page' => 6  ));

        if($query->have_posts()):while($query->have_posts()) : $query->the_post();?>

         <div class="col-md-2 jury" >
			<a hred="<?php the_permalink(); ?>">
                <div class="Image_wrapper">
                    <?php the_post_thumbnail('thumbnail') ?>
                </div>
                <div class="Text_wrapper">
                    <h4><?php the_title(); ?></h4>
                    <?php the_excerpt();?>
                </div>
		  </a>
                </div>

        <?php endwhile; else: ?>

        <p><?php _e('Sorry'); ?></p>

    <?php endif; ?>

</div>
<!-- /.row -->
</div>
<!-- /.container -->


<div class="container-fluid" id="moocselection">
    <!-- Selection des moocs Section -->
    <div class="row">

        <?php $query =new WP_Query(array('pagename'=> 'la-selection-des-moocs'));

        if($query->have_posts()):while($query->have_posts()) : $query->the_post();?>

        <h1><?php the_title(); ?></h1>

        <?php the_content();

        endwhile; else: ?>

        <p><?php _e('Sorry'); ?></p>

    <?php endif; ?>

</div>
<!-- /.row -->
<div class="container">
 <div class="row">
    <div class="selection">

     <?php $categories = get_categories();


     foreach($categories as $category) { 

        $recherche=$category->name;

        if ($recherche != 'mooc' && $recherche != 'jury' && $recherche !='president'){ ?>

        <h3><i class="fa fa-chevron-right"></i> Award du mooc dans la catégorie : <?php echo $recherche; ?></h3>
        <div class=" row">
            <?php $query =new WP_Query(array('category_name'=> $recherche, 'posts_per_page' => 4  )); ?>


            <?php if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>
		
		<div class="col-md-2 mooc" >
			
                	<a href="<?php the_permalink(); ?>" >
                    		<?php the_post_thumbnail('thumbnail') ?>

                    		<h4><?php the_title(); ?></h4>

                    		<?php the_content();?>
			</a>
                </div>


            <?php endwhile; else: ?>

            <p><?php _e('Sorry'); ?></p>


        <?php endif; ?>
    </div> 

    <?php }

}?>
</div>
</div>

<!-- /.row -->

<div class="row buttonassistez">

    <?php $query =new WP_Query(array('pagename'=> 'button-assistez'));

    if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>


    <button class="assistez"><a href="<?php echo the_content(); ?>">ASSISTEZ A L'EVENEMENT</a></button>

<?php endwhile; else:   ?>

    <p><?php _e('Sorry'); ?></p>

<?php endif; ?>
</div>
<!--/.row-->
</div>
</div>

<!-- /.container -->

<div class="container" id="mapetderoulement">

    <div class="row" >
        <div class="col-md-6" id="map">
            <!-- Contact + déroulement Section -->

            <h1>CONTACT</h1>

            <?php echo do_shortcode('[wpgmza id="1"]'); ?>

        </div>


        <div class="co-md-6" id="deroulement">

        </div>
        <!-- /.container -->
    </div>

    <div class="row buttonassistez">

        <?php $query =new WP_Query(array('pagename'=> 'button-assistez'));

        if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>


        <button class="assistez"><a href="<?php echo the_content(); ?>">ASSISTEZ A L'EVENEMENT</a></button>

    <?php endwhile; else:   ?>

    <p><?php _e('Sorry'); ?></p>

<?php endif; ?>
</div>

</div>

<div class="container-fluid"  id="twitteretfaq">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                 <h1>Retrouvez-nous sur twitter</h1>
                <!-- Contact + déroulement Section -->
                <?php if(function_exists('ts_slider_func')){
                    echo do_shortcode('[tweets_slider]');
                } ?>
            </div>


            <div class="co-md-6" id="FAQ">

                <h1>F.A.Q</h1>

                <button class="faq"><a>Comment nous contacter ?</a></button>
                <p>Vous avez une question, une demande en particulier ? L’équipe des Mooc Awards est là pour vous répondre ! Ecrivez-nous à l’adresse suivante : xxx@moocawards.f</p>

                <button class="faq"><a>Comment soutenir votre Mooc ?</a></button>
                <p>Pour participer à cet évènement unique, il vous suffit de cliquer sur ce lien digitick.net/moocawards et de renseigner les champs demandés. Vous recevrez alors votre invitation par mail, à présenter le jour J.</p>

                <button class="faq"><a>Comment rejoindre l'équipe ?</a></button>
                <p>Même si la décision finale revient à notre jury d’exception, vous pouvez soutenir votre Mooc préféré à travers nos réseaux sociaux.</p>
                <!--<button class="faq"><a>Quelles sont les récompenses ?</a></button>-->
                <!--<p></p>-->
            </div>
            <!-- /.container -->
        </div>

        <div class="row buttonassistez">

            <?php $query =new WP_Query(array('pagename'=> 'button-assistez'));

            if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>


            <button class="assistez"><a href="<?php echo the_content(); ?>">ASSISTEZ A L'EVENEMENT</a></button>

            <?php endwhile; else:   ?>

            <p><?php _e('Sorry'); ?></p>

            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container-fluid"  id="partenaire">
    <div class="container">
        <div class="row">
            <?php $query =new WP_Query(array('pagename'=> 'partenaire'));
            if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content();
            endwhile; else:?>
                <p><?php _e('Sorry'); ?></p>
            <?php endif; ?>
        </div>
           


        </div>

        <div class="row buttonassistez">

            <?php $query =new WP_Query(array('pagename'=> 'button-assistez'));

            if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>


                <button class="assistez"><a href="<?php echo the_content(); ?>">ASSISTEZ A L'EVENEMENT</a></button>

            <?php endwhile; else:   ?>

                <p><?php _e('Sorry'); ?></p>

            <?php endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>