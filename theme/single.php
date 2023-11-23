<?php
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(['container', 'conteudo__principal']); ?>>
            <?php the_content(); ?>
        </div>
<?php
    endwhile;
else :
    _e('Desculpe, não temos posts nestas condições');
endif;

get_footer();
