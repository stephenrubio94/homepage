<?php get_header() ?>
<div class="main">
page
    <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <h2 class="py-4 font-normal border-b-4 border-black mb-4">
                <?php the_title(); ?>
            </h2>
            <div class="content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; 
    ?>
</div>
<?php get_footer() ?>