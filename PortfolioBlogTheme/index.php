<?php get_header(); ?>
<br />
<div id="container">
<div id="blogwrap">
<?php /* The Loop — with comments! */ ?>
<?php while (have_posts()) : the_post(); ?>

<?php if (is_paged()) : ?>
<?php $postclass = ('post'); ?>
<?php else : ?>
<?php $postclass = ($post == $posts[0]) ? 'featured' : 'post'; ?>
<?php endif; ?>


 <div id="entirepost">
<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
                <div class="<?php echo $postclass; ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php /* an h2 title */ ?>
                  
                   <span class="meta-prep meta-prep-entry-date" style="position:absolute; left:-5000px;"><?php _e('Published ', 'your-theme'); ?></span>
                       <div id="datewrap"><span class="entry-date"  id="month"><abbr class="published" title="<?php the_time('l, F j, y') ?>">
						<?php the_time( 'F' ); ?></abbr></span>
                       
                        <span id="date">
						<?php the_date( 'j,' ); ?></span>
                        
                        <span id="year">
                        <?php the_time( 'Y' ); ?>
                        </span>
                        </div><!--datewrap-->
                         
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
<?php /* Microformatted, translatable post meta */ ?>
                    <!-- .entry-meta -->
 
<?php /* The entry content */ ?>
                    <div class="entry-content">
<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
                    </div><!-- .entry-content -->
                    <div class="entry-meta">
                        
                        
						<span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                        
						<?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
                        
                        
                        
                        
                        
                        
                        
                    </div><!--entrymeta-->
 
<?php /* Microformatted category and tag links along with a comments link */ ?>
                    <div class="entry-utility">
                        <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'your-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
                        <span class="meta-sep"> | </span>
                        <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'your-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'your-theme' ), __( '1 Comment', 'your-theme' ), __( '% Comments', 'your-theme' ) ) ?></span>
                        <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
                    </div><!-- #entry-utility -->
                </div><!-- #post-<?php the_ID(); ?> -->
 
<?php /* Close up the post div and then end the loop with endwhile */ ?>     
 <br />
 </div><!--entirepost-->
 
<?php endwhile; ?>

</div><!--blogwrap-->


</div><!-- #container -->
<div id="sidebarWrap">
<?php get_sidebar(); ?>
</div>
<br class="clearfloat" />
  <?php /* Bottom post navigation */ ?>

                <div id="nav-below" class="navigation">
                   <p><?php posts_nav_link('','Newer Posts', 'Older Posts'); ?></p>
                </div><!-- #nav-below -->

<br class="clearfloat" /> 
<?php get_footer(); ?>