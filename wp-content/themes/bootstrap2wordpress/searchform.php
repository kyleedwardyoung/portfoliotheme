<!-- TTHE LAYOUT IS WRONG BUT SEARCH WORKS!!!-->
<!--
<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
    </div>
</form>
-->




<!--
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input-append type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
-->






<!--
<form action="/" method="get">
    <label for="search">Search in <?php echo home_url( '/' ); ?></label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/assets/img/icon-search-48x48.png" />
</form>
-->






<!-- THE LAYOUT IS CORRECT BUT SEARCH DOESN'T WORK - TEXT BUTTON -->
<!--
<div class="input-group">
    <input type="text" class="form-control" placeholder="Search text">
    <span class="input-group-btn" style="width:0;">
        <button class="btn btn-default" type="button">Go!</button>
    </span>
</div>
-->





<!-- THE LAYOUT IS CORRECT BUT SEARCH DOESN'T WORK - GLYPH BUTTON -->
<!--
<form action='...' method='POST' class='form-group'>
    <div class="form-horizontal">
        <input type="text" name="..." class="form-control" placeholder="Search People..."style="width:125px;max-width:125px;display:inline-block"/>
        <button type="submit" class="btn btn-primary" style="margin-left:1px;margin-top:-2px;min-height:36px;">
             <i class="glyphicon glyphicon-search"></i>
        </button>
    </div>
</form>
-->




<!-- THE LAYOUT IS CORRECT AND SEARCH WORKS - TEXT BUTTON!!!-->
<!--
<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    
    <div class="input-group">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" placeholder="Search ..." style="width:125px;max-width:125px;display:inline-block" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        
        <span class="input-group-btn" style="width:0;">
            <input class="btn btn-default" style="width: auto; margin-left: 1px;" type="submit" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
        </span>
    </div>
</form>
-->





<!-- THE LAYOUT IS CORRECT AND SEARCH WORKS - GLYPH BUTTON!!!-->
<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    
    <div class="input-group">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" placeholder="Search ..." style="width:125px;max-width:125px;display:inline-block" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        
        <span class="input-group-btn" style="width:0;">
            <button type="submit" class="btn btn-primary" style="margin-left:5px;margin-top:-2px;min-height:36px;">
            <i class="glyphicon glyphicon-search"></i>
            </button>
        </span>
    </div>
</form>

