<?php
/*
	Template Name: Page Main
*/
?>
    <?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <div class="header-container">
                <!--<figure><img src="http://localhost:8888/FelixTreitler/wp-content/themes/felix/images/landscape.jpg"><figcaption>here</figcaption></figure>-->
                <div class="header-title title-header">
                    <h2 class="h2-style site-title">
                        <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h2>

                </div>
                <!--    <div class="header-meta">
                    <h3>
                        
                    </h3>
                </div>-->
                <div class="header-right"></div>
            </div>

            <div class="header-title">
                <h2 class="h2-style">
                    <a href="https://felixtreitler.org">
                        <?php the_field('header_title'); ?>
                    </a>
                </h2>
                <p class="header-meta">
                    <?php the_field('header_meta'); ?>
                </p>
            </div>
            <!--    <div class="header-meta">
                    <h3>
                        
                    </h3>
                </div>-->
            <div class="header-right">
                <div class="btn btn-primary btn-lg" role="button">
                    <div class="teleicon"><i class="fa fa-mobile fa-3x" aria-hidden="true"></i></div>
                    <div class="telephone">
                        <a href="tel:+1-781-888-4067">
                            <?php the_field('contact_me_button'); ?>
                        </a>
                    </div>
                </div>
            </div>


            <?php
			while ( have_posts() ) : the_post();

				//get_template_part( 'template-parts/page/content', 'page' );    
?>
                <h2 class="h2-style page-title">
                    <?php the_title(); ?>
                </h2>
                <div id="mycontentid" class="some classes">
                    <?php the_content(); ?>
                </div>

                <?php         
          
          
          
          
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
?>


        </div>
    </div>

    <div class="container bottom-container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2 class="h2-style">Group Therapy</h2>
                <p>Bereavement Group meets every Saturday, 9-10am at 71 Adams Street, Milton, MA. Walk-ins Welcome.</p>
                <p><a class="btn btn-default" href="<?php the_field('groups_link'); ?>" role="button">View more &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2 class="h2-style">Activity Therapy</h2>
                <p>I have also developed Activity Therapy. This incorporates the clients' favorite activity, creative interest, or sport into the therapy itself...</p>
                <p><a class="btn btn-default" href="<?php the_field('activity_therapy_link'); ?>" role="button">View more &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2 class="h2-style">Couples Therapy</h2>
                <p>One of my specialties is Couples and Family Therapy. I have extensive training in Systemic Family Therapy...</p>
                <p><a class="btn btn-default" href="<?php the_field('family_and_marital_therapy_link'); ?>" role="button">Learn More &raquo;</a></p>
            </div>
        </div>

        <?php get_footer(); ?>