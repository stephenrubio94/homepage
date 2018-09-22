<?php get_header() ?>
<div class="main">
archive portfolio
    <h2 class="py-4 font-normal border-b-4 border-black mb-4">
        <?php echo post_type_archive_title(); ?>
    </h2>
    <?php get_template_part('content', '') ?>
</div>
<?php get_footer() ?>