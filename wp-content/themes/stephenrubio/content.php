<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="content pl-4">
        <?php the_title(); ?>
        <?php the_content(); ?>
    </div>

<?php endwhile; endif; ?>