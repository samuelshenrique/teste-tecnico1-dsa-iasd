<?php
get_header();
?>
<div class="container conteudo__principal">
        <a href="/pets/" class="pet__retornar-listagem">
            ← Retornar à listagem de pets
        </a>
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
                $campos = get_fields();
                if (!empty($campos)) :
        ?>
        <div class="pet__conteudo">
            <div class="pet__foto">
                <img src="<?php echo $campos['pet_imagem']['sizes']['large']; ?>" alt="<?php $campos['pet_imagem']['alt']; ?>" class="pet__imagem">
            </div>
            <div class="pet__detalhes">
                <h1 class="pet__nome">
                    <?= $campos['pet_nome']; ?>
                </h1>
                <hr class="hr--menor">
                <div class="pet__informacoes">
                    <p class="pet__informacao">
                        <b> Raça: </b> <?= $campos['pet_raca']; ?>
                    </p>
                    <p class="pet__informacao">
                        <b> Cor do pelo: </b> <?= $campos['pet_cor_pelo']; ?>
                    </p>
                    <p class="pet__informacao">
                        <b> Tamanho: </b> <?= $campos['pet_tamanho']; ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
                endif;
            endwhile;
        endif;
        ?>

        <hr class="hr--maior hr--centralizado">
</div>
<?php
get_footer();
