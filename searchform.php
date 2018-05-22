<div class="search-wrap">
  <form role="search" method="get" class="searchform group inputbox" action="<?php echo home_url( '/' ); ?>">

  <input required="required" type="text" class="search-field"
  value="<?php echo get_search_query() ?>" name="s" placeholder="Search"/>
  <input id="search_submit" value="Rechercher" type="submit">
  </form>
</div>
