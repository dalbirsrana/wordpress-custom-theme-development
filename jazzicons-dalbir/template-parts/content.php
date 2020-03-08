<?php   ?>
<article class="<?php post_class(); ?>">

<h2 class="entry-title">
    <?php 
        if ( !is_single() ) : 
    ?>

        <a href="<?php the_permalink(  ); ?>">
            <?php the_title(); ?>
        </a>
        
    <?php 
        else: 
            the_title();
        endif;  
    ?>
</h2>


<div class="entry-meta">
    <span>Posted on</span>
    <span class="entry-date"><?php the_date(); ?></span>    
</div>



<?php if ( !is_single() ) : ?>

    <div class="entry-thumbnail">
        <?php the_post_thumbnail('medium'); ?>
    </div>

<?php endif ?>

<div class="entry-content">

    <?php
        if ( is_single() ) :
            the_content();        
        else:        
            the_excerpt();        
        endif;    
    ?>

</div>

<footer class="entry-footer">
    <div class="entry-category">
        <span>Posted in:  </span>
        <?php the_category(' &bull; '); ?>
    </div>

    <div class="entry-tags">
        <span>Tagged: </span>
        <?php the_tags(' ', '&bull; '); ?>
    </div>
</footer>


</article>