<?php

function adicionar_compatibilidade_gutenberg()
{
	add_theme_support('responsive-embeds');
	add_theme_support('wp-block-styles');
	add_theme_support('align-wide');

	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __('Cor principal', 'foundationpress'),
				'slug'  => 'principal',
				'color' => '#1779ba',
			),
			array(
				'name'  => __('Cor secundária', 'foundationpress'),
				'slug'  => 'secundaria',
				'color' => '#767676',
			),
			array(
				'name'  => __('Sucesso', 'foundationpress'),
				'slug'  => 'sucesso',
				'color' => '#3adb76',
			),
			array(
				'name'  => __('Atenção', 'foundationpress'),
				'slug'  => 'atencao',
				'color' => '#ffae00',
			),
			array(
				'name'  => __('Alerta', 'foundationpress'),
				'slug'  => 'alerta',
				'color' => '#cc4b37',
			),
		)
	);

	add_theme_support('disable-custom-colors');

	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name' => __('Pequeno', 'themeLangDomain'),
				'size' => 12,
				'slug' => 'pequeno',
			),
			array(
				'name' => __('Normal', 'themeLangDomain'),
				'size' => 16,
				'slug' => 'medio',
			),
			array(
				'name' => __('Grande', 'themeLangDomain'),
				'size' => 20,
				'slug' => 'grande',
			),
		)
	);

	add_theme_support('disable-custom-font-sizes');

	add_theme_support('editor-styles');
	add_editor_style('editor-styles.css');
	add_theme_support('dark-editor-style');
}
add_action('after_setup_theme', 'adicionar_compatibilidade_gutenberg');
