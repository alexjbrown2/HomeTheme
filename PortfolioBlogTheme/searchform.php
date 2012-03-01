
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
 <input type="text" value="<?php the_search_query(); ?>" name="s" 
 	id="s" size="18" onfocus="this.value=''" class="text" />
 <input type="submit" id="searchsubmit" class="submit" value=" " />
</form>
