<?php get_header( 'blog' ); ?>


  <!--start portfolio -->

  <div class="container">
    <div class="sixteen columns">
      <h2>
        <?php
        /* translators: %s: search query. */
        printf( esc_html__( 'Результаты поиска для: %s', 'crazystudio' ), '<span>' . get_search_query() . '</span>' );
        ?>
      </h2>
    </div>
    <div class="eleven columns">

      <?php
      if ( have_posts() ) :
      
        while ( have_posts() ) : the_post(); ?>
          
          <div class="post post-single">
            <div class="inner-spacer-right-lrg">
              <div class="post-title">
                <h3>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <div class="post-meta">
                  <div class="dateWrap">
                    <div class="date-day">
                      <?php the_time( 'j' ); ?>
                    </div>
                    <div class="date-month">
                      <?php the_time( 'F' ); ?>
                    </div>
                    <div class="date-year">
                      <?php the_time( 'Y' ); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="post-media">
                <?php the_post_thumbnail( '', 'class=scale-with-grid' ) ?>
              </div>
            </div>

            <div class="post-body">
              <?php the_excerpt(); ?>
              <div>
                <a href="<?php the_permalink(); ?>">Далее</a>
              </div>
            </div>

            <div class="tags">
              <?php the_tags( '', '', '' ); ?>
            </div>
          </div>
          <!-- .post end -->
        <?php
        endwhile;

        the_posts_pagination();

      else :

        echo wpautop( 'По заданному запросу ничего не найдено' );

      endif; ?>

    </div>

    <div class="four columns offset-by-one">

      <?php get_sidebar(); ?>

    </div>
  </div>
  <!--end blog-->


<?php get_footer( 'blog' ); ?>