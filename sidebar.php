<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside id="sidebar" class="small-12 large-4 columns">
	<?php 
        do_action( 'foundationpress_before_sidebar' ); 
        dynamic_sidebar("sidebar-widgets"); 
        do_action( 'foundationpress_after_sidebar' ); 
    ?>
</aside>
