     
 
<?php if ( is_sidebar_active('secondary_widget_area') ) : ?>
        <div id="secondary" class="widget-area">
            <div class="xoxo">
                <?php dynamic_sidebar('secondary_widget_area'); ?>
            </div>
        </div><!-- #secondary .widget-area -->
<?php endif; ?>
<?php if ( is_sidebar_active('primary_widget_area') ) : ?>
       
        <div id="primary" class="widget-area">
            <div class="xoxo">
                <?php dynamic_sidebar('primary_widget_area'); ?>
            </div>
        </div><!-- #primary .widget-area -->
<?php endif; ?> 