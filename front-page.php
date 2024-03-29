<?php get_header(); ?>

<?php $r = $_SERVER['REQUEST_URI']; 
$r = explode('/', $r);
$r = array_filter($r);
$r = array_merge($r, array()); 

$endofurl = $r[2]; ?>


<div class="container-fluid" id=logos>
    <?php if ($endofurl == 'fr'){
     		$query = new WP_Query(array('pagename'=> 'accueil'));
    }else if($endofurl == 'en'){
		 $query = new WP_Query(array('pagename'=> 'home'));
    }
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
	<?php if ($endofurl == 'fr'){
        	$query = new WP_Query(array('pagename'=> 'a-propos'));
	}else if($endofurl == 'en'){
		$query = new WP_Query(array('pagename'=> 'about'));
	} 
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
		 <?php if ($endofurl == 'fr'){
     			$query =new WP_Query(array('pagename'=> 'a-propos-1'));
    		}else if($endofurl == 'en'){
		 	$query =new WP_Query(array('pagename'=> 'about-1'));
    		}

                if($query->have_posts()):while($query->have_posts()) : $query->the_post();?>

                    <h4><?php the_title(); ?></h4>

                    <?php the_content(); ?>

                <?php endwhile; else:?>

                    <p><?php _e('Sorry'); ?></p>

                <?php endif; ?>
            </div>

            <div class="col-md-4 colapopos">
		 <?php if ($endofurl == 'fr'){
     			$query =new WP_Query(array('pagename'=> 'a-propos-2'));
    		}else if($endofurl == 'en'){
		 	$query =new WP_Query(array('pagename'=> 'about-2'));
		}	

                if($query->have_posts()):while($query->have_posts()) : $query->the_post();?>

                    <h4><?php the_title(); ?></h4>

                    <?php the_content(); ?>

                <?php endwhile; else:?>

                    <p><?php _e('Sorry'); ?></p>

                <?php endif; ?>
            </div>

            <div class="col-md-4 colapopos">

		 <?php if ($endofurl == 'fr'){
     			$query =new WP_Query(array('pagename'=> 'a-propos-3'));
    		}else if($endofurl == 'en'){
		 	$query =new WP_Query(array('pagename'=> 'about-3'));
		}	


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
	 <?php if ($endofurl == 'fr'){
     			$query =new WP_Query(array('pagename'=> 'le-jury'));
    		}else if($endofurl == 'en'){
		 	$query =new WP_Query(array('pagename'=> 'judging-panel'));
		}	

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
                    <?php the_content();?>
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
	
	<?php if ($endofurl == 'fr'){
     			$query =new WP_Query(array('pagename'=> 'la-selection-des-moocs'));
    		}else if($endofurl == 'en'){
		 	$query =new WP_Query(array('pagename'=> 'selection'));
		}	

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

        if ($recherche != 'mooc' && $recherche != 'Jury' && $recherche != 'jury' && $recherche !='president' && $recherche != 'judging-panel' && $recherche !='JUDGING PANEL'){ ?>
	<?php if ($endofurl == 'fr'){ ?>
     			<h3><i class="fa fa-chevron-right"></i> Catégorie : <?php echo $recherche; ?></h3>
    		<?php }else if($endofurl == 'en'){ ?>
		 	<h3><i class="fa fa-chevron-right"></i> Catégory : <?php echo $recherche; ?></h3>
		<?php } ?>
        
        <div class=" row">
            <?php $query =new WP_Query(array('category_name'=> $recherche, 'posts_per_page' => 4  )); ?>


            <?php if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>
		
		<div class="col-md-3 mooc" >
			
            <a href="<?php the_permalink(); ?>" >
                <div class="Image_wrapper">
                    <?php the_post_thumbnail('medium') ?>
                </div>
                <div class="Text_wrapper">
            		<h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                </div>
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
		<?php if ($endofurl == 'fr'){ ?>

     			 	<h2>Comment vous rendre à l'évènement ? </h2>

    		<?php }else if($endofurl == 'en'){ ?>

		 		<h2>How to get to the event ? </h2>
		<?php } ?>

            <?php echo do_shortcode('[wpgmza id="1"]'); ?>

        </div>


        <div class="co-md-6" id="deroulement">
		  
			<?php if ($endofurl == 'fr'){
     			 	$query =new WP_Query(array('pagename'=> 'deroulement-de-la-soiree'));
    		}else if($endofurl == 'en'){
		 	$query =new WP_Query(array('pagename'=> 'course-of-the-evening'));
		}	


        if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>
	
	<h2><?php the_title(); ?></h2>

	<?php the_content(); ?>

    	    <?php endwhile; else:   ?>

            <p><?php _e('Sorry'); ?></p>

            <?php endif; ?>
        </div>
        <!-- /.container -->
    </div>

</div>

<div class="container-fluid"  id="twitteretfaq">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
		<?php if ($endofurl == 'fr'){ ?>
     			 	<h1>Retrouvez-nous sur twitter</h1>
    		<?php }else if($endofurl == 'en'){ ?>
		 		<h1>follow-us on twitter</h1>
		<?php }	?>
                <!-- Contact + déroulement Section -->
             	<a class="twitter-timeline" href="https://twitter.com/SpiritOnMoon" data-widget-id="711856284417527808">Tweets de @SpiritOnMoon</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>


            <div class="co-md-6" id="FAQ">

                <h1>F.A.Q</h1>
                <?php if ($endofurl == 'fr'){ ?>    		
                <div class="Question">
                    <button class="faq"><a>Comment nous contacter ?</a></button>
                    <p>Vous avez une question, une demande en particulier ? L’équipe des Mooc Awards est là pour vous répondre ! Ecrivez-nous à l’adresse suivrant : contact@moocawards.fr</p>
                </div>
                <div class="Question">
                    <button class="faq"><a>Soutenir votre mooc préféré ? C’est possible ! </a></button>
                    <p>Même si la décision finale revient à notre jury d’exception, vous pouvez soutenir votre Mooc préféré à travers nos réseaux sociaux. Restez connectés, des surprises vous attendent…</p>
                </div>
                <div class="Question">
                    <button class="faq"><a>Comment rejoindre l'équipe ?</a></button>
                    <p>Même si la décision finale revient à notre jury d’exception, vous pouvez soutenir votre Mooc préféré à travers nos réseaux sociaux.</p>
                </div>
		<?php }else if($endofurl == 'en'){ ?>

		 <div class="Question">
                    <button class="faq"><a> Contact-us ?</a></button>
                    <p> If you have any question or request, contact us at contact@moocawards.fr</p>
                </div>
                <div class="Question">
                    <button class="faq"><a>Support your favorite Mooc ? It’s possible !</a></button>
                    <p>Even if the final decision returned to our jury, you can support your favorite mooc by following us through our social networks! Stay tuned, surprises are coming soon...</p>
                </div>
                <div class="Question">
                    <button class="faq"><a>Comment rejoindre l'équipe ?</a></button>
                    <p>Même si la décision finale revient à notre jury d’exception, vous pouvez soutenir votre Mooc préféré à travers nos réseaux sociaux.</p>
                </div>
		<?php }	?>
                <!--<button class="faq"><a>Quelles sont les récompenses ?</a></button>-->
                <!--<p></p>-->
            </div>
            <!-- /.container -->
        </div>

    </div>
</div>
<div class="container-fluid"  id="partenaire">
    <div class="container">
        <div class="row">
		<?php if ($endofurl == 'fr'){
            		 $query =new WP_Query(array('pagename'=> 'partenaires'));
		}else if($endofurl == 'en'){
		 		$query =new WP_Query(array('pagename'=> 'parteners'));
		}	

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

<div class="modal">
    <div onclick="closeModal()" class="filter"></div>
    <div class="modal--content"></div>
</div>