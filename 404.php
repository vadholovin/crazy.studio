<?php get_header( 'blog' ); ?>


  <!--start portfolio -->

  <div class="container">
    <div class="sixteen columns">
      <h2>
        <?php
        esc_html_e( 'Упс! Эта страница не найдена', 'crazystudio' );
        ?>
      </h2>
    </div>
    <div class="eleven columns">

      <?php esc_html_e( 'Похоже, ничего не найдено по заданному пути. Может, попробуете воспользоваться поиском или архивом статей?', 'crazystudio' ); ?>

    </div>

    <div class="four columns offset-by-one">

      <?php get_sidebar(); ?>

    </div>
  </div>
  <!--end blog-->


<?php get_footer( 'blog' ); ?>