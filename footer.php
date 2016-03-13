<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
           <div class="col-md-4">
			    <?php $query =new WP_Query(array('pagename'=> 'accueil'));
			    if($query->have_posts()):while($query->have_posts()) : $query->the_post(); ?>
			    <?php the_content();
			    endwhile; else:?>
			    <p><?php _e('Sorry'); ?></p>
			    <?php endif; ?>
			</div>
			
			<?php
			wp_nav_menu( array(
                'menu'              => 'footer',
                'theme_location'    => 'footer',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse col-md-4',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar',
        	));
        	wp_nav_menu( array(
                'menu'              => 'socialfooter',
                'theme_location'    => 'socialfooter',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
        	));
        ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>