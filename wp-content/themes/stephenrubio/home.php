<?php get_header() ?>
<div class="main">
    home
    <h2 class="py-4 font-normal border-b-4 border-black mb-4">
        <?php single_post_title(); ?>
    </h2>
    <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <div class="content">
                <?php get_template_part( 'content', get_post_format() );?>
            </div>
        <?php endwhile; endif; 
    ?>
</div>
<?php get_footer() ?>