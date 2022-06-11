<?php 
/*
  This file is used to override the default search widget
  But it didn't work. After research, it seems it is caused by
  Gutenburg blocks interfering, and this way of replacing the search 
  widget is outdated.
*/
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form 
  role="search" 
  method="get" 
  action="<?php echo esc_url( home_url( '/' ) ); ?>" 
  class="search-form"
>

  <div class="input-group">
    <input 
      type="search" 
      name="s" 
      id="<?php echo $unique_id; ?>" 
      class="form-control"
      value="<?php the_search_query(); ?>"
      placeholder="<?php _e( 'Search', 'htmlonly'); ?>"
    />

    <span class="input-group-btn">
      <button type="submit">Sea</button>
    </span>

  </div>

</form>