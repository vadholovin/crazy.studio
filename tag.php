<?php get_header( 'blog' ); ?>


<!--start portfolio -->

<div class="container">
  <div class="sixteen columns blogTitle">
    <h1>
      <span>Наш</span>
      <br>Блог</h1>
  </div>
  <div class="eleven columns">


    <?php
    if ( is_tag() ) :
      $this_tag = $wp_query->queried_object->slug;
      $tag_posts = get_posts( array( 'tag' => $this_tag ) );

      foreach ( $tag_posts as $post ) :
        setup_postdata( $post );
        ?>
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
      endforeach;

      the_posts_pagination();
      wp_reset_postdata();
      
    endif; ?>

  </div>

  <div class="four columns offset-by-one">

    <?php get_sidebar(); ?>

  </div>
</div>
<!--end blog-->


<?php get_footer( 'blog' ); ?>