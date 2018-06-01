<!-- search widget -->
<div class="widget widget_search">
  <form action="<?php echo home_url( '/' ); ?>" >
    <input name="s" id="s" type="text" class="search" placeholder="Что ищем..." value="<?php echo get_search_query(); ?>">
    <input type="submit" value="Поиск" />
  </form>
</div>