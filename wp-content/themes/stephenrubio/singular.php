<?php get_header() ?>
<div class="c-zone w-4/5 mt-8">
    <h2 class="font-normal pb-4 border-b-4 border-solid border-black mb-6">
        <?php the_title(); ?>
    </h2>
    <?php get_template_part('content'); ?>
</div>
<?php get_footer() ?>