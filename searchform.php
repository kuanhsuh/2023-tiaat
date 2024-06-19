<?php
/* Custom search form */
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label class="flex ">
      <div class="w-10/12 pr-6">
        <input type="search" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
       </div>
      <div class="w-2/12 pl-2">
        <input type="submit" class="w-full h-full bg-sky-700 text-white rounded-md search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
      </div>
    </label>
</form>