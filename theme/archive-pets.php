<?php
get_header();

global $paged;

$paginaAtual = $paged ? $paged : 1;

$query = new WP_Query([
    'post_type' => 'pets',
    'orderby' => 'post_date',
    'posts_per_page' => 8,
    'paged' => $paged
]);

?>
<div class="container conteudo__principal">
    <h1 class="titulo">Pets</h1>
    <div class="pets">
        <?php if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $campos = get_fields();
                if (!empty($campos)) :
        ?>
                    <div class="pets--listagem">
                        <a href="<?= get_the_permalink(); ?>" class="pets__link">
                            <img src="<?= $campos['pet_imagem']['sizes']['thumbnail']; ?>" alt="<?= $campos['pet_imagem']['alt']; ?>" class="pets__foto">
                            <div class="pets__detalhes">
                                <h3 class="pets__titulo">
                                    <?= $campos['pet_nome']; ?>
                                </h3>
                                <div class="pets__informacoes">
                                    <span class="pets__raca">
                                        <b>Raça: </b> <?= $campos['pet_raca']; ?>
                                    </span>
                                    <span class="pets__porte">
                                        <b>Porte: </b> <?= $campos['pet_tamanho']; ?>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                endif;
            endwhile;
            ?>
    </div>
    <div class="paginacao">
        <?php
            global $wp_query;
            $big = 999999999;
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages,
                'prev_text'    => __('← Anterior'),
                'next_text'    => __('Próximo  →'),
                'type'  => 'list',

            ));
        ?>
    </div>
<?php
        endif;
?>
</div>
<?php
get_footer();
