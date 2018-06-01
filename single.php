<?php get_header( 'blog' ); ?>	


<!--start portfolio -->
        
<div class="container">
    <div class="sixteen columns blogTitle">
    	<h1><span>Наш</span><br>Блог</h1>
    </div>
    <div class="eleven columns">
        
      <div class="post post-single">
        <?php
        setup_postdata( $post );
          ?>
            
            <div class="inner-spacer-right-lrg">
              <div class="post-title">
                <h3><?php the_title(); ?></h3>
                <div class="post-meta">
                    <div class="dateWrap">
                        <div class="date-day"><?php the_time( 'j' ); ?></div>
                        <div class="date-month"><?php the_time( 'F' ); ?></div>
                        <div class="date-year"><?php the_time( 'Y' ); ?></div>
                    </div>					
                </div>
              </div>
              <div class="post-media">
                <?php the_post_thumbnail( '', 'class=scale-with-grid' ) ?>
              </div>				
            </div>
          
            <div class="post-body">
              <?php the_content(); ?>
            </div>
                
            <div class="tags">
              <?php the_tags( '', '', '' ); ?>
            </div>
          <?php
        wp_reset_postdata();
        ?>
        </div><!-- .post end -->
          
      


</div>
        
<div class="four columns offset-by-one">        
	        
  <?php get_sidebar(); ?>      
        
</div>
</div>
<!--end blog--> 


<?php get_footer( 'blog' ); ?>
